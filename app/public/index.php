<?php

$query = trim($_SERVER['REQUEST_URI'], '/');
const WWW = __DIR__;
const CORE = WWW;


require_once('../vendor/core/Router.php');
require_once('../vendor/libs/functions.php');
// require_once('../app/controller/Main.php');
// require_once('../app/controller/Posts.php');
// require_once('../app/controller/PostsNew.php');


spl_autoload_register(function() {

});

dd(gettype(CORE));
dd(CORE);




Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);

// if (Router::matchRoute($query)) {
//     // dd(Router::getRoutes());
// } else {
//     echo '404';
// }
