<?php
    require_once "models/manager/Category.php";
    function listFunction(){
        $status = "m_manager";
        return require_once("components/Home.php");
    }
    function addCategory(){
        $status = "manager_add_cate";
        $success = false;
        if(isset($_POST['submit_add_cate']) && isset($_FILES['thumb_nail']['name'])){
            $name = $_POST['name_cate'];
            $thumbnailPath = $_FILES['thumb_nail']['name'];
            if($_FILES['thumb_nail'] !== ""){
                move_uploaded_file($_FILES['thumb_nail']['tmp_name'], "assets/upload/ImgCategory/".$_FILES['thumb_nail']['name']);
                $thumb = $_FILES['thumb_nail']['name'];
                create_category($name, $thumb);
                $success = true;
                header("location:index.php?url=add-category");
            }else{
                $thumb = "Không có hình ảnh được tải lên";
                create_category($name, $thumb);
                $success = true;
                header("location:index.php?url=add-category");
            }
        }
        return require_once("components/Home.php");
    }
?>