<!-- slide start -->
<div class="row">
    <div class="col-md-12 col-12 container-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/fit-in/filters:format(webp)/products/m2icqji8qcsbiegy6ildp-hlw-1800x833.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/fit-in/filters:format(webp)/products/m2u76sn3m4wiuzyd2scHero%20Banner%20Website_1800x833%20(1).jpg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/fit-in/filters:format(webp)/products/m2u45llhkw1mqttm6wHero%20Banner%20Website_1800x833.jpg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- slide end -->
<!-- product list -->
<h2 class="text-center m-4 font-weight-bold text-capitalize">Sản phẩm ưa chuộng</h2>
<!-- tab -->
<ul class="nav d-flex justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="winter-tab" data-bs-toggle="tab" href="#winter" role="tab" aria-controls="winter" aria-selected="true">Quần Áo Thu Đông</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="summer-tab" data-bs-toggle="tab" href="#summer" role="tab" aria-controls="summer" aria-selected="false">Quần Áo Hè</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active " id="winter" role="tabpanel" aria-labelledby="winter-tab">
        <div class="row">
            <?php foreach ($ProductFavorive as $itemProductFavorive): ?>
                <div class="col-md-3 col-6 product-gender">
                    <a href="<?= BASE_URL ?>/productDetail?ID=<?= $itemProductFavorive['id'] ?>">
                        <div class="discount-badge-Home">-<?= $itemProductFavorive['khuyen_mai'] ?>%</div>
                        <div class="image-container-Home"><!-- main-img-2 khác chiều cao với main-img -->
                            <img class="main-img-2" src="<?= $itemProductFavorive['hinh_anh_prod'] ?>" alt="product-gender 1">
                            <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                        </div>
                        <p class="title-product-gender"><?= $itemProductFavorive['ten_san_pham'] ?></p>
                        <p class="product-gender-price"><?= $itemProductFavorive['gia_ban'] ?> <span class="old-price"><?= $itemProductFavorive['gia_goc'] ?></span></p>
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
    <div class="tab-pane fade" id="summer" role="tabpanel" aria-labelledby="summer-tab">
        <div class="row">
            <?php foreach ($ProductFavorive2 as $itemProductFavorive2): ?>
                <div class="col-md-3 col-6 product-gender">
                    <a href="<?= BASE_URL ?>/productDetail?ID=<?= $itemProductFavorive2['id'] ?>">
                        <div class="discount-badge-Home">-<?= $itemProductFavorive2['khuyen_mai'] ?>%</div>
                        <div class="image-container-Home"><!-- main-img-2 khác chiều cao với main-img -->
                            <img class="main-img-2" src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/PHM7009-REU,%20ATM7004-DEN%20(3).jpg" alt="product-gender 1">
                            <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                        </div>
                        <p class="title-product-gender"><?= $itemProductFavorive2['ten_san_pham'] ?></p>
                        <p class="product-gender-price"><?= $itemProductFavorive2['gia_ban'] ?> <span class="old-price"><?= $itemProductFavorive2['gia_goc'] ?></span></p>
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
<button class="animated-button">
    <span class="text">Xem thêm </span>
    <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
    </svg>
</button>
<!-- product list end-->
<!-- sale start -->
<div class="row">
    <div class="col-md-12">
        <div class="container-sale">
            <div class="img-sale">
                <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/Flash%20Sale%20Banner%205-20.jpg" alt="">
            </div>
            <div class="text-sale">Đặc quyền website <span>Kết thúc sau </span></div>
            <div id="countdown">
                <div id='tiles'></div>
                <div class="labels">
                    <li>Days</li>
                    <li>Hours</li>
                    <li>Mins</li>
                    <li>Secs</li>
                </div>
            </div>
            <!-- product sale -->
            <section class="flash-sale">
                <button class="to-left" style="display: none;">
                    <i class="fas fa-chevron-circle-left"></i>
                </button>
                <button class="to-right">
                    <i class="fas fa-chevron-circle-right"></i>
                </button>
                <div class="prod-bar">
                    <?php foreach ($ProductSale as $itemSale): ?>
                        <a href="#">
                            <div class="contain-prod">
                                <div class="contain-img">
                                    <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/apm3299-vag-7.jpg" alt="">
                                    <div class="sale-percent">-30%</div>
                                </div>
                                <div class="prod-name"><?= $itemSale['ten_san_pham'] ?>
                                </div>
                                <div class="price">
                                    <div class="sale-price"><?= $itemSale['gia_ban'] ?></div>
                                    <div class="real-price">268.000đ</div>
                                </div>
                                <div class="sold">
                                    <div class="sold-progress" style="width: 34%;"></div>
                                    <span>Đã Bán 42</span>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- product sale end -->
        </div>
    </div>
