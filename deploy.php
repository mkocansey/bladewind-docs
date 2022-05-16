<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:mkocansey/bladewind-docs.git');
set('keep_releases', 5);
set('composer_options', 'update --no-scripts');
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('production')
    ->set('remote_user', 'mkocansey')
    ->set('hostname', 'bladewindui.com')
    ->set('application', '{{hostname}}')
    ->set('labels', [ 'stage'=> 'production'])
    ->set('branch','development')
    ->set('deploy_path', '/var/www/{{application}}');

// Tasks
desc('Confirm whether to deploy or not');
//runLocally('confirm_deployment');
task('deploy', function(){
    writeln("\n\n\n");
    if (! askConfirmation('Are you sure you want to deploy?')) {
        warning('Deployment aborted by user');
        exit;
    } 
    writeln('==================================================================================================================');
    invoke('build');
});


desc('Deploy the project');
task('build', [
    'deploy:prepare',
    'deploy:publish',
    'deploy:run_composer',
    'deploy:success'
]);

desc('run composer update');
task('deploy:run_composer', function(){
    cd(get('deploy_path').'/current');
    run('cp ../.env . && sudo chgrp -R www-data storage'); //rm -f composer.lock && 
    run('/usr/local/bin/composer update --ignore-platform-reqs --no-scripts'); //rm -f composer.lock && 
    run('php artisan config:clear && php artisan cache:clear && php artisan view:clear && php artisan route:clear && php artisan clear-compiled && php artisan optimize'); 
});

after('deploy:failed', 'deploy:unlock');