<?php if($success == true): ?>
<div class="alert alert-success" role="alert">
    <?php echo "Tạo danh mục thành công !" ?>
</div>
<?php endif; ?>
<form class="mt-3" style="width: 720px; margin: auto;" enctype="multipart/form-data" action="index.php?url=add-category" method="post">
        <h3 class="text-center">Tạo danh mục</h3>
        <div class="row">
            <div class="col-md-12">
                <input style="width: 100%; height: 50px; padding-left: 10px; padding-right: 10px;" placeholder="Nhập tên danh mục..." type="text" name="name_cate" id="">
            </div>
            <div class="col-md-12 pt-4">
                <p>Ảnh mô tả danh mục</p>
                <input type="file" name="thumb_nail" id="">
            </div>
            <div class="col-md-12 mb-5 d-flex justify-content-end">
                <input style="padding: 5px 10px;" name="submit_add_cate" type="submit" value="Tạo danh mục">
            </div>
        </div>
    </form>