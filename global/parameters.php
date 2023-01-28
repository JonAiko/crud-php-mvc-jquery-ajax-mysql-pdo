<?php
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));

setlocale(LC_ALL, 'es_CL');
ini_set('date.timezone', 'America/santiago');

// date_default_timezone_get('America/santiago');

define('TITLE', 'projectMvc');

define('LANG', 'es');

define('CHARSET', 'utf-8');

define('BASEPATH', IS_LOCAL ? '/php_mvc_jquery_ajax_mysql' : '');

define('PORT', '80');
define('URL', IS_LOCAL ? 'http://127.0.0.1' . PORT. '/php_mvc_jquery_ajax_mysql'.'/' : '');


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);

define('CONFIG', ROOT . 'config' . DS);
define('CONTROLLERS', ROOT . 'app/http/controllers' . DS);
define('MODELS', ROOT . 'app/models' . DS);
define('VIEWS', ROOT . 'resources/views' . DS);
define('HELPERS', ROOT . 'helpers' . DS);

define('PUBLIC', ROOT . 'public' . DS);
define('CSS', ROOT.'public/css'.DS);
define('IMAGES', ROOT.'public/img'.DS);
define('JS', ROOT.'public/js'.DS);


define('LDB_ENGINE', 'mysql');
define('LDB_HOST', 'localhost');
define('LDB_NAME', 'db_project');
define('LDB_USER', 'root');
define('LDB_PASS', '');
define('LDB_CHARSET', 'utf8');


define('DEFAULT_CONTROLLER','pageController');
define('DEFAULT_ERROR_CONTROLLER', 'error');
define('DEFAULT_METHOD','index');
