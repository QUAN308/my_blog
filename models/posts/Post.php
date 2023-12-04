<?php
    require_once "models/db.php";
    function list_post(){
        $sql = "SELECT * FROM post";
        return getData($sql);
    }
    function create_post($title, $content, $img, $date){
        $sql = "INSERT INTO `post`(`title_detail_post`, `content_post`, `image`, `created_at`) VALUES (?, ?, ?, ?)";
        return insertBigText($sql, $title, $content, $img, $date);
    }
?>