<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/start-code/' => 'controller/home/index.controller.php',
    '/start-code/post' => 'controller/post/post.controller.php',
    '/start-code/post/create' => 'controller/post/post.create.controller.php',
    '/start-code/post/edit' => 'controller/post/post.edit.controller.php',
    '/start-code/post/detele' => 'controller/post/post.detele.controller.php',
    '/start-code/post/update' => 'controller/post/post.update.controller.php',

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
