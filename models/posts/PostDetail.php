<?php
    require_once "models/db.php";
    function select_post($id){
        $sql = "SELECT title_detail_post, content_post, image, created_at, updated_at FROM post WHERE id='$id'";
        return getData($sql, false);
    }
    function select_comment($id){
        $sql = "SELECT comment_content FROM comment WHERE post_id = '$id'";
        return getData($sql);
    }
?>