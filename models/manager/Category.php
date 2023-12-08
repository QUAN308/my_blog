<?php
    require_once "models/db.php";
    function create_category($name, $thumb_nail){
        $sql = "INSERT INTO `categories`(`name`, `thumb_nail`) VALUES ('$name', '$thumb_nail')";
        return getData($sql);
    }
    
?>