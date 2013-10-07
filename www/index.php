<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
// require '.maintenance.php';

define("APP_DIR", __DIR__ . '/../app/');
define("LIBS_DIR", __DIR__ . '/../libs/');
define("WWW_DIR", __DIR__);


// Let bootstrap create Dependency Injection container.
$container = require APP_DIR . 'bootstrap.php';

// Run application.
$container->application->run();
