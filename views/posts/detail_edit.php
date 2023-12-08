<form class="mt-3" style="width: 720px; margin: auto;" enctype="multipart/form-data" action="index.php?url=update-post" method="post">
        <h3 class=" fw-bold">Chỉnh sửa bài viết</h3>
        <div class="row">
            <input type="hidden" name="id" value="<?=$edit_data['id']?>">
            <div class="col-md-12">
                <input style="width: 100%; height: 50px; padding-left: 10px; padding-right: 10px;" placeholder="Nhập tiêu đề bài viết..." type="text" name="title_post" id="" value="<?php echo $edit_data['title_detail_post'] ?>">
            </div>
            <div class="col-md-12 pt-4">
                <img style="width: 100%; padding-bottom: 20px;" src="assets/upload/<?=$edit_data['image']?>" alt="">
                <input type="hidden" name="image_update" 
                    value="<?php
                    if($edit_data['image'] == ""){
                       echo "0";
                    }else{
                        echo $edit_data['image'];
                    }
                ?>">
                <input type="file" name="image" id="">
            </div>
            <div class="col-md-12 pt-4 position-relative">
                <textarea placeholder="Nhập nội dung bài viết..." style="width: 100%; padding: 10px;" name="content_post" id="" cols="30" rows="10">
                    <?=$edit_data['content_post']?>
                </textarea>
                <div style="width: 100%;" class="col-md-12 mb-5 d-flex justify-content-end">
                    <input style="padding: 5px 10px;" class="" name="update_post_btn" type="submit" value="Cập nhật bài viết">
                </div>
            </div>
        </div>
    </form>