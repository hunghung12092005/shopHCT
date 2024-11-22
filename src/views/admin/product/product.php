
<style>
  .timKiemDanhmuc {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.timKiemDanhmuc label {
  margin-right: 10px;
  font-weight: bold;
}

.timKiemDanhmuc select {
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 8px center;
  background-size: 24px;
  cursor: pointer;
}

.timKiemDanhmuc select:focus {
  outline: none;
  border-color: #66afe9;
  box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
}

</style>
<div class="col xl-12">
    <h2 class="admin-title">Quản lý sản phẩm</h2>
    <!--  -->
    
   
    <form action="" method="get">
   
   <!-- <div class="timKiemGiongnoi">
    <input type="text" id="input">
    <button onclick="speak()">Nói</button>
  </div> -->
  <div class="timKiemDanhmuc">
    <label for="ma_loai">Tìm Theo Danh mục:</label>
    <select id="ma_loai" name="keyword">
      <option value="" >-- Tất Cả Danh Mục --</option>
      <option value="1" <?= isset($_GET['keyword']) && $_GET['keyword'] == '1' ? 'selected' : '' ?>>Đồng hồ đeo tay</option>
      <option value="2" <?= isset($_GET['keyword']) && $_GET['keyword'] == '2' ? 'selected' : '' ?>>Máy tính xách tay</option>
      <option value="4" <?= isset($_GET['keyword']) && $_GET['keyword'] == '4' ? 'selected' : '' ?>>Máy ảnh</option>
      <option value="5" <?= isset($_GET['keyword']) && $_GET['keyword'] == '5' ? 'selected' : '' ?>>Điện thoại</option>
      <option value="6" <?= isset($_GET['keyword']) && $_GET['keyword'] == '6' ? 'selected' : '' ?>>Nước hoa</option>
      <option value="9" <?= isset($_GET['keyword']) && $_GET['keyword'] == '9' ? 'selected' : '' ?>>Quần Áo</option>
    </select>
  </div> 
  <button type="submit">Tìm kiếm</button>
</form>
    <!--  -->
    <a href="<?= BASE_URL ?>/admin/CreateSanPham"><button>Thêm mới</button></a>
    <table>
        <thead>
            <th>ID</th>
            <th>Mã  sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Image</th>
            <th>Image link</th>
            <th>Mô tả</th>
            <th>lượt xem</th>
            <th>Mã loại lk sản  phẩm</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
        <?php foreach($dataProduct as $itemProduct): ?>
            <tr>
                <td><?= $itemProduct['id'] ?></td>
                <td><?= $itemProduct['ma_san_pham'] ?></td>
                <td><?= $itemProduct['ten_san_pham'] ?></td>
                <td><?= $itemProduct['gia'] ?></td>
                <td><img src="<?=$itemProduct['img'] ?>" width="100px" alt="<?= $itemProduct['ten_san_pham'] ?>"></td>
                <td><img src="<?php echo $itemProduct['img_link']; ?>" width="100px" alt="<?php echo $itemProduct['ten_san_pham']; ?>"></td>
                <td><?= $itemProduct['moTa'] ?></td>
                <td><?= $itemProduct['luotXem'] ?></td>
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
                    <a class="btnCTAs" href="<?= BASE_URL ?>/admin/DeleteSanPham?ID=<?= $itemProduct['id'] ?>"><button>Xóa</button></a>
                    <a class="btnCTAs" href="<?= BASE_URL ?>/admin/UpdateSanPham?ID=<?= $itemProduct['id'] ?>"><button>Sửa</button></a>           
                 </td>
                
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<!-- 
<script>
  function speak(){
    var text = document.getElementById("input").value;
    var test = new SpeechSynthesisUtterance(text);
    speechSynthesis.speak(test);
  }
</script> -->