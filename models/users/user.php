<?php
    require_once "models/db.php";
    function sign_in($email, $password){
        $sql = "SELECT `id`, `name`, `email`, `avatar` FROM `users` WHERE email='$email' AND password='$password'";
        return getData($sql, false);
    }
    function create_account($name, $email, $password, $image){
        $sql = "INSERT INTO `users` (`name`,`email`,`password`, `avatar`) VALUES ('$name','$email','$password','$image')";
        return getData($sql);
    }
?>