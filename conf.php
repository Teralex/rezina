<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'testdb');

define('PATH_LIB', PATH_ROOT.'lib/');
define('PATH_TEMPLATES', PATH_ROOT.'templates/');
define('SMARTY_DIR', PATH_LIB .'Smarty-3.1.19/libs/');

if ( !ini_get('date.timezone') ) date_default_timezone_set('Europe/Kiev');
