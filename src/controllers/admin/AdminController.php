<?php 
    namespace controllers\admin;
    use modelsAdmin\Admin as Admin;
    class AdminController {
        public $baseUrl = BASE_URL;
        public $AdminObject;
        public $tableName = 'san_pham';

        function __construct()
        {
            $this->AdminObject = new Admin();
        }
        public function dashboard() {
            // unset($_SESSION['admin']);
            // header("location: $this->baseUrl/admin/product");
            $dailyView = $this->AdminObject->getDailyIncrease();
            $dailyComment = $this->AdminObject->getDailyComment();
            require_once './src/views/admin/dashboard.php';
        }
        public function handle(){
            $_SESSION['admin'] = 1;
            echo '<script>
            alert("Vào admin thành công!"); 
            window.location.href = "' . $this->baseUrl . '/admin";
          </script>';
            exit();
            // header("location: $this->baseUrl/admin");
        }
    }
?>