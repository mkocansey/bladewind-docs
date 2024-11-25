<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:mkocansey/bladewind-docs.git');
set('keep_releases', 1);
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
    ->set('branch','laravel-11')
    ->set('deploy_path', '/var/www/html/{{application}}');

// Tasks
desc('Confirm whether to deploy or not');
//runLocally('confirm_deployment');
task('build', function(){
    writeln("\n\n\n");
    if (! askConfirmation('Are you sure you want to deploy?')) {
        warning('Deployment aborted by user');
        exit;
    }
    writeln('==================================================================================================================');
    invoke('config');
});


desc('Deploy the project');
task('config', [
    'deploy:prepare',
    'deploy:publish',
    'deploy:run_composer',
    'deploy:success'
]);

desc('run composer update');
task('deploy:run_composer', function(){
    writeln('RUN COMPOSER ================================================================================');
    cd(get('deploy_path'));
    run('cp .env current/'); //rm -f composer.lock &&
    cd(get('deploy_path').'/current');
    run('touch database/database.sqlite');
    run('echo "-----------------------------------------------------" && composer update'); //php /usr/bin/
    run('echo ">>>>>>>" && sudo chgrp -R www-data storage && php artisan key:generate');
    run('php artisan config:clear && php artisan view:clear');
    run('php artisan route:clear && php artisan clear-compiled && php artisan optimize');
    run('php artisan migrate --force');
    run('sudo chown -R $USER:www-data bootstrap/cache && sudo chown -R $USER:www-data database');
    run('pwd && npm install');
    run('npm run build');
    run('sudo /usr/sbin/service php8.4-fpm reload');
    /*cd(get('deploy_path'));
    run('sudo chgrp -R www-data current/database && touch current/database/database.sqlite'); //rm -f composer.lock &&
    run('sudo cp .env current/ && sudo chgrp -R www-data current/storage'); //rm -f composer.lock &&
    cd(get('deploy_path').'/current');
    run('composer update'); //rm -f composer.lock &&  --ignore-platform-reqs --no-scripts // /usr/local/bin/
    run('php artisan migrate --force && php artisan config:clear && php artisan cache:clear && php artisan view:clear && php artisan route:clear && php artisan clear-compiled && php artisan optimize');
    run('php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-public --force'); //php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-components --force &&
    run('sudo /usr/sbin/service php8.4-fpm reload');*/
});

after('deploy:failed', 'deploy:unlock');
after('deploy:success', 'deploy:run_composer');
