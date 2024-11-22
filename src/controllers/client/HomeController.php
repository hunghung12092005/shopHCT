<?php 
namespace controllers\client;
use modelsHome\Home;

    class HomeController {
        public $modelObject;
        public $tableName1 = "loai";
        public $tableName2 = "san_pham";
        public $baseUrl = BASE_URL;
        public function __construct()
        {
            $this->modelObject = new Home();//tạo đối tượng bên model
        }
        // public function home() {
        //     unset($_SESSION['admin']);
        //     header("location: $this->baseUrl/");
        // }

        // public function homeLoad() {
        //     // $_SESSION['admin'] = 1;
        //     $products = $this->modelObject->index($this->tableName2);
            
        //     require_once './src/views/client/home/home.php';

        // }
        public function index() {
            unset($_SESSION['admin']);
            // unset($_SESSION['admin'])
            $ProductFavorive = $this->modelObject->getAllprodFavorive();//sản phẩm ưa chuộng
            //debug($ProductFavorive['id'] );
            //debug( $ProductFavorive);
            $ProductFavorive2 = $this->modelObject->getAllprodFavorive2();
            $ProductSale = $this->modelObject->getAllprodSale();// sản phẩm sale
            $ProductNam = $this->modelObject->getAllprodNam();// sản phẩm sale
            $ProductNu = $this->modelObject->getAllprodNu();// sản phẩm sale
            //$ProductSlide = $this->modelObject->getAllSlide();
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     // Prepare the query string
            //     $queryString = http_build_query($_GET); // Converts the array to a query string
            
            //     //chuyển hướng tới trang sản phẩm và tìm kiếm từ khóa để hiển thị luôn
            //     echo '<script>
            //         window.location.href = "' . $this->baseUrl . '/Product?' . $queryString . '";
            //     </script>';
            //     require_once './src/views/client/products/productCatogery.php';

            //     exit; // Make sure to exit after the redirection
            // }
            require_once './src/views/client/home/home.php';
        }
        public function contact (){
            require_once './src/views/client/home/contact.php';
        }
       
        
       
        
    
        
    }
?>
