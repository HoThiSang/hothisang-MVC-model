<?php
require_once dirname(dirname(__DIR__)) . '/model/post.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ? $_GET['id'] : '';
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title;
    if ( isset($id) && !empty($title)  && !empty($description)) {
        $post = updatePost($id, $title, $description);
        header('location: /start-code/post');
    }
   require dirname(dirname(__DIR__)) . "/views/post/post.view.php";
}
