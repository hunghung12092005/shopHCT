<?php 
    namespace modelsHome;

    use commons\baseModel;
    class Home extends baseModel{
        // public function getAllprodFavorive() {
        //     $sql = "SELECT sp.*,ip.hinh_anh_prod AS img_product_img,ip.img_black AS img_black ,ip.img_green AS img_green ,ip.img_brown AS img_brown, ip.id
        //             FROM san_pham sp
        //             LEFT JOIN img_product ip ON sp.id = ip.id_san_pham
        //             WHERE sp.id_danh_muc = 2
        //             ORDER BY sp.luot_mua DESC
        //             LIMIT 4;"; // Lấy 4 sản phẩm được ưa chuộng nhất
        //     $stmt = $this->conn->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }
        public function getAllprodFavorive() {
            $sql = "SELECT *
            FROM san_pham
            WHERE id_danh_muc = 2
            ORDER BY luot_mua DESC
            LIMIT 4;";//thêm sản phẩm mới lên
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getAllprodFavorive2() {
            $sql = "SELECT *
            FROM san_pham
            WHERE id_danh_muc = 1
            ORDER BY luot_mua DESC
            LIMIT 4;";//thêm sản phẩm mới lên
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } 
        public function getAllprodSale(){
            $sql = "SELECT *
            FROM san_pham
            ORDER BY luot_mua DESC
            LIMIT 15;";//thêm sản phẩm mới lên
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getAllprodNam(){
            $sql = "SELECT *
            FROM san_pham
            WHERE gioi_tinh = 'Nam' OR gioi_tinh = 'Cả 2'
            ORDER BY luot_mua DESC
            LIMIT 12;";//thêm sản phẩm mới lên
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getAllprodNu(){
            $sql = "SELECT *
            FROM san_pham
            WHERE gioi_tinh = 'Nu' OR gioi_tinh = 'Cả 2'
            ORDER BY luot_mua DESC
            LIMIT 12;";//thêm sản phẩm mới lên
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        // public function getAllSlide() {
        //     $sql = "SELECT * FROM san_pham ORDER BY luotXem DESC LIMIT 0,5";//thêm sản phẩm mới lên
        //     $stmt = $this->conn->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // } 
        // public function top10Love() {
        //     $sql = "SELECT * FROM san_pham ORDER BY luotXem DESC LIMIT 0,9";//thêm sản phẩm mới lên
        //     $stmt = $this->conn->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }   
        // public function index($tableName) {
        //     $sql = "SELECT * FROM $tableName";
        //     $stmt = $this->conn->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }
        public function selectProduct($data)
            {              
                $data['keyword'] = "%" . $data['keyword'] . "%";               
                $sql = "SELECT * FROM san_pham 
                            WHERE ten_san_pham LIKE :keyword";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($data);
                return $stmt->fetchAll();
            }
        public function selectByParamProductSearch($tableName, $data)
            {              
                $data['keyword'] = "%" . $data['keyword'] . "%";               
                $sql = "SELECT * FROM $tableName 
                           WHERE ten_san_pham LIKE :keyword 
                            OR mo_ta LIKE :keyword";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($data);
                return $stmt->fetchAll();
            }
              
    }
?>