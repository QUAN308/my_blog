        <div id="show_detail_avatar">
            <img src="assets/upload/<?=$_SESSION['login_avatar']?>" alt="">
        </div>
        <header style="width: 922px;" class="border-bottom border-dark position-fixed bg-light">
            <div class="logo">
                <a class="text-decoration-none text-dark" href="?url=/">My Blog</a>
            </div>
            <nav class="navbar">
                <ul class="d-flex align-items-center">
                    <li><a href="?url=/">Trang chủ</a></li>
                    <li class="category_nav"><a href="?url=category">Danh mục</a></li>
                    <?php if(isset($_SESSION['login_user'])): ?>
                        <li><a href="?url=post-manager">Quản lý trang</a></li>
                    <?php endif; ?>
                    <li><a href="?url=/">About me</a></li>
                </ul>
            </nav>
            <div class="login d-flex align-items-center">
                <?php if(isset($_SESSION['login_user'])): ?>
                    <div style="position: relative;" class="box_user_login d-flex align-items-center">
                        <div class="pe-2">
                            <div style="cursor: pointer; margin-bottom: 0;" class="login_suces text-decoration-underline fw-bold text-dark"><?php echo $_SESSION['login_user'] ?></div>
                            <div style="position: absolute; border: 1px solid black; margin-top: 10px; background-color: #fff;" id="btn_logout">
                                <a href="?url=logout">Đăng xuất <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div style="width: 40px; height: 40px;" class="avatar">
                            <img style="width: 40px; height: 40px; object-fit: cover; border-radius: 50px; border: 1px solid black; cursor: pointer;" src="assets/upload/<?=$_SESSION['login_avatar']?>" alt="">
                        </div>
                    </div>
                <?php else: ?>
                    <a href="?url=login" class="text-decoration-underline fw-bold text-dark">Đăng nhập</a>
                <?php endif; ?>
            </div>
        </header>
        