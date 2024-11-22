<?php 
    namespace controllers\client;
    use modelsProductDetail\ProductDetail as ProductDetail;
    
    class detailController {
        public $modelObject;
         public $tableName = "don_hang";
        public $baseUrl = BASE_URL;
        public function __construct()
        {
            $this->modelObject = new ProductDetail();
        }

        public function productDetail()
            {
                $id = $_GET['ID'] ?? "";
                $userId = $_SESSION['user_id'] ?? null; // Lấy ID của người dùng đang đăng nhập

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['submit-cmt'])) {
                        unset($_POST['submit-cmt']);// xóa cái phần tử k cần trước khi ném vào database
                        //debug($_POST);
                        $result = $this->modelObject->createBinhluan($_POST);
                        if ($result) {
                            header("Location: " . $_SERVER['HTTP_REFERER']);
                            return;
                        }
                    } 
                     //THỰC HIỆN PHẦN ĐẨY BÌNH LUẬN LÊN DB
                     
                }
                //PHẦN SẢN PHẨM
                $ProductBinhluan = $this->modelObject->getAllProductBinhLuan($id);
                $ProductDetail = $this->modelObject->getAllProducDetal($id);
                //$ProductUser = $this->modelObject->getAllUser($userId);

                // Tăng view
                $this->modelObject->incrementViews($id);
                //
                
                require_once './src/views/client/products/detail.php';
                // return [
                //     'ProductBinhluan' => $ProductBinhluan,
                //     'ProductDetail' => $ProductDetail
                // ];
            }
            public function createOrder() {
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['submit-prod'])) { // Kiểm tra nếu nút submit đã được nhấn
                        // Lấy dữ liệu mà bạn cần
                        unset($_POST['submit-prod']);
                        //debug($_POST);
                        // Gọi phương thức tạo đơn hàng
                        $createOrder = $this->modelObject->createOrder($this->tableName, $_POST);
                    }
                }
                require_once './src/views/client/products/detail.php';
            }
        // public function productDetail() {
        //     $id = $_GET['ID'] ?? "";
        //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $this->modelObject->createBinhluan($_POST);
        //     // echo '<script>
        //     // window.history.back();
        //     // window.location.reload();
        //     // document.getElementById("myForm").reset();
        //     // </script>';
        //     header("Location: ".$_SERVER['HTTP_REFERER']);
        //     //header("Location: ".$_SERVER['REQUEST_URI']); roload
        //     return;
        //      }                  
        //             //$user = $_SESSION['user'] ?? null;
        //             $ProductBinhluan = $this->modelObject->getAllProductBinhLuan($id);
        //             $ProductDetail = $this->modelObject->getAllProducDetal($id);
        //             //tăng view
        //             $this->modelObject->incrementViews($id);
        //             require_once './src/views/client/products/detail.php';
        //         }
        // public function productCategory() {
        //     $idLoai = $_GET['IDDM'] ?? ""; 
        //     $ProductCatogery = $this->modelObject->getAllProducCatogery($idLoai);
           
        //     require_once './src/views/client/products/productCatogery.php';
        // }
        //  public function productBinhLuan (){
        //      // Kiểm tra xem có POST request không
        //         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //             // Xử lý lưu bình luận
        //             // $this->saveBinhLuan();
        //         } else {
        //             // Lấy danh sách bình luận
        //             $id = $_GET['ID'] ?? ""; 
        //             $user = $_SESSION['user'] ?? null;
        //             $ProductBinhluan = $this->modelObject->getAllProductBinhLuan($user,$id);
                
        //             // Lấy thông tin user từ session
                    
                
        //             // Require file detail.php và truyền các biến cần thiết
        //             require_once './src/views/client/products/detail.php';
        //         }
        //  }
        //  public function viewProduct($id)
        //     {
        //         // Lấy thông tin sản phẩm từ Model
        //         $product = $this->modelObject->getProductById($id);

        //         // Cập nhật số lượt xem
        //         $this->modelObject->incrementViews($id);

        //         // Trả về View với dữ liệu sản phẩm
        //         return view('product.detail', ['product' => $product]);
        //     }
       
        
    }
?>