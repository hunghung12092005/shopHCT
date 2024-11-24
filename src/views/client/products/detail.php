<?php
//  if (!isset($_SESSION)) {
//   session_start();
// } 
if (isset($_SESSION['id'])) {
    $user = $_SESSION['id'];
    $name = $_SESSION['user_id'];
} else {
    $user = null;
    $name = 'Khách ';
}
$idsp = $_GET['ID'];
?>

<body>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>
    <div class="row ">
        <!-- Carousel for large screens -->
        
        
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-9">
                    <div id="productCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="item-to-move">
                                <div class="image-container">
                                    <img class="main-img" src="<?= $itemProductDetail['hinh_anh_prod']  ?>" alt="product-gender 1">
                                    <img class="overlay-img" src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/nguyengia_m2vmwldeeh929sdrxig.png" alt="Overlay">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-container">
                                    <img class="main-img" src="<?= $itemProductDetail['img_black']  ?>" alt="product-gender 2">
                                    <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-container">
                                    <img class="main-img" src="<?= $itemProductDetail['img_green']  ?>" alt="product-gender 3">
                                    <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-container">
                                    <img class="main-img" src="<?= $itemProductDetail['img_brown']  ?>" alt="product-gender 4">
                                    <img class="overlay-img" src="https://m.yodycdn.com/products/docquyenonline_m2vmv0bq4uahylhe5z.png" alt="Overlay">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <p class="mt-3">Chất liệu XTRA - HEAT™ có khả năng giữ ấm vượt trội, đặc biệt sợi acrylic với khả năng chịu nhiệt tốt, hạn chế tĩnh điện, độ bền cao, độ sáng bóng và màu sắc sắc nét.
                    </p>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="thumbnails d-none d-md-block">
                        <div class="mb-2">
                            <img src="<?= $itemProductDetail['hinh_anh_prod']  ?>" alt="Ảnh nhỏ 1" class="thumbnail" data-slide-to="0">
                        </div>
                        <div class="mb-2">
                            <img src="<?= $itemProductDetail['img_black']  ?>" alt="Ảnh nhỏ 2" class="thumbnail" data-slide-to="1">
                        </div>
                        <div class="mb-2">
                            <img src="<?= $itemProductDetail['img_green']  ?>" alt="Ảnh nhỏ 3" class="thumbnail" data-slide-to="2">
                        </div>
                        <div class="mb-2">
                            <img src="<?= $itemProductDetail['img_brown']  ?>" alt="Ảnh nhỏ 4" class="thumbnail" data-slide-to="3">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Product Description -->

        <div class="col-md-6 col-12 description">
            <span>
                <div class="discount-Detal">-<?= $itemProductDetail['khuyen_mai']  ?>
                    %</div>
            </span>
            <h2><?= $itemProductDetail['ten_san_pham']  ?></h2>
            <p class="star-p fw-bold">ID: <?= $itemProductDetail['id']  ?>
                <i class="fa-solid fa-copy" onclick="copyToClipboard('1371468-21861')"></i>
                <span class="fw-bold">
                    <span class="star">&#9733;</span> <!-- Ngôi sao đầy -->
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    4,8(120) Đã Bán:<?= $itemProductDetail['luot_xem']  ?>
                </span>
            </p>
            <p><i class="fa-regular fa-eye"></i> <?= $itemProductDetail['luot_xem']  ?> lượt xem sản phẩm</p>
            <!-- Modal nút xem kích cỡ-->
            <button class="btn btn-info" data-toggle="modal" data-target="#sizeGuideModal"><i class="fa-solid fa-ruler"></i> Xem Bảng Kích Cỡ</button>
            <div class="modal fade" id="sizeGuideModal" tabindex="-1" role="dialog" aria-labelledby="sizeGuideModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sizeGuideModalLabel">Bảng Kích Cỡ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa-solid fa-x"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs" id="sizeTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="male-tab" data-toggle="tab" href="#male" role="tab" aria-controls="male" aria-selected="true">Nam</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="female-tab" data-toggle="tab" href="#female" role="tab" aria-controls="female" aria-selected="false">Nữ</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="sizeTabContent">
                                <div class="tab-pane fade show active" id="male" role="tabpanel" aria-labelledby="male-tab">
                                    <img src="https://m.yodycdn.com/products/nam_m0g3c0nprobhtwlagl.png" alt="Bảng Kích Cỡ Nam" class="modal-img">
                                </div>
                                <div class="tab-pane fade" id="female" role="tabpanel" aria-labelledby="female-tab">
                                    <img src="https://m.yodycdn.com/products/nudesktop_m0g7qymbf85vldo7av9.png" alt="Bảng Kích Cỡ Nữ" class="modal-img">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form -->
            <form action="" method="post">
                <p class="price-Detail" data-price="<?= $itemProductDetail['gia_ban'] ?>">
                    <?= $itemProductDetail['gia_ban'] ?> đ
                    <span class="sale"><?= $itemProductDetail['gia_goc'] ?> đ</span>
                </p>
                <input type="hidden" name="price" id="hidden-price" value="<?= $itemProductDetail['gia_ban'] ?>"> <!-- Giá sản phẩm -->
                <p>Màu sắc:
                    <span class="color-display" data-color="Đen">Đen</span>
                    <input type="hidden" name="color" id="hidden-color" value="Đen"> <!-- Màu sắc -->
                <div class="color-options-Detail">
                    <div class="color-option-navy" data-color="Navy"></div>
                    <div class="color-option-white" data-color="Trắng"></div>
                    <div class="color-option-be" data-color="Be"></div>
                    <div class="color-option-nau" data-color="Nâu Nhạt"></div>
                </div>
                </p>
                <p>Kích cỡ:
                    <span class="size-display" data-size="M">size M</span>
                    <input type="hidden" name="size" id="hidden-size" value="M"> <!-- Kích cỡ -->
                    <span>
                        <div class="button-Detail">
                            <button type="button" class="btn-Detail" data-size="M">M</button>
                            <button type="button" class="btn-Detail" data-size="S">S</button>
                            <button type="button" class="btn-Detail" data-size="L">L</button>
                            <button type="button" class="btn-Detail" data-size="XL">XL</button>
                        </div>
                    </span>
                </p>
                <p>Số lượng: </p>
                <div class="cart-container">
                    <div class="quantity-control ms-3">
                        <button type="button" id="decreaseQty">−</button>
                        <input type="hidden" name="quantity" id="hidden-quantity" value="1"> <!-- Số lượng -->
                        <span class="quantity-display" id="quantity">1</span>
                        <button type="button" id="increaseQty">+</button>
                    </div>
                    <button class="btn btn-add-to-cart" id="add-to-cart">
                        🛒 Thêm Vào Giỏ Hàng
                    </button>
                    <img src="your-image-url.jpg" alt="Product Image" id="fly-image" style="display: none;" />
                </div>
                <button class="btn btn-shop mb-3" name="submit-prod">
                    Mua Ngay
                </button>
            </form>
            <div class="credit-card">
                <li><img src="https://yody.vn/icons/momo.png" alt=""></li>
                <li><img src="https://yody.vn/icons/master-card.png" alt=""></li>
                <li><img src="https://yody.vn/icons/vnpay-qr.png" alt=""></li>
                <li><img src="https://yody.vn/icons/visa-card.png" alt=""></li>
                <li><img src="https://yody.vn/icons/zalopay.png" alt=""></li>
            </div>
            <p class="text-center mt-2">Hình thức thanh toán tiện dụng và đa dạng</p>

        </div>
    </div>
    <!-- product liên quan -->
    <?php
    require_once './src/commons/secssionSale.php';
    ?>
    <!-- form bình luận -->
    <div class="row mt-4">
            
        <div class="col-md-8 col-12">
            <div class="header-cmt">
                <h1>Thời Trang HCT CLOTHER</h1>
                <p>Thương hiệu thời trang hàng ngày cho mọi người trên toàn cầu</p>
            </div>
            <div class="share">
                <p>Bạn thích bài viết này? Hãy chia sẻ bài viết này nhé</p>
                <div class="icon">
                    <a href="#" id="facebook-link"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" id="messenger-link"><i class="fa-brands fa-facebook-messenger"></i></a>
                    <a href="#" id="copy-link"><i class="fa-regular fa-copy"></i></a>
                </div>
            </div>
            <div class="comment-section">
                <?php
                //debug($user);
                echo "<h6>Xin chào: $name!</h6>";
                ?>
                <h2 class="fw-bold">Bình luận</h2>
                <form class="comment-form" method="post">  
                    <div class="form-group">
                        <label for=""></label>
                        <input class="form-control" type="hidden" name="id_user" value="<?= $user; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input class="form-control" type="hidden" name="id_san_pham" value="<?= $idsp; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input class="form-control" type="hidden" name="thoi_gian" value="<?= date('Y-m-d H:i:s'); ?>">
                    </div>
                    <div class="email-name">
                        <input name="name" class="name" type="text" placeholder="Nhập họ và tên" required>
                        <input name="email" class="email" type="email" placeholder="Email" required>
                    </div>
                    <textarea name="noi_dung" placeholder="Viết bình luận của bạn" rows="5" required></textarea>
                    <button name="submit-cmt" type="submit">Gửi bình luận</button>
                </form>
            </div>
        </div>
        <!--  -->
        <div class="col-md-4 mt-2 d-none d-md-block">
            <p class="text-center text-success fs-2">Bài viết liên quan</p>
            <a href="" class="banner-cmt"><img src="https://m.yodycdn.com/fit-in/filters:format(webp)//products/BANNER%20COLLECTION%201800X600px%20CTA.png" alt=""></a>
            <a href="" class="banner-cmt"><img src="https://m.yodycdn.com/fit-in/filters:format(webp)//products/Frame%2032%201.jpg" alt=""></a>
            <a href="" class="banner-cmt"><img src="https://m.yodycdn.com/fit-in/filters:format(webp)//products/Frame%2031%201.jpg" alt=""></a>
        </div>
    </div>
    <!-- copy -->




</body>