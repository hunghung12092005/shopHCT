<?php 
    namespace controllers\admin;
    use modelsCustomer\Customer as Customer;
    class CustomerController {
        public $CustomerObject;
        public $tableName = "users";
        public $baseUrl = BASE_URL;

        function __construct()
           {
               $this->CustomerObject = new Customer();
           }

        public function Customer() {
            $dataCustomer = $this->CustomerObject->getAll($this->tableName);
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     $data = $this->CategoryObject->getAll($this->tableName, $_GET);
            // }
            //debug($data);
            //$_SESSION['admin'] = 1;

            require_once './src/views/admin/customer/customer.php';
        }
       
        public function CommentCustomer() {
            $id = $_GET['ID'] ?? "";
            $dataCustomerComment = $this->CustomerObject->commentKH($id);
            if (empty($dataCustomerComment)) {
                echo '<script>
                window.alert("Người dùng này không bình luận!");
                window.location.href = "' . $this->baseUrl . '/admin/customers";
                  </script>';
            }
            require_once './src/views/admin/customer/comment.php';
        }
        public function delCommentForUser(){
            $text = $_GET['ID'] ?? ""; // ID chỉ là tên đặt sau dấu ? bên file index cha
               $this->CustomerObject->deleteComment($text);   
               $referrer = $_SERVER['HTTP_REFERER'];
               header("Location: $referrer");                 
               //hoặc là đẩy lại dữ liệu về index  require_once './src/views/admin/category/Category.php'; như này
        }
        public function findCustomer(){
            $id = $_GET['ID'] ?? "";
        
            // Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Gọi hàm updateByIDAdminSinhVien của Model (Product) để cập nhật dữ liệu
                $this->CustomerObject->updateByIDCustomer($this->tableName, $id, $_POST);       
                // Chuyển hướng người dùng đến trang adminSinhVien
                echo '<script>
                      window.location.href = "' . $this->baseUrl . '/admin/customer";
                      </script>';
                return;
            }
        
            // Lấy dữ liệu từ Model (Product) và gán vào biến $data
            $findCustomer = $this->CustomerObject->findCustomer($this->tableName, $id);
        
            // Yêu cầu hiển thị view createAdminSinhVien.php
            require_once './src/views/admin/customer/edit.php';
        }
        
        
}
?>