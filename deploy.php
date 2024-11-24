<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:mkocansey/bladewind.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('bladewindui.com')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/bladewindui.com');

// Hooks

after('deploy:failed', 'deploy:unlock');
