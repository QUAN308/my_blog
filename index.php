<?php
    $url = isset($_GET['url']) ? $_GET['url'] : "/";

    switch ($url) {
        case '/':
            require_once "controllers/posts/PostController.php"; 
            listPost();
            break;
        case 'category':
            require_once "controllers/category/CategoryController.php"; 
            listCategory();
            break;
        case 'add-post':
            require_once "controllers/posts/PostController.php"; 
            addPost();
            break;
        case 'post-manager':
            require_once "controllers/posts/PostController.php"; 
            client();
            break;
        case 'edit-post':
            require_once "controllers/posts/PostController.php"; 
            editPost();
            break;
        case 'edit-from':
            require_once "controllers/posts/PostController.php"; 
            editPostFrom();
            break;
        case 'update-post':
            require_once "controllers/posts/PostController.php"; 
            updatePostFrom();
            break;
        case 'delete-post':
            require_once "controllers/posts/PostController.php"; 
            deletePostFrom();
            break;
        case 'post-detail':
            require_once "controllers/posts/PostController.php"; 
            postDetail();
            break;
        case 'login':
            require_once "controllers/users/UserController.php"; 
            login();
            break;
        case 'register':
            require_once "controllers/users/UserController.php"; 
            register();
            break;
        case 'logout':
            require_once "controllers/users/UserController.php"; 
            logout();
            break;
        // Manager -------------------------------------------------------
        // Category - Manager
        case 'm-category':
            require_once "controllers/manager/MCategoryController.php"; 
            listFunction();
        case 'add-category':
            require_once "controllers/manager/MCategoryController.php"; 
            addCategory();
        default:
            break;
    }
?>