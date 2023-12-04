<?php
    require_once "models/db.php";
    function list_post(){
        $sql = "SELECT * FROM post";
        return getData($sql);
    }
    function create_post($title, $content, $img){
        $sql = "INSERT INTO `post`(`title_detail_post`, `content_post`, `image`) VALUES ('$title', '$content', '$img')";
        return getData($sql);
    }
?>