</div>
<!-- sale end -->
<!-- bộ sưu tập outstand -->
<h2 style="text-align: center; margin:10px auto;">Bộ sưu tập nổi bật</h2>
<div class="row container-outstand">
    <div class="col-md-3 col-12 prod-outstand">
        <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/Group%204.png" alt="..." class="img-outstand">
        <div class="card-body">
            <h5 class="card-title-outstand">Áo giữ nhiệt XTRA-HEAT™</h5>
            <p class="card-text-outstand">Công nghệ khóa ấm, hạn chế thoát nhiệt tự động, hạn chế tĩnh điện mùa đông..</p>
            <a href="#" class="btn bg-info fw-bold mb-4">Tìm hiểu thêm</a>
        </div>
    </div>
    <div class="col-md-3 col-12 prod-outstand">
        <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ATN7026,%20QJN7014,%20ATM7011,%20QJM70450055.jpg" class="img-outstand" alt="...">
        <div class="card-body">
            <h5 class="card-title-outstand">Áo giữ nhiệt XTRA-HEAT™</h5>
            <p class="card-text-outstand">Công nghệ khóa ấm, hạn chế thoát nhiệt tự động, hạn chế tĩnh điện mùa đông..</p>
            <a href="#" class="btn bg-info fw-bold mb-4">Tìm hiểu thêm</a>
        </div>
    </div>
    <div class="col-md-3 col-12 prod-outstand">
        <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/AKM6017-NAU%20SKM7003-NAV%20QKM7007-NAU%20(5).jpg" class="img-outstand" alt="...">
        <div class="card-body">
            <h5 class="card-title-outstand">Áo giữ nhiệt XTRA-HEAT™</h5>
            <p class="card-text-outstand">Công nghệ khóa ấm, hạn chế thoát nhiệt tự động, hạn chế tĩnh điện mùa đông..</p>
            <a href="#" class="btn bg-info fw-bold mb-4">Tìm hiểu thêm</a>
        </div>
    </div>
    <div class="col-md-3 col-12 prod-outstand">
        <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/SMM7007-TRA%20QAM7027-TIT%20(1).jpg" class="img-outstand" alt="...">
        <div class="card-body">
            <h5 class="card-title-outstand">Áo giữ nhiệt XTRA-HEAT™</h5>
            <p class="card-text-outstand">Công nghệ khóa ấm, hạn chế thoát nhiệt tự động, hạn chế tĩnh điện mùa đông..</p>
            <a href="#" class="btn bg-info fw-bold button-outstand ">Tìm hiểu thêm</a>
        </div>
    </div>
</div>
<!-- bộ sưu tập outstand end-->
<div class="bannerHome">
    <a href="">
        <img loading="lazy" class="responsive-img-Home" src="https://m.yodycdn.com/fit-in/filters:format(webp)//products/BANNER%20COLLECTION%201800X600px%20CTA.png" alt="">
    </a>
</div>
<!-- banner end -->
<!-- sản phẩm theo nam và nữ -->
<ul class="nav d-flex justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="male-tab" data-bs-toggle="tab" href="#male" role="tab" aria-controls="male" aria-selected="true">Đồ Nam</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="female-tab" data-bs-toggle="tab" href="#female" role="tab" aria-controls="female" aria-selected="false">Đồ Nữ</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="male" role="tabpanel" aria-labelledby="male-tab">
        <p class="font-monospace fw-bold fs-2 m-4 text-center">HCT Clothes Xin Giới Thiệu SET Đồ <span class="text-danger">Nam</span> được ưa chuộng nhất</p>
        <div class="row">
            <!-- Sản phẩm 1 -->
            <?php foreach ($ProductNam as $itemNam): ?>
                <div class="col-md-2 col-6 product-gender">
                    <a href="<?= BASE_URL ?>/productDetail?ID=<?= $itemNam['id'] ?>">
                        <div class="discount-badge-Home">-<?= $itemNam['khuyen_mai'] ?>%</div>
                        <div class="image-container-Home">
                            <img class="main-img" src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-nam-SKM7003-GHI%20(1).jpg" alt="product-gender 1">
                            <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                        </div>
                        <p class="title-product-gender"><?= $itemNam['ten_san_pham'] ?></p>
                        <p class="product-gender-price"><?= $itemNam['gia_ban'] ?> ₫ <span class="old-price"><?= $itemNam['gia_goc'] ?>₫</span></p>
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
    <div class="tab-pane fade" id="female" role="tabpanel" aria-labelledby="female-tab">
        <p class="font-monospace fw-bold fs-2 m-4 text-center">HCT Clothes Xin Giới Thiệu SET Đồ <span class="text-danger">NỮ</span> được ưa chuộng nhất</p>
        <div class="row">
            <!-- Sản phẩm 1 -->
            <?php foreach ($ProductNu as $itemNu): ?>
                <div class="col-md-2 col-6 product-gender">
                    <a href="<?= BASE_URL ?>/productDetail?ID=<?= $itemNu['id'] ?>">
                        <div class="discount-badge-Home">-<?= $itemNu['khuyen_mai'] ?>%</div>
                        <div class="image-container-Home">
                            <img class="main-img" src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-nam-SKM7003-GHI%20(1).jpg" alt="product-gender 1">
                            <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                        </div>
                        <p class="title-product-gender"><?= $itemNu['ten_san_pham'] ?></p>
                        <p class="product-gender-price"><?= $itemNu['gia_ban'] ?> ₫ <span class="old-price"><?= $itemNu['gia_goc'] ?>₫</span></p>
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
<button class="animated-button">
    <span class="text">Xem thêm </span>
    <span class="circle-Home"></span>
    <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
    </svg>
</button>
<!-- sản phẩm theo nam và nữ end -->
<!-- banner 2 -->
<div class="row banner3">
    <div class="col-md-6 col-12">
        <img class="main-img-banner" src="https://m.yodycdn.com/fit-in/filters:format(webp)//products/Frame%2032%201.jpg" alt="">
    </div>
    <div class="col-md-6 col-12">
        <img class="main-img-banner" src="https://m.yodycdn.com/fit-in/filters:format(webp)//products/Frame%2031%201.jpg" alt="">
    </div>
</div>