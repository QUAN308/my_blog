<?php
    $get_root = getenv("DOCUMENT_ROOT");
    require_once $get_root."/my_blog/root.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $_ASSETS_CSS ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title></title>
</head>

<body>
    <div id="container">
        <?php include "Header.php" ?>
        <?php include "../views/posts/list_post.php" ?>
        
    </div>

    <script type="text/javascript" src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>

</html>