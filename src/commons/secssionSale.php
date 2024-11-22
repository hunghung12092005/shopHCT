
    <style>
        .carousel-item{
            padding: 2px 0px;
        }
        .carousel-item , .position-relative{
            padding-left: 0px;
            margin-left: 0px;

        }
        .carousel-item img {
            width: 100%;
            height: auto;
        }
        .sale-badge {
            position: absolute;
            top: 2%;
            right: 10%;
            background: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .price {
            color: red;
            font-weight: bold;
        }
        .old-price {
            text-decoration: line-through;
            color: gray;
        }
        .carousel-control {
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            font-size: 30px;
            color: #000;
            margin: 0 auto;
            text-decoration: none;
            padding: 10px;
        }
        .carousel-control.left {
    left: 0;
}

.carousel-control.right {
   right: 0;
}

    </style>
<body>
        <h1 class=" text-danger my-5">BLACK FRIDAY - SALE QUÊN LỐI VỀ</h1>
        <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 position-relative">  
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/chan-vay-nu-CVN7090-DEN%20(1).jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ Xòe Túi Sườn 7 Mảnh</p>
                            <p class="price">234.500 đ <span class="old-price">469.000 đ</span></p>
                        </div>
                        <div class="col-md-3 position-relative">
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/chan-vay-nu-3-tang-yody-cvn6070-dcb-scn6008-tra-5-1.jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ Xếp Ly Túi Sườn</p>
                            <p class="price">234.500 đ <span class="old-price">469.000 đ</span></p>
                        </div>
                        <div class="col-md-3 position-relative">
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/chan-vay-nu-CVN7090-DEN%20(1).jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ 3 Tầng Cạp Chun</p>
                            <p class="price">184.500 đ <span class="old-price">369.000 đ</span></p>
                        </div>
                        <div class="col-md-3 position-relative">                         
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/chan-vay-nu-3-tang-yody-cvn6070-dcb-scn6008-tra-5-1.jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ Dập Ly Xòe Cơ Bản</p>
                            <p class="price">224.500 đ <span class="old-price">449.000 đ</span></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3 position-relative">
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/chan-vay-nu-cvn6150-den-2.jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ Xòe Túi Sườn 7 Mảnh</p>
                            <p class="price">234.500 đ <span class="old-price">469.000 đ</span></p>
                        </div>
                        <div class="col-md-3 position-relative">
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-polo-nam-apm7213-nau-1.jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ Xếp Ly Túi Sườn</p>
                            <p class="price">234.500 đ <span class="old-price">469.000 đ</span></p>
                        </div>
                        <div class="col-md-3 position-relative">
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/chan-vay-nu-cvn6150-den-2.jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ 3 Tầng Cạp Chun</p>
                            <p class="price">184.500 đ <span class="old-price">369.000 đ</span></p>
                        </div>
                        <div class="col-md-3 position-relative">
                            <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/apn6430-xlo-4-of-9.jpg" class="d-block w-100" alt="...">
                            <div class="sale-badge">-50%</div>
                            <p class="mt-2">Chân Váy Nữ Dập Ly Xòe Cơ Bản</p>
                            <p class="price">224.500 đ <span class="old-price">449.000 đ</span></p>
                        </div>
                    </div>
                </div>
                <a href="#carouselExampleIndicators" class="carousel-control left" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a href="#carouselExampleIndicators" class="carousel-control right" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>        
    <script>
        document.querySelector('.carousel-control.left').addEventListener('click', function() {
            $('#carouselExampleIndicators').carousel('prev');
        });
        document.querySelector('.carousel-control.right').addEventListener('click', function() {
            $('#carouselExampleIndicators').carousel('next');
        });
    </script>
</body>

