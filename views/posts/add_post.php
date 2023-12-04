<form class="mt-3" style="width: 720px; margin: auto;" enctype="multipart/form-data" action="index.php?url=add-post" method="post">
        <h3 class="text-center">Tạo bài viết</h3>
        <div class="row">
            <div class="col-md-12">
                <input style="width: 100%; height: 50px; padding-left: 10px; padding-right: 10px;" placeholder="Nhập tiêu đề bài viết..." type="text" name="title_post" id="">
            </div>
            <div class="col-md-12 pt-4">
                <input type="file" name="image" id="">
            </div>
            <div class="col-md-12 pt-4 position-relative">
                <textarea placeholder="Nhập nội dung bài viết..." style="width: 100%; padding: 10px;" name="content_post" id="" cols="30" rows="10"></textarea>
                <div class="col-md-12">
                    <input style="padding: 5px 10px; background-color: #000; color: #fff; border-radius: 5px;" class="" name="create_post_btn" type="submit" value="Tạo bài viết">
                </div>
            </div>
        </div>
    </form>