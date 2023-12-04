<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title></title>
</head>

<body>
    <div id="container">
        
        <?php include "Header.php"; ?>
        <?php 
            if($status == "list"){
                include "views/posts/list_post.php";
            }else if($status == "add"){
                include "views/posts/add_post.php" ;
            }else if($status == "detail"){
                include "views/posts/detail_post.php";
            }else if($status == "login"){
                include "views/users/login.php";
            }else if($status == "register"){
                include "views/users/register.php";
            }else if($status == "manager"){
                include "views/posts/post_manager.php";
            }
        ?>
    </div>

    <script type="text/javascript" src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>

</html>