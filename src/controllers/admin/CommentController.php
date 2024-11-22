<?php 
    namespace controllers\admin;
    use modelsComment\Comment as Comment;
    class CommentController {
        public $CommentObject;
        public $tableName = "san_pham";
        public $baseUrl = BASE_URL;

        function __construct()
           {
               $this->CommentObject = new Comment();
           }
          
        public function Comment() {
            $dataComment = $this->CommentObject->getAll($this->tableName);
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     $data = $this->CategoryObject->getAll($this->tableName, $_GET);
            // }
            //debug($data);
            //$_SESSION['admin'] = 1;
                
            require_once './src/views/admin/comment/comment.php';
        }
        public function Statistical() {
            $id = $_GET['ID'];
            $StatisticalComment = $this->CommentObject->StatisticalComment($id);
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     $data = $this->CategoryObject->getAll($this->tableName, $_GET);
            // }
            //debug($data);
            //$_SESSION['admin'] = 1;

            require_once './src/views/admin/comment/Statistical.php';
        }
        public function StatisticalDetailBl() {
            $id = $_GET['ID'];
            $StatisticalCommentDetail = $this->CommentObject->StatisticalCommentDetail($id);
            // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
            //     $data = $this->CategoryObject->getAll($this->tableName, $_GET);
            // }
            //debug($data);
            //$_SESSION['admin'] = 1;

            require_once './src/views/admin/comment/detailBl.php';
        }
        public function delStatisticalDetailBl(){
            
                $idbl = $_GET['ID'] ?? ""; // ID chỉ là tên đặt sau dấu ? bên file index cha
                   $this->CommentObject->deleteComment($idbl);             
                   header("Location: ".$_SERVER['HTTP_REFERER']);
                   //hoặc là đẩy lại dữ liệu về index  require_once './src/views/admin/category/Category.php'; như này 
        }
        //chia page
        
        
        
        
        
}
?>