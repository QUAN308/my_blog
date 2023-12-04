<?php
    $url = isset($_GET['url']) ? $_GET['url'] : "/";

    switch ($url) {
        case '/':
            require_once "controllers/posts/PostController.php"; 
            listPost();
            break;
        case 'add-post':
            require_once "controllers/posts/PostController.php"; 
            addPost();
            break;
        case 'post-detail':
            require_once "controllers/posts/PostController.php"; 
            postDetail();
            break;
        case 'login':
            require_once "controllers/users/UserController.php"; 
            login();
            break;
        default:
            break;
    }
?>