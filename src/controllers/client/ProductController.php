<?php 
    namespace controllers\client;
    use modelsProduct\Product as Product;
    class ProductController {
        public $ProductObject;
        public $tableName = "san_pham";
        public $baseUrl = BASE_URL;

        function __construct()
           {
               $this->ProductObject = new Product();
           }
        
        public function index() {
            $dataProduct = $this->ProductObject->getAll($this->tableName);
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
                $dataProduct = $this->ProductObject->selectByParamProduct($this->tableName, $_GET);
                if (empty($dataProduct)) {
                    echo '<script>
                    window.alert("Không còn sản phẩm!");
                    window.location.href = "' . $this->baseUrl . '/Product";
                      </script>';
                } 
                } 
            if (isset($_GET['submit_search'])) {
                    unset($_GET['submit_search']);
                    // Kiểm tra và lấy dữ liệu từ $_GET
                    $dataProduct = $this->ProductObject->selectByParamProduct2($this->tableName, $_GET);//hàm điều kiện set cho việc tìm kiếm
                    if (empty($dataProduct)) {
                        echo '<script>
                        window.alert("Không còn sản phẩm!");
                        window.location.href = "' . $this->baseUrl . '/Product";
                          </script>';
                    }
                }
             
            // //debug($data);
            // //$_SESSION['admin'] = 1;
            require_once './src/views/client/products/productCatogery.php';
        }
        public function delAllProduct(){
            $id = $_GET['ID'] ?? ""; // ID chỉ là tên đặt sau dấu ? bên file index cha
               $this->ProductObject->delAllProduct($this->tableName, $id);             
               echo "<script>window.location.href = '$this->baseUrl/admin/Product';</script>";
               //hoặc là đẩy lại dữ liệu về index  require_once './src/views/admin/Product/Product.php'; như này
        }
        public function createProduct() {
            // Lấy dữ liệu từ form
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['ma_loai'];
                $description = $_POST['ten_loai'];
        
                // Kiểm tra dữ liệu
                if(empty($name)) {
                    $error = "Vui lòng nhập tên danh mục.";
                } elseif(strlen($name) > 20) {
                    $error = "Tên danh mục không được vượt quá 20 ký tự.";
                }elseif(empty($description)) {
                    $error = "Vui lòng nhập mô tả danh mục.";
                } elseif(strlen($description) > 200) {
                    $error = "Mô tả danh mục không được vượt quá 20 ký tự.";
                } else {
                    // Dữ liệu hợp lệ, lưu vào cơ sở dữ liệu
                    $this->ProductObject->create($this->tableName, $_POST);
                    echo '<script>
                          window.alert("Tạo danh mục thành công!");
                          window.location.href = "' . $this->baseUrl . '/admin/Product";
                    </script>';
                    return;
                }
                /* ảnh */
                // $fileExtension = strtolower(pathinfo($_FILES['hinh_anh']['name'],PATHINFO_EXTENSION));//chuyển tất cả sang chữ hoa
                // if(in_array($fileExtension,['jpg','png','jpng'])){
                //     if(isset($_FILES) && $_FILES['hinh_anh']['size'] > 0){
                //         //debug($_FILES['hinh_anh']['name']);//lấy ra đường dẫn chính của hình ảnh
                //     $dir = "./assets/img";//đường dẫn bạn muốn lưu file về đâu
                //     $tmp_name = $_FILES['hinh_anh']['tmp_name'];//lấy ra cái name của mảng mặc định theo tên của sever(mảng 2 chiều)
                //     $file_name = $_FILES['hinh_anh']['name'];//lưu vào thì nó tên là gì
                //     $_POST['hinh_anh'] = "$dir/$file_name";//thêm  hinh_anh vào mảng $post để người dùng mới có thể up được file lên
                //     move_uploaded_file($tmp_name, "$dir/$file_name");//lấy biến lưu vào folder với tên
                //     }
                // }
                // else{
                //     echo'phải là file png,jpg....';
                //     return;
                // }
        
                /*  */
        
                // Nếu có lỗi, hiển thị popup và load lại trang create
                echo '<script>
                      window.alert("' . $error . '");
                      window.location.href = "' . $this->baseUrl . '/admin/CreateLoai";
                </script>';
            } else {
                // Hiển thị view create
                require_once './src/views/admin/Product/create.php';
            }
        }
        public function findProduct() {
            $id = $_GET['ID'] ?? "";
        
            // Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Gọi hàm updateByIDAdminSinhVien của Model (Product) để cập nhật dữ liệu
                $this->ProductObject->updateByIDCatogery($this->tableName, $id, $_POST);       
                // Chuyển hướng người dùng đến trang adminSinhVien
                echo '<script>
                      window.location.href = "' . $this->baseUrl . '/admin/Product";
                      </script>';
                return;
            }
        
            // Lấy dữ liệu từ Model (Product) và gán vào biến $data
            $findProduct = $this->ProductObject->findCatogery($this->tableName, $id);
        
            // Yêu cầu hiển thị view createAdminSinhVien.php
            require_once './src/views/admin/Product/edit.php';
        }
}
?>