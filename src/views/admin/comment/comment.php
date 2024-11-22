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
    <h2 class="admin-title">Quản lý Bình Luận</h2>    
    <table>
        <thead>
            <th>ID</th>
            <th>Mã  sản phẩm</th>
            <th>Tên sản phẩm</th>       
            <th>Image</th>
            <th>Image link</th>           
            <th>Mã loại lk sản  phẩm</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
        <?php foreach($dataComment as $itemProduct): ?>
            <tr>
                <td><?= $itemProduct['id'] ?></td>
                <td><?= $itemProduct['ma_san_pham'] ?></td>
                <td><?= $itemProduct['ten_san_pham'] ?></td>
               
                <td><img src="<?=$itemProduct['img'] ?>" width="100px" alt="<?= $itemProduct['ten_san_pham'] ?>"></td>
                <td><img src="<?php echo $itemProduct['img_link']; ?>" width="100px" alt="<?php echo $itemProduct['ten_san_pham']; ?>"></td>
               
                <!--  -->
                <td><!-- đây là loại sản phẩm -->
                  <?php
                    $loai_san_pham = array(
                      "1" => "Đồng hồ đeo tay",
                      "2" => "Máy tính xách tay",
                      "4" => "Máy ảnh",
                      "5" => "Điện thoại",
                      "5" => "Điện thoại",
                      "6" => "Nước hoa",
                      "9" => "Quần Áo",
                      // thêm các loại sản phẩm khác nếu cần
                    );
                    
                    $ma_loai = $itemProduct['ma_loai'];//lấy ra được 1,2,3,4....
                    if (array_key_exists($ma_loai, $loai_san_pham))//nếu như maloai exists trong loaisp thì...
                     {
                      echo "Tên Loại là: " . $loai_san_pham[$ma_loai];
                    } else {
                      echo $ma_loai;
                    }
                  ?>
                </td>
                <!--  -->
                <!-- <td><?= $itemProduct['ma_loai'] ?></td>                     -->
                <td>
                <a class="btnCTAs" href="<?= BASE_URL ?>/admin/comment/detail?ID=<?= $itemProduct['id'] ?>"><button>Xem chi tiết</button></a>               
                 </td>
                
            </tr>
        <?php endforeach;?>
        
        </tbody>
    </table>
   
</div>