<?php 
    namespace modelsStatistical;

    use commons\baseModel;
    class Statistical extends baseModel{
        public function Statistical(){
            $sql = "select loai.id as iddm, loai.ten_loai as tenloai, count(san_pham.id) as soluong, min(san_pham.gia) as mingia, max(san_pham.gia) as maxgia, avg(san_pham.gia) as avggia from san_pham left join loai on loai.id = san_pham.ma_loai group by loai.id order by soluong desc";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();

        }
        public function Statisticalcomment() {
            $sql = "SELECT users.id as id,users.user_id AS iduser, COUNT(gop_y.id) AS soluong
                    FROM users
                    LEFT JOIN gop_y ON users.user_id = gop_y.user_id
                    GROUP BY users.id
                    ORDER BY soluong DESC";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
      
    }
?>