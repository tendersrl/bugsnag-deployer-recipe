<?php

namespace Deployer;

desc('Set new deployed version on Bugsnag');
task('artisan:bugsnag:deploy', function () {
    run('{{bin/php}} {{release_path}}/artisan bugsnag:deploy');
});
