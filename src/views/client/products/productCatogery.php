<style>
    .text {
        font-size: 1rem;
        /* Tăng kích thước chữ */
    }

    .text span {
        margin-right: 10px;
        /* Khoảng cách giữa các phần tử */
    }

    .text span:last-child {
        margin-right: 0;
        /* Không có khoảng cách cho phần tử cuối cùng */
    }
</style>

<body>
    <!-- banner product -->
    <div class="banner-Product">
        <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/media/collections/0.png" alt="">
    </div>
    <!-- banner product end-->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb m-3 fs-7">
            <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>
    <h2 class="mt-3 mb-3">SALE CUỐI MÙA UP TO 50%</h2>
    <!-- bộ lọc mobile -->
    <div class="col-12 d-block d-md-none">
        <div class="d-flex align-items-center justify-content-between p-2">
            <div class="text d-flex flex-nowrap">
                <span class="text-success">Tất cả</span>
                <span>Đồ Nam</span>
                <span>Đồ của Bé</span>
                <span>Unisex</span>
            </div>
            <button id="filterToggle" class="btn border-success l-2" data-toggle="collapse" data-target="#mobileFilter" aria-expanded="false" aria-controls="mobileFilter">
                <i class="fas fa-filter"></i> Bộ lọc
            </button>
        </div>
    </div>
    <!-- mobile end -->
    <div class="row">
        <div class="col-md-2 d-none d-md-block">
            <p class="fs-5">133 sản phẩm</p>
            <p class="fs-3 fw-bold">Bộ lọc</p>
            <form action="" method="get" id="filterForm">
                <!-- gender -->
                <div class="filter-item">
                    <div class="filter-title" id="toggle-gender">
                        <span>Giới tính</span>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <select name="gender" id="gender-select">
                        <option value="">Chọn giới tính</option>
                        <option value="Nam">Nam</option>
                        <option value="Nu">Nữ</option>
                        <option value="Child">Đồ của bé</option>
                        <option value="Unisex">Unisex</option>
                    </select>
                </div>
                <!-- price -->
                <div class="filter-item">
                    <div class="filter-title" id="toggle-colors">
                        <span>Chọn giá</span>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="checkbox-group m-2" id="color-options">
                        <label><input type="radio" name="price" value="1"> Từ 750.000đ</label>
                        <label><input type="radio" name="price" value="2"> Dưới 350.000đ</label>
                        <label><input type="radio" name="price" value="3"> Dưới 150.000đ</label>
                        <div class="mb-3">
                            <label for="customRange3" class="form-label">Khoảng giá:</label>
                            <input type="range" class="form-range" min="0" max="10" step="1" id="customRange3" value="5">
                            <div id="rangeValue" class="mt-2">Giá trị từ: <span id="currentValue">250.000đ</span></div>
                        </div>
                    </div>
                </div>
                <!-- size -->
                <div class="filter-item">
                    <div class="filter-title" id="toggle-sizes">
                        <span>Kích thước</span>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <select name="size" id="size-select">
                        <option value="">Chọn kích thước</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" class="apply-filters" name="submit_search">Áp dụng bộ lọc</button>
            </form>
        </div>
        <div class="col-md-10 col-12 product">
            <div class="row">
                <?php foreach ($dataProduct as $itemdataProduct): ?>
                    <div class="col-md-3 col-6 product-gender">
                        <a href="<?= BASE_URL ?>/productDetail?ID=<?= $itemdataProduct['id'] ?>">
                            <div class="discount-badge-Home">-<?= $itemdataProduct['khuyen_mai'] ?>
                                %</div>
                            <div class="image-container-Home"><!-- main-img-2 khác chiều cao với main-img -->
                                <img class="main-img-2" src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/PHM7009-REU,%20ATM7004-DEN%20(3).jpg" alt="product-gender 1">
                                <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                            </div>
                            <p class="title-product-gender"><?= $itemdataProduct['ten_san_pham'] ?></p>
                            <p class="product-gender-price"><?= $itemdataProduct['gia_ban'] ?> ₫ <span class="old-price"><?= $itemdataProduct['gia_goc'] ?> ₫</span></p>
                            <div class="color-options">
                                <div class="color-option-black"></div>
                                <div class="color-option-green"></div>
                                <div class="color-option-brown"></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</body>
<script>
    document.querySelector('.apply-filters').addEventListener('click', function() {
        // Gửi form khi nút được nhấn
        document.getElementById('filterForm').submit();
    });
</script>