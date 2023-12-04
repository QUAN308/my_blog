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