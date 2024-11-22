<?php 
    namespace modelsCustomer;

    use commons\baseModel;
    class Customer extends baseModel{
        public function updateByIDCustomer($tableName, $id, $data) {
            //debug($id);
            $colums = [];
            $data['ID'] = $id;
            foreach ($data as $key => $value) {
                // if($key !== 'ma_san_pham') {
                    $colums[] = "$key= :$key";
                //}
            }
            // /debug(implode(", ", $colums));
            //$sql = "UPDATE $tableName SET ".implode(",", $colums)." WHERE MA_SAN_PHAM = ?";
            $sql = "UPDATE $tableName SET ".implode(", ", $colums)."  WHERE ID  = :ID";
            //debug($data);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
        }
        public function findCustomer($tableName, $id) {            
            $sql = "SELECT * FROM $tableName where ID = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }
        //xem bình luận theo id user
        public function commentKH($id)
            {
                $sql = "
                    SELECT 
                        kh.user_id as user_id,
                        sp.id as san_pham_id,
                        sp.ten_san_pham as san_pham_ten,
                        bl.noi_dung as ndung 
                    FROM users kh
                    JOIN danh_gia bl ON kh.id = bl.id_user
                    JOIN san_pham sp ON bl.id_san_pham = sp.id
                    WHERE kh.id = ?
                    ORDER BY sp.id DESC
                ";
                $params = [$id];
                return $this->pdoQueryAll($sql, $params);
            }
            public function deleteComment($ndung)
                {
                    $sql = "
                        DELETE FROM danh_gia
                        WHERE noi_dung = :ndung
                    ";

                    $params = [
                        'ndung' => $ndung
                    ];

                    return $this->pdoUpdate($sql, $params);
                }
        //
      
    }
?>