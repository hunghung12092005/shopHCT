<div class="col xl-9">
        <h6 class="login-title">Đổi mật khẩu</h6>

        <form class="login-form" action="" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" placeholder="Tên đăng nhập" value="<?= $_SESSION['id'] ?>">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Mật khẩu cũ" name="passcurrent">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Mật khẩu mới" name="newpass">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới" name="confirmpass">
            </div>
            
            <button class="btn-login">Cập nhật</button>
            
        </form>
    </div>