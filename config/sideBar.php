<?php if(!isset($_SESSION['admin'])): ?>
<div class="col xl-3 lg-0 md-0 toggle">
                <!-- Đăng ký / Đăng nhập -->
    <div class="acount">
        <h6 class="title">Tài khoản</h6>
        <?php if(isset($_SESSION['user_id']) ): ?>
            <div class="account-info">
                <img src="<?= $_SESSION['image'] ?>" alt="" class="account-img">
                <span class="account-name"><?= $_SESSION['user_id'] ?></span>
            </div>
        <?php endif; ?>
        <div class="account-form">
            <?php if(empty($_SESSION['user_id']) ): ?>
            
                <a class="forgot-pass" href="<?= BASE_URL.'/login' ?>">Đăng nhập</a>
                <a href="<?= BASE_URL.'/creteAccount' ?>" class="forgot-pass">Đăng ký thành viên</a>
            <?php else: ?>
                <a href="<?= BASE_URL ?>/changeLogin?ID=<?= $_SESSION['id'] ?>" class="forgot-pass">Đổi mật khẩu</a>
                <a href="<?= BASE_URL ?>/updateAccount?ID=<?= $_SESSION['id'] ?>" class="forgot-pass">Cập nhật tài khoản</a>
                <?php if($_SESSION['role'] == 'admin'): ?>
                    <a href="<?= BASE_URL.'/admin-handle' ?>" class="forgot-pass">Quản trị website</a>
                <?php endif; ?>
                <a href="<?= BASE_URL.'/logout' ?>" class="forgot-pass">Đăng xuất</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Danh mục -->
        <div class="category">
        <h6 class="title">DANH MỤC</h6>
        <ul class="base-list">
            <?php foreach($categorySideBar as $col):?> 
                 <li class="base-item">
                    <a href="<?= BASE_URL ?>/productCategory?IDDM=<?= $col['id'] ?>" class="base-link">
                        <?= $col['ten_loai'] ?>
                    </a>
                </li>
            <?php endforeach?>
        </ul>
        <div class="search-key form-group">
            <input type="text" class="search-key-input form-control" placeholder="Từ khóa tìm kiếm">
        </div>
        </div>

        <!-- Top 10 yêu thích -->
        <div class="top-ten ">
        <h6 class="title">TOP YÊU THÍCH</h6>
        <ul class="base-list">         
            <?php foreach($top10Love as $item):?>
             <li class="base-item">
                <a href="<?= BASE_URL ?>/productDetail?ID=<?= $item['id'] ?>" class="base-link">
                    <img src="<?= !empty($item['img']) ? $item['img'] : $item['img_link'] ?>" alt="máytính" width="60px">
                    <?= $item['ten_san_pham'] ?>
                </a>
            </li>
            <?php endforeach;?>           
        </ul>
        </div>
</div>
<?php endif; ?>