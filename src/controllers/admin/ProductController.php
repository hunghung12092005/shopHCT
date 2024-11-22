<?php 
    namespace controllers\admin;
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
             //$_SESSION['admin'] = 1;      
            $dataProduct = $this->ProductObject->getAllAdminSp($this->tableName);           
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
                //debug($_GET);
                $dataProduct = $this->ProductObject->selectByParamProduct($this->tableName, $_GET);
            }
            //debug($data);
            //$_SESSION['admin'] = 1;

            require_once './src/views/admin/product/product.php';
        }
        public function delAllSanPham(){
            $id = $_GET['ID'] ?? ""; // ID chỉ là tên đặt sau dấu ? bên file index cha
               $this->ProductObject->delAllProduct($id);             
               echo "<script>window.location.href = '$this->baseUrl/admin/product';</script>";
               //hoặc là đẩy lại dữ liệu về index  require_once './src/views/admin/category/Category.php'; như này
        }
        public function createProduct() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $allowedExtensions = ['jpg', 'png', 'jpeg'];
                $fileExtension = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
                
                if (in_array($fileExtension, $allowedExtensions)) {
                    if (isset($_FILES) && $_FILES['img']['size'] > 0) {
                        $dir = "./assets/image/client";
                        $tmpName = $_FILES['img']['tmp_name'];
                        $fileName = uniqid() . "_" . $_FILES['img']['name'];//lưu vào tránh nó bị trùng
                        //debug($tmpName);
                        $_POST['img'] = "$dir/$fileName";
                
                        if (move_uploaded_file($tmpName, "$dir/$fileName")) {
                            $this->ProductObject->createProduct($this->tableName, $_POST);
                            echo '<script>
                                window.location.href = "' . $this->baseUrl . '/admin/product";
                            </script>';
                            return;
                        } else {
                            echo 'Error uploading file.';
                            return;
                        }
                    }
                } else {
                    $this->ProductObject->createProduct($this->tableName, $_POST);
                            echo '<script>
                                window.location.href = "' . $this->baseUrl . '/admin/product";
                            </script>';
                            return;
                }
            }
        
            require_once './src/views/admin/product/create.php';
        }
        public function findProduct() {
            $id = $_GET['ID'] ?? "";
        
            // Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Gọi hàm updateByIDAdminSinhVien của Model (Product) để cập nhật dữ liệu
                $this->ProductObject->updateByIDProduct($this->tableName, $id, $_POST);       
                // Chuyển hướng người dùng đến trang adminSinhVien
                echo '<script>
                      window.location.href = "' . $this->baseUrl . '/admin/product";
                      </script>';
                return;
            }
        
            // Lấy dữ liệu từ Model (Product) và gán vào biến $data
            $findProduct = $this->ProductObject->findProduct($this->tableName, $id);
        
            // Yêu cầu hiển thị view createAdminSinhVien.php
            require_once './src/views/admin/product/edit.php';
        }
        
}
?>