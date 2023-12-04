<?php
    require_once "models/posts/Post.php";
    require_once "models/posts/PostDetail.php";
    function listPost(){
        $status = "list";
        $items = list_post();
        return require_once "components/Home.php";
    }

    function addPost() {
        $status = "add";
        $target_dir = "assets/upload/";
        $date = getdate();
        $formartDate = $date['weekday']. ", ".$date['mday']."/".$date['mon']."/".$date['year'].", ".$date['hours'] - 6 .":".$date['minutes'];
        if(isset($_POST['create_post_btn']) && isset($_FILES['image'])){
            $title = $_POST['title_post'];
            $content = $_POST['content_post'];
            $imagePath = $_FILES['image'];
            if($_FILES['image']['error'] > 0){
                return "Upload không thành công";
            }else{
                move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$_FILES['image']['name']);
            }
            create_post($title, $content, $imagePath['name'], $formartDate);
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