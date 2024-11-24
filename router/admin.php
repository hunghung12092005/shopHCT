<?php 
    autoLoad('./src/controllers/admin/');
    autoLoad('./src/models/');






//điều hướng về admin
    $router->add("GET", "admin", "/admin", "AdminController@dashboard");
    $router->add("GET", "admin", "/admin-handle", "AdminController@handle");
    $router->add("GET", "admin", "/admin/logout", "LoginController@logout");
    $router->add("GET", "admin", "/admin/customers", "CustomerController@Customer");
    //xóa
    $router->add("GET", "admin", "/admin/DeleteLoai", "CategoryController@delAllCategory");
    //thêm
    $router->add("GET", "admin", "/admin/CreateLoai", "CategoryController@createCategory");
    $router->add("POST", "admin", "/admin/CreateLoai", "CategoryController@createCategory");
    //sửa
    $router->add("GET", "admin", "/admin/UpdateLoai", "CategoryController@findCategory");
    $router->add("POST", "admin", "/admin/UpdateLoai", "CategoryController@findCategory");
    /* // sản phẩm */
    $router->add("GET", "admin", "/admin/products", "ProductController@index");
     //xóa
     $router->add("GET", "admin", "/admin/DeleteSanPham", "ProductController@delAllSanPham");
     //thêm
     $router->add("GET", "admin", "/admin/CreateSanPham", "ProductController@createProduct");
     $router->add("POST", "admin", "/admin/CreateSanPham", "ProductController@createProduct");
     //sửa
     $router->add("GET", "admin", "/admin/UpdateSanPham", "ProductController@findProduct");
     $router->add("POST", "admin", "/admin/UpdateSanPham", "ProductController@findProduct");
    /* //khách hàng */
    $router->add("GET", "admin", "/admin/customer", "CustomerController@Customer");
    $router->add("GET", "admin", "/admin/CommentKH", "CustomerController@CommentCustomer");
    $router->add("GET", "admin", "/admin/DeleteKHBL", "CustomerController@delCommentForUser");
    //sửa
    $router->add("GET", "admin", "/admin/UpdateKH", "CustomerController@findCustomer");
    $router->add("POST", "admin", "/admin/UpdateKH", "CustomerController@findCustomer");
   /*  //bình luận */
    $router->add("GET", "admin", "/admin/comment", "CommentController@Comment");
    $router->add("GET", "admin", "/admin/comment/detail", "CommentController@Statistical");
    $router->add("GET", "admin", "/admin/Comment/detailBl", "CommentController@StatisticalDetailBl");
    $router->add("GET", "admin", "/admin/delete/detail", "CommentController@delStatisticalDetailBl");
   
    /* //thống kê */
    $router->add("GET", "admin", "/admin/statistical", "StatisticalController@Statistical");
    $router->add("GET", "admin", "/admin/Statistical/chart", "StatisticalController@Chart");


    $router->solve("admin");
?>