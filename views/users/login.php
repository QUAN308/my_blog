<form style="width: 700px; margin: auto;" class="d-flex justify-content-center pt-5" action="?url=login" method="post">
    <div class="row">
        <?php if(isset($error_login)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error_login; ?>
            </div>
        <?php elseif(isset($success_login)): ?>
            <div class="alert alert-success" role="alert">
                <?=$success_login?>
            </div>
        <?php endif; ?>
        <h2>Đăng nhập</h2>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" placeholder="Nhập email" type="text" name="email_login" id="">
        </div>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" placeholder="Nhập password" type="password" name="pass_login" id="">
        </div>
        <div class="col-md-12">
            <input style="width: 100%;" class="mt-3 p-2" type="submit" name="btn_login" value="Đăng nhập">
        </div>
        <div class="col-md-12 pt-3">
            <a href="?url=register">Chưa có tài khoản, hãy đăng ký</a>
        </div>
    </div>
</form>