
    <header class="border-bottom border-dark">
            <div class="logo">
                <a class=" text-decoration-none text-dark" href="?url=/">My Blog</a>
            </div>
            <nav class="navbar">
                <ul class="d-flex align-items-center">
                    <li><a href="?url=/">Trang chủ</a></li>
                    <li class="category_nav position-relative">
                        <a class="nav-link dropdown-toggle">
                            Danh mục
                        </a>
                        <ul class="drop_menu position-absolute border border-dark pe-5 pb-3 bg-light">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </li>
                    <li><a href="">Bài đăng</a></li>
                </ul>
            </nav>
            <div class="login d-flex align-items-center">
                <?php if(isset($_SESSION['login_user'])): ?>
                    <div style="position: relative;" class="box_user_login">
                        <div style="cursor: pointer; margin-bottom: 0;" class="login_suces text-decoration-underline fw-bold text-dark"><?php echo $_SESSION['login_user'] ?></div>
                        <div style="position: absolute; border: 1px solid black; margin-top: 10px; background-color: #fff; " id="btn_logout">
                            <a style="padding: 10px 10px; text-decoration: none; color: #000;" href="?url=logout">Đăng xuất</a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="?url=login" class="text-decoration-underline fw-bold text-dark">Đăng nhập</a>
                <?php endif; ?>
            </div>
        </header>