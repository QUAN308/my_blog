<?php
    require_once "models/posts/Post.php";
    require_once "models/posts/PostDetail.php";
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    function listCategory(){
        $status = "categories";

        return require_once("components/Home.php");
    }
?>