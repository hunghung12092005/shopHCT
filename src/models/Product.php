<?php

namespace modelsProduct;

use commons\baseModel;

class Product extends baseModel
{
    public function selectByParamProduct($tableName, $data)
    {
        $data['keyword'] = "%" . $data['keyword'] . "%";
        $sql = "SELECT * FROM $tableName 
                           WHERE ten_san_pham LIKE :keyword 
                            OR mo_ta LIKE :keyword";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetchAll();
    }
    public function selectByParamProduct2($tableName, $data)
    {
        $conditions = [];
        $params = [];
        // Điều kiện cho giới tính
        if (!empty($data['gender'])) {
            $conditions[] = "gioi_tinh = :gender";
            $params[':gender'] = $data['gender'];
        }
        // Điều kiện cho giá
        if (!empty($data['price'])) {
            switch ($data['price']) {
                case 1:
                    $conditions[] = "gia_ban >= 750000"; // Từ 750.000đ trở lên
                    break;
                case 2:
                    $conditions[] = "gia_ban < 350000"; // Dưới 350.000đ
                    break;
                case 3:
                    $conditions[] = "gia_ban < 150000"; // Dưới 150.000đ
                    break;
            }
        }
        // Điều kiện cho kích thước
        if (!empty($data['size'])) {
            $conditions[] = "size = :size";
            $params[':size'] = $data['size'];
        }
        // Xây dựng câu truy vấn SQL
        $sql = "SELECT * FROM $tableName";
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(' AND ', $conditions);
        }
        // Chuẩn bị và thực thi câu truy vấn
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        // Trả về kết quả
        return $stmt->fetchAll();
    }
    public function delAllProduct($tableName, $id)
    {
        $sql = "DELETE FROM $tableName where ID = ?";
        parent::pdoUpdate($sql, [$id]);
        //return $stmt->fetchAll();
    }
    public function updateByIDCatogery($tableName, $id, $data)
    {
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
        $sql = "UPDATE $tableName SET " . implode(", ", $colums) . "  WHERE ID  = :ID";
        //debug($data);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function findCatogery($tableName, $id)
    {
        $sql = "SELECT * FROM $tableName where ID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
