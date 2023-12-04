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
?>