<style>
    /* button {
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 padding: 1em;
 border: 0px solid transparent;
 background-color: rgba(100,77,237,0.08);
 border-radius: 1.25em;
 transition: all 0.2s linear;
}

button:hover {
 box-shadow: 3.4px 2.5px 4.9px rgba(0, 0, 0, 0.025),
  8.6px 6.3px 12.4px rgba(0, 0, 0, 0.035),
  17.5px 12.8px 25.3px rgba(0, 0, 0, 0.045),
  36.1px 26.3px 52.2px rgba(0, 0, 0, 0.055),
  99px 72px 143px rgba(0, 0, 0, 0.08);
} */

.tooltip {
 position: relative;
 display: inline-block;
}

.tooltip .tooltiptext {
 visibility: hidden;
 width: 4em;
 background-color: rgba(0, 0, 0, 0.253);
 color: #fff;
 text-align: center;
 border-radius: 6px;
 padding: 5px 0;
 position: absolute;
 z-index: 1;
 top: 25%;
 left: 110%;
}

.tooltip .tooltiptext::after {
 content: "";
 position: absolute;
 top: 50%;
 right: 100%;
 margin-top: -5px;
 border-width: 5px;
 border-style: solid;
 border-color: transparent rgba(0, 0, 0, 0.253) transparent transparent;
}

.tooltip:hover .tooltiptext {
 visibility: visible;
}
</style>
<div class="col xl-12">
    <h2 class="admin-title">Quản lý Thống kê bình luận</h2>
    <table>
        <thead>
            <th>ID SP</th>
            <th>Tên SP</th>
            <th>Số lượng Bình luận</th>
            <!-- <th>Sản phẩm thấp nhất</th>
            <th>Sản phẩm cao nhất</th>
            <th>Sản phẩm Trung bình</th> -->
            <th>Thao tác</th>
        </thead>
        <tbody>
        <?php foreach($StatisticalComment as $itemBl): ?>
            <?php endforeach?>
            <tr>
                <td><?= $itemBl['idsp'] ?></td>
                <td><?= $itemBl['tenSp'] ?></td>
                <td><?= $itemBl['soLuongBinhLuan'] ?></td>
               
                
               
                <td>
                    
                    <a class="btnCTAs" href="<?= BASE_URL ?>/admin/Comment/detailBl?ID=<?= $itemBl['idsp'] ?>"><button>Xem chi tiết bình luận</button></a>           
                 </td>
                
            </tr>
        
        </tbody>
    </table>
</div>