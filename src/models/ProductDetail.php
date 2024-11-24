<?php

namespace modelsProductDetail;

use commons\baseModel;

class ProductDetail extends baseModel
{

    public function getAllProducDetal($id)
    {
        $sql = "
            SELECT sp.*, ip.hinh_anh_prod, ip.img_black, ip.img_green, ip.img_brown
            FROM san_pham sp
            LEFT JOIN img_product ip ON sp.id = ip.id_san_pham
            WHERE sp.id = ?"; // Chỉ cần kiểm tra id trong bảng san_pham
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(); // Sử dụng fetch() vì bạn đang lấy một sản phẩm duy nhất
    }
    public function createOrder($tableName, $data)
    {
        $columns = array_keys($data);
        $placeholders = array_fill(0, count($columns), '?');
        $sql = "INSERT INTO $tableName (" . implode(', ', $columns) . ") VALUES (" . implode(', ', $placeholders) . ")";
        $stmt = $this->conn->prepare($sql);
        $values = array_values($data);
        $stmt->execute($values);
    }


    // public function getAllUser($id) {
    //     $sql = "SELECT * FROM users WHERE user_id = ?";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute([$id]);
    //     return $stmt->fetch();
    // } 
    // public function getAllProducCatogery($idLoai) {
    //     $sql = "SELECT * FROM san_pham WHERE ma_loai = ?";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute([$idLoai]);
    //     return $stmt->fetchAll();
    // } 
    public function getAllProductBinhLuan($id)
    {
        $sql = "SELECT * FROM danh_gia WHERE id_san_pham = ? ORDER BY thoi_gian DESC limit 0,10";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }
    public function createBinhluan($data)
    {
        //debug(implode(", ", array_keys($data)));
        $colums = [];
        foreach ($data as $key => $value) {
            $colums[]  = ":$key";
        }
        //debug($colums);
        // $sql = "INSERT INTO $tableName (1 đống cột) VALUES (giá trị tương ứng của 1 đống cột)";
        $sql = "INSERT INTO danh_gia (" . implode(", ", array_keys($data)) . ") VALUES (" . implode(", ", $colums) . ")";
        //debug($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function incrementViews($id)
    {
        // Cập nhật lượt xem và thời gian lượt xem
        $stmt = $this->conn->prepare("UPDATE san_pham SET luot_xem = luot_xem + 1, view_time = NOW() WHERE id = ?");
        $stmt->execute([$id]);
    }
    // //xóa bình luận nếu người dùng đúng là id
    // public function deleteComment($commentId, $userId)
    // {
    //     // Kiểm tra xem bình luận có thuộc về người dùng đang đăng nhập không
    //     $sql = "SELECT * FROM binh_luan WHERE id = ?"; //lấy tất cả dữ liệu của cmt đó ra rồi gán vào
    //     $ownerUserId = $this->pdoQuery($sql, [$commentId])['user'];

    //     // Nếu bình luận thuộc về người dùng, thì được phép xóa.nếu $ownerUserId == với cái seccsion(user_id thì) cho xóa
    //     if ($ownerUserId == $userId) {
    //         // Xóa bình luận khỏi cơ sở dữ liệu
    //         $sql = "DELETE FROM binh_luan WHERE id = ?";
    //         $this->pdoUpdate($sql, [$commentId]);
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
