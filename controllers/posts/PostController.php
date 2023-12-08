<?php
    require_once "models/posts/Post.php";
    require_once "models/posts/PostDetail.php";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    function listPost(){
        $status = "list";
        $items = list_post();
        return require_once "components/Home.php";
    }
    function addPost() {
        $status = "add";
        $target_dir = "assets/upload/";
        $date = getdate();
        $formartDate = $date['weekday']. ", ".$date['mday']."/".$date['mon']."/".$date['year'].", ".$date['hours'].":".$date['minutes'];
        if(isset($_POST['create_post_btn']) && isset($_FILES['image'])){
            $title = $_POST['title_post'];
            $content = $_POST['content_post'];
            $imagePath = $_FILES['image'];
            $noImage = "0";
            if($_FILES['image']['size'] > 0){
                if($_FILES['image']['error'] > 0){
                    return "Upload không thành công";
                }else{
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$_FILES['image']['name']);
                }
                create_post($title, $content, $imagePath['name'], $formartDate);
            }else if($_FILES['image']['size'] == 0){
                create_post($title, $content, $noImage, $formartDate);
            }
        }
        return require_once "components/Home.php";
    }
    
    // POST DETAIL
    function postDetail(){
        $id = $_GET['id'];
        $data_detail = select_post($id);
        $data_cmt = select_comment($id);
        $status = "detail";
        return require_once "components/Home.php"; 
    }

    // POST MANAGER
    function client(){
        $status = "manager";
        return require_once "components/Home.php";
    }
    function editPost(){
        $status = "edit_post";
        $items = list_post();
        return require_once "components/Home.php";
    }
    function editPostFrom(){
        $status = "edit_post_from";
        $id = $_GET['id'];
        $edit_data = edit_post($id);
        return require_once "components/Home.php";
    }
    function updatePostFrom(){
        if(isset($_POST['update_post_btn'])){
            $id = $_POST['id'];
            $title = $_POST['title_post'];
            $content = $_POST['content_post'];
            $pathImage = $_FILES['image'];
            $date = getdate();
            $update_at = $date['weekday']. ", ".$date['mday']."/".$date['mon']."/".$date['year'].", ".$date['hours'].":".$date['minutes'];
            if($_FILES['image']['name'] != ""){
                move_uploaded_file($_FILES['image']['tmp_name'], "assets/upload/".$_FILES['image']['name']);
                $image = $pathImage['name'];
            }elseif($_FILES['image']['name'] == ""){
                $image = $_POST['image_update'];
            }elseif(!isset($_POST['image_update'])){
                $image = "0";
            }
            update_post($id, $title, $content, $image, $update_at);
            header("location:?url=edit-post");
        }
    }
    function deletePostFrom(){
        $id = $_GET['id'];
        delete_post($id);
        header("location:?url=edit-post");
    }