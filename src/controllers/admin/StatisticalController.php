<?php 
    namespace controllers\admin;
    use modelsStatistical\Statistical as Statistical;
    class StatisticalController {
        public $StatisticalObject;
        public $tableName = "";
        public $baseUrl = BASE_URL;

        function __construct()
           {
               $this->StatisticalObject = new Statistical();
           }

        public function Statistical() {
            $Statistical = $this->StatisticalObject->Statistical();
            $Statisticalcomment = $this->StatisticalObject->Statisticalcomment();
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     $data = $this->CategoryObject->getAll($this->tableName, $_GET);
            // }
            //debug($data);
            //$_SESSION['admin'] = 1;

            require_once './src/views/admin/Statistilcal/Statistical.php';
        }
        // public function delAllCategory(){
        //     $id = $_GET['ID'] ?? ""; // ID chỉ là tên đặt sau dấu ? bên file index cha
        //        $this->CategoryObject->delAllCategory($this->tableName, $id);             
        //        echo "<script>window.location.href = '$this->baseUrl/admin/category';</script>";
        //        //hoặc là đẩy lại dữ liệu về index  require_once './src/views/admin/category/Category.php'; như này
        // }
        public function chart(){
            $StatisticalChart = $this->StatisticalObject->Statistical();
            require_once './src/views/admin/Statistilcal/chart.php';
        }
        
        
        
}
?>