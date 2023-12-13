<?php

define("DIR_PATH", dirname(__DIR__));
define("DEBUG", 1);
define("WWW", DIR_PATH . '/public');
define("APP", DIR_PATH . '/app');
define("CORE", DIR_PATH . '/vendor/core');
define("HELPERS", DIR_PATH . '/vendor/core/helpers');
define("CACHE", DIR_PATH . '/temp/cache');
define("LOGS", DIR_PATH . '/temp/logs');
define("CONFIG", DIR_PATH . '/config');
define("LAYOUT", 'some-site');
define("PATH", 'http://some-site');
define("ADMIN", 'http://some-site/admin');
define("NO-IMAGE", 'uploads/no-image.jpg');

require_once DIR_PATH . '/vendor/autoload.php';