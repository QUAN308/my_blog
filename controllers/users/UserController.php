<?php
    require_once "models/users/user.php";
    require_once "models/posts/Post.php";
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    function login(){
        $status = "login";
        if(isset($_POST['btn_login']) && $_POST['btn_login']){
            $name = $_POST['email_login'];
            $password = $_POST['pass_login'];
            $data_login = sign_in($name, $password);
            if($data_login == false){
                $error_login = "Tài khoản hoặc mật khẩu không đúng";
            }else{
                $user = $data_login['name'];
                $avatar = $data_login['avatar'];
                $_SESSION['login_user'] = $user;
                $_SESSION['login_avatar'] = $avatar;
                $success_login = "Đăng nhập thành công - quay lại trang chủ";
            }
        }
        return require_once "components/Home.php";
    }
    function register(){
        $status = "register";
        if(isset($_POST['resgister']) && isset($_FILES['avatar'])){
            $name = $_POST['name_user'];
            $email = $_POST['email_user'];
            $pass = $_POST['pass_user'];
            $avatar = $_FILES['avatar'];
            if($_FILES['avatar']['error'] > 0){
                return "Upload ảnh lỗi";
            }else{
                move_uploaded_file($_FILES['avatar']['tmp_name'], "assets/upload/".$_FILES['avatar']['name']);
            }
            create_account($name,$email,$pass,$_FILES['avatar']['name']);
            $success = "Đăng ký tài khoản thành công";
        }
        return require_once "components/Home.php";
    }
    function logout(){
        $status = "list";
        $items = list_post();
        session_destroy();
        return require_once "components/Home.php";
    }
?>