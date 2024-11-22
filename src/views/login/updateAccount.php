<div class="col xl-9">
    <h6 class="login-title">Cập nhật tài khoản</h6>

    <form class="login-form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="user_id" value="<?=$findUser['user_id']?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Họ và tên" name="user_name" value="<?=$findUser['user_name']?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Pass" name="password" value="Mật khẩu của bạn">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Địa chi email" value="<?=$findUser['email']?>" name="email">
        </div>
        
        <button class="btn-login"><a href="">Cập nhật</a></button>
        
    </form>
</div>