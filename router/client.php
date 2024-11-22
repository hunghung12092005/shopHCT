<?php 
    autoLoad('./src/controllers/client/');
    autoLoad('./src/models/');

    // Đăng ký các route với router
    $router->add("GET", "client", "/", "HomeController@index"); // Trang chính
    $router->add("GET", "client", "/detailProduct", "detailController@index");
    //form login create
    $router->add("GET", "client", "/login", "LoginController@login");
    $router->add("GET", "client", "/shopDuAn1/dangnhap.php", "LoginController@loginGG");
    $router->add("POST", "client", "/login", "LoginController@login");

    // $router->add("GET", "client", "/creteAccount", "LoginController@createAccount");
    // $router->add("POST", "client", "/creteAccount", "LoginController@createAccount");
    // $router->add("POST", "client", "/login", "LoginController@login");
     $router->add("GET", "client", "/logout", "LoginController@logout");
    // $router->add("GET", "client", "/changeLogin", "LoginController@changeLogin");   
    // $router->add("GET", "client", "/updateAccount", "LoginController@updateAccount");
    // $router->add("POST", "client", "/updateAccount", "LoginController@updateAccount");
    // $router->add("GET", "client", "/changeLogin", "LoginController@changeLogin");
    // $router->add("POST", "client", "/changeLogin", "LoginController@changeLogin");
    //product
    $router->add("GET", "client", "/keyword", "ProductController@index"); // Trang sản phẩm
    $router->add("GET", "client", "/Product", "ProductController@index"); // Trang sản phẩm
    //product detail
     $router->add("GET", "client", "/productDetail", "detailController@productDetail");
     $router->add("POST", "client", "/productDetail", "detailController@productDetail");
     $router->add("POST", "client", "/productDetail", "detailController@createOrder");
    // $router->add("POST", "client", "/productDetail/delete", "ProductController@productDetail");
    // $router->add("GET", "client", "/productDetail/delete", "ProductController@productDetail");
   
    //bình luận

    //lỗi load header
    // $router->add("GET", "client", "/", "HomeController@home");
    // $router->add("GET", "client", "/load", "HomeController@homeLoad");
    //điều hướng
    $router->add("GET", "client", "/contact", "HomeController@contact");

    $router->solve("client");
?>