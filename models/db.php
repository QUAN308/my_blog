<?php
    require_once "env.php";
    function connect(){
        $connect = new PDO("mysql:host=".dbhost.";dbname=".dbname.";charset=".dbcharset, dbuser, dbpass);
        return $connect;
    }
    function getData($query, $getAll = true){
        $conn = connect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
    function updatePost($id, $title, $content, $image, $update_at){
        $conn = connect();
        $sql = "UPDATE post SET title_detail_post=?, content_post=?, image=?, updated_at=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $image);
        $stmt->bindParam(4, $update_at);
        $stmt->bindParam(5, $id);
        $stmt->execute();
    }
    function insertBigText($query, $title, $content, $img, $date){
        $conn = connect();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $img);
        $stmt->bindParam(4, $date);
        $stmt->execute();
    }
?>