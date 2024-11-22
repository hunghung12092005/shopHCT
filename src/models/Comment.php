<?php
namespace modelsComment;

use commons\baseModel;

class Comment extends baseModel
{

    //thống kê
public function StatisticalComment($id){
            $sql = "
            SELECT 
                sp.id as idsp, 
                sp.ten_san_pham as tenSp,
                (SELECT COUNT(*) FROM binh_luan WHERE ma_san_pham = sp.id) as soLuongBinhLuan
            FROM san_pham sp
            LEFT JOIN binh_luan bl ON sp.id = bl.ma_san_pham
            WHERE sp.id = ?
            ORDER BY sp.id DESC
        ";
    $params = [$id];
    return $this->pdoQueryAll($sql, $params);
    }
    /*  */
public function StatisticalCommentDetail($id){
    $sql = "
    SELECT 
        sp.id as idsp, 
        bl.id as idbl, 
        sp.ten_san_pham as tenSp,
        bl.user as nguoiBL,
        bl.noi_dung as ndBl,
        bl.rate as rateUser 
    FROM san_pham sp
    LEFT JOIN binh_luan bl ON sp.id = bl.ma_san_pham
    WHERE sp.id = ?
    ORDER BY sp.id DESC
";
    $params = [$id];
    return $this->pdoQueryAll($sql, $params);
    }
    /*  */
 public function deleteComment($idbl)
    {
        $sql = "
            DELETE FROM binh_luan
            WHERE id = ?
        ";
    
        $params = [$idbl];
    
        return $this->pdoUpdate($sql, $params);
    }

}
?>