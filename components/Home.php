<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="background_full"></div>
    <div id="container">
        <?php require_once "Header.php"; ?>
        <?php echo $status; ?>
        <div style="padding-top: 60px;" id="posts">
            <?php
                if($status == "list"){
                    include "views/posts/list_post.php";
                }else if($status == "add"){
                    include "views/posts/add_post.php" ;
                }else if($status == "detail"){
                    include "views/posts/detail_post.php";
                }else if($status == "login"){
                    include "views/users/login.php";
                }else if($status == "register"){
                    include "views/users/register.php";
                }else if($status == "manager"){
                    include "views/manager/Manager.php";
                }else if($status == "edit_post"){
                    include "views/posts/edit_post.php";
                }else if($status == "edit_post_from"){
                    include "views/posts/detail_edit.php";
                }else if($status == "categories"){
                    include "views/category/list_category.php";
                }else if($status == "m_manager"){
                    include "views/manager/Mcategory/Category_mng.php";
                }else if($status == "manager_add_cate"){
                    include "views/manager/Mcategory/add_category.php";
                }
            ?>
        </div>
    </div>
    <script type="text/javascript" src="./assets/js/main.js"></script>
    <script type="text/javascript">
        // khi click vào tên user trên menu bên phải sẽ hiển thị ra nút đăng xuất
        var preLogout = document.querySelector('.login_suces');
        var btnLogout = document.querySelector('#btn_logout');
        var drop_logout = false;
        console.log(btnLogout.style);
        preLogout.addEventListener("click", (e) => {
            e.stopPropagation();
            drop_logout = !drop_logout;
            if(drop_logout == true){
                btnLogout.style.visibility = "visible";
            }else{
                btnLogout.style.visibility = "hidden";
            }
        });
        // code xử lý khi click ra ngoài nút đăng xuất
        document.addEventListener("click", (e) => {
            if(!preLogout.contains(e.target) && e.target !== btnLogout){
                btnLogout.style.visibility = "hidden";
                drop_logout = false;
            }
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>

</html>