<form style="width: 100%;" class="d-flex justify-content-center pt-5" action="?url=register" enctype="multipart/form-data" method="post">
    
    <div class="row">
        <?php if(isset($success)): ?>
            <div class="alert alert-success col-md-12" role="alert"><?php echo $success ?></div>
        <?php else : ?>
        <?php endif; ?>
        <h2>Đăng ký</h2>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" placeholder="Nhập tên người dùng" type="text" name="name_user" id="">
        </div>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" placeholder="Nhập email" type="text" name="email_user" id="">
        </div>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" placeholder="Nhập password" type="password" name="pass_user" id="">
        </div>
        <div class="mb-3 mt-4">
            <label for="formFile" class="form-label">Ảnh đại diện</label>
            <input class="form-control" type="file" name="avatar" id="formFile">
        </div>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" type="submit" name="resgister" value="Đăng ký tài khoản">
        </div>
        <div class="col-md-12 pt-3">
            <a href="?url=login">Quay trở lại đăng nhập</a>
        </div>
    </div>
</form>