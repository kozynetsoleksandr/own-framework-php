<?php


$query = trim($_SERVER['REQUEST_URI'], '/');

require_once('../vendor/core/Router.php');
require_once('../vendor/libs/functions.php');

Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);

if (Router::matchRoute($query)) {
    dd(Router::getRoute());
} else {
    echo '404';
}
