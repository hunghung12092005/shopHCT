 <!-- menu navbar start -->
 <?php if(!isset($_SESSION['admin'])): ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top ">
    <a class="navbar-brand" href="#">
        <img src="./assets/image/LOGOhct.png" alt="Logo" style="width: 90px;">
    </a>
    <?php
// Kiểm tra xem biến session có tồn tại không
if (isset($_SESSION['user_id'])) {
    $name = $_SESSION['user_id'];
    echo "Xin chào,  $name!";
} else {
    echo "Xin chào, khách!
        ";
}
?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-5">
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL.'/' ?>">Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL.'/Product' ?>">Sản phẩm</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL.'/login' ?>">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL.'/contact' ?>">Liên hệ</a></li>
            <!-- Đồ Nam Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMen" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Đồ Nam
                </a>
                <div class="dropdown-content p">
                    <div class="dropdown-column">
                        <h2>Áo</h2>
                        <br>
                        <ul>
                            <li><a href="#">Áo polo</a></li>
                            <li><a href="#">Áo thun</a></li>
                            <li><a href="#">Áo sơ mi</a></li>
                            <li><a href="#">Áo khoác</a></li>
                            <li><a href="#">Áo hoodie - Áo nỉ</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-column">
                        <h2>Quần</h2>
                        <br>
                        <ul>
                            <li><a href="#">Quần jeans</a></li>
                            <li><a href="#">Quần âu</a></li>
                            <li><a href="#">Quần kaki</a></li>
                            <li><a href="#">Quần dài</a></li>
                            <li><a href="#">Quần short</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-column">
                        <h2>Đồ Bộ</h2>
                        <br>
                        <ul>
                            <li><a href="#">Đồ bộ ngắn tay</a></li>
                            <li><a href="#">Đồ bộ dài tay</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-column">
                        <h2>Đồ Thể Thao Nam</h2>
                        <br>
                        <ul>
                            <li><a href="#">Áo thun thể thao</a></li>
                            <li><a href="#">Áo polo thể thao</a></li>
                            <li><a href="#">Quần thể thao</a></li>
                            <li><a href="#">Bộ thể thao</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-column">
                        <h2>Phụ Kiện Nam</h2>
                        <br>
                        <ul>
                            <li><a href="#">Giày</a></li>
                            <li><a href="#">Thắt lưng</a></li>
                            <li><a href="#">Túi xách</a></li>
                            <li><a href="#">Mũ</a></li>
                            <li><a href="#">Tất</a></li>
                            <li><a href="#">Khác</a></li>
                        </ul>
                    </div>
                    <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-polo-nam-apm5193-tra-1-yodyvn.jpg" alt="" style="width: 300px;">
                </div>
            </li>

            <!-- Đồ Trẻ Em Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownKids" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Đồ Trẻ Em
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownKids">
                    <li><a class="dropdown-item" href="#">Áo Trẻ Em</a></li>
                    <li><a class="dropdown-item" href="#">Quần</a></li>
                    <li><a class="dropdown-item" href="#">Đồ Bộ</a></li>
                    <li><a class="dropdown-item" href="#">Đồ Thể Thao</a></li>
                </ul>
            </li>

            <!-- Đồ Nữ Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownWomen" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Đồ Nữ
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownWomen">
                    <li><a class="dropdown-item" href="#">Áo Nữ</a></li>
                    <li><a class="dropdown-item" href="#">Quần Nữ</a></li>
                    <li><a class="dropdown-item" href="#">Đồ Bộ Nữ</a></li>
                    <li><a class="dropdown-item" href="#">Đồ Thể Thao Nữ</a></li>
                </ul>
            </li>

            <!-- Bộ Sưu Tập Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCollection" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bộ Sưu Tập
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownCollection">
                    <li><a class="dropdown-item" href="#">BST Thu Đông 2024</a></li>
                    <li><a class="dropdown-item" href="#">Áo Gió 3C</a></li>
                    <li><a class="dropdown-item" href="#">PoLo Chạm Mát</a></li>
                </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">Tin hot</a></li>
        </ul>
    </div>
 
    <form class="d-flex" method="get" >      
        <div id="clock" class="me-2">
            <p class="date">{{ date }}</p>
            <p class="time">{{ time }}</p>
        </div>
        
        <!-- Tìm kiếm -->
        <div class="overlay"></div>
        <div class="searchBox">
            <div class="search">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <div class="searchInput">
                <input name="keyword" type="text" placeholder="Hôm nay mua gì ?" />
            </div>
            <div class="close">
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
        
        <button class="btn btn-outline-secondary cart-shop"><i class="fa-solid fa-cart-shopping"></i></button>
    </form>
    
</nav>
<?php else: ?>
 <nav class="navbar navbar-expand-lg navbar-light fixed-top ">
    <a class="navbar-brand" href="#">
        <!-- <img src="./assets/image/logo2.png" alt="Logo" style="width: 90px;"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-5">
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL.'/logout' ?>">Đăng xuất</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= BASE_URL.'/admin-handle' ?>">Vào quản lý Website</a></li>
    
        </ul>
    </div>
    
    <form class="d-flex">
        <div id="clock" class="me-2">
            <p class="date">{{ date }}</p>
            <p class="time">{{ time }}</p>
        </div>
        
        <!-- Tìm kiếm -->
        <div class="overlay"></div>
        <div class="searchBox">
            <div class="search">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <div class="searchInput">
                <input type="text" placeholder="Hôm nay mua gì ?" />
            </div>
            <div class="close">
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
        
        <button class="btn btn-outline-secondary cart-shop"><i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</nav>
<?php endif; ?>
    <!-- menu navbar end -->