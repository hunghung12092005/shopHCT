<?php 
    namespace controllers\admin;
    use modelsCategory\Category as Category;
    class CategoryController {
        public $CategoryObject;
        public $tableName = "loai";
        public $baseUrl = BASE_URL;

        function __construct()
           {
               $this->CategoryObject = new Category();
           }

        public function index() {
            $dataCategory = $this->CategoryObject->getAll($this->tableName);
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     $data = $this->CategoryObject->getAll($this->tableName, $_GET);
            // }
            //debug($data);
            //$_SESSION['admin'] = 1;

            require_once './src/views/admin/category/Category.php';
        }
        public function delAllCategory(){
            $id = $_GET['ID'] ?? ""; // ID chỉ là tên đặt sau dấu ? bên file index cha
               $this->CategoryObject->delAllCategory($this->tableName, $id);             
               echo "<script>window.location.href = '$this->baseUrl/admin/category';</script>";
               //hoặc là đẩy lại dữ liệu về index  require_once './src/views/admin/category/Category.php'; như này
        }
        public function createCategory() {
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
                    $this->CategoryObject->create($this->tableName, $_POST);
                    echo '<script>
                          window.alert("Tạo danh mục thành công!");
                          window.location.href = "' . $this->baseUrl . '/admin/category";
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
                require_once './src/views/admin/category/create.php';
            }
        }
        public function findCategory() {
            $id = $_GET['ID'] ?? "";
        
            // Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Gọi hàm updateByIDAdminSinhVien của Model (Product) để cập nhật dữ liệu
                $this->CategoryObject->updateByIDCatogery($this->tableName, $id, $_POST);       
                // Chuyển hướng người dùng đến trang adminSinhVien
                echo '<script>
                      window.location.href = "' . $this->baseUrl . '/admin/category";
                      </script>';
                return;
            }
        
            // Lấy dữ liệu từ Model (Product) và gán vào biến $data
            $findCategory = $this->CategoryObject->findCatogery($this->tableName, $id);
        
            // Yêu cầu hiển thị view createAdminSinhVien.php
            require_once './src/views/admin/category/edit.php';
        }
}
?>