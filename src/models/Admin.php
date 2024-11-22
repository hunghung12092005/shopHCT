<?php

namespace modelsAdmin;

use commons\baseModel;

class Admin extends baseModel {
    public function getDailyIncrease() {
        // Lấy tổng số lượt xem hôm nay
        $sqlToday = "SELECT SUM(luot_xem) AS total_views FROM san_pham WHERE DATE(view_time) = CURDATE()";
        $todayViews = parent::pdoQuery($sqlToday, []);
        
        // Lấy tổng số lượt xem hôm qua
        $sqlYesterday = "SELECT SUM(luot_xem) AS total_views FROM san_pham WHERE DATE(view_time) = CURDATE() - INTERVAL 1 DAY";
        $yesterdayViews = parent::pdoQuery($sqlYesterday, []);
        
        // Tính số lượt xem tăng lên
        $todayCount = $todayViews ? $todayViews['total_views'] : 0;
        $yesterdayCount = $yesterdayViews ? $yesterdayViews['total_views'] : 0;
        
        return $todayCount - $yesterdayCount;
    }
    public function getDailyComment() {
        // Lấy tổng số bình luận hôm nay
        $sqlToday = "SELECT COUNT(id) AS total_comments FROM danh_gia WHERE DATE(thoi_gian) = CURDATE()";
        $todayComments = parent::pdoQuery($sqlToday, []);
        
        // Lấy tổng số bình luận hôm qua
        $sqlYesterday = "SELECT COUNT(id) AS total_comments FROM danh_gia WHERE DATE(thoi_gian) = CURDATE() - INTERVAL 1 DAY";
        $yesterdayComments = parent::pdoQuery($sqlYesterday, []);
        
        // Tính số bình luận tăng lên
        $todayCount = $todayComments ? $todayComments['total_comments'] : 0;
        $yesterdayCount = $yesterdayComments ? $yesterdayComments['total_comments'] : 0;
        
        return $todayCount - $yesterdayCount;
    }
    
}
