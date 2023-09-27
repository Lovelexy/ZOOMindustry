<?php

namespace Deployer;

require 'recipe/rsync.php';
require 'recipe/wordpress.php';

inventory('deployment/hosts.yml');

set('application', 'Website Wordpress');

set('repository', '{{REPOSITORY_ADDRESS}}');
set('keep_releases', 2);
set('rsync_src', __DIR__);
set('rsync_dest', '{{release_path}}');
set('shared_files', ['wp-config.php', '.htaccess', 'wp-content/advanced-cache.php', 'wp-content/wp-cache-config.php']);
set('shared_dirs', ['wp-content/cache', 'wp-content/uploads']);

task('permissions', function () {
    run('cd {{deploy_path}} && chown -R www-data:www-data ./');
})->desc('Execute chown for www-data');

task('cp:configs', function () {
    $commands = [
        'cp {{release_path}}/wp-config.php.env {{deploy_path}}/shared/wp-config.php && rm {{release_path}}/wp-config.php.env',
        'cp {{release_path}}/.htaccess.env {{deploy_path}}/shared/.htaccess && rm {{release_path}}/.htaccess.env',
    ];
    foreach ($commands as $command) {
        run($command);
    }
})->desc('Copy config files');

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync',
    'deploy:shared',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy project');

after('deploy:shared', 'cp:configs');
after('deploy', 'permissions');
after('permissions', 'success');

after('deploy:failed', 'deploy:unlock');
