<?php

$query = trim($_SERVER['REQUEST_URI'], '/');

define( 'WWW', __DIR__);
define( 'CORE', dirname(__DIR__) . '/vendor/core');
define( 'ROOT', dirname(__DIR__, 2));
define( 'APP', dirname(__DIR__));


require_once('../vendor/core/Router.php');
require_once('../vendor/libs/functions.php');


spl_autoload_register(function($class) {
    $file = '..'  . APP . "/controllers/$class.php";
    if (is_file($file)) {
        require_once $file;
    }
});

dd(APP);

Router::add('^pages/?(?P<controller>[a-z-]+)?$', ['controller' => 'Posts']);

//default roots
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);

// if (Router::matchRoute($query)) {
//     // dd(Router::getRoutes());
// } else {
//     echo '404';
// }
