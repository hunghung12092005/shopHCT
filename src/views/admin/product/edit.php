<?php 
    
?>

<h1>Sửa thông tin sản phẩm</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for=""></label>
        <input class="form-control" type="hidden" name="id" value="<?= $findProduct['id'] ?>">
    </div> 
     <div class="form-group">
        <label for="">Mã Sản phẩm</label>
        <input class="form-control" type="text" name="ma_san_pham" value="<?= $findProduct['ma_san_pham'] ?>">
    </div>      
     <div class="form-group">
        <label for="">Tên Sản phẩm</label>
        <input class="form-control" type="text" name="ten_san_pham" value="<?= $findProduct['ten_san_pham'] ?>">
    </div>    
     <div class="form-group">
        <label for="">Giá</label>
        <input class="form-control" type="text" name="gia" value="<?= $findProduct['gia'] ?>">
    </div>    
     <div class="form-group">
        <label for="">image</label>
        <input class="form-control" type="text" name="img" value="<?= $findProduct['img'] ?>">
    </div>    
     <div class="form-group">
        <label for="">image_link</label>
        <input class="form-control" type="text" name="img_link" value="<?= $findProduct['img_link'] ?>">
    </div>    
     <div class="form-group">
        <label for="">Mô tả</label>
        <input class="form-control" type="text" name="moTa" value="<?= $findProduct['moTa'] ?>">
    </div>    
     <div class="form-group">
        <label for="">Lượt xem </label>
        <input class="form-control" type="text" name="luotXem" value="<?= $findProduct['luotXem'] ?>">
    </div>    
    <div class="form-group">
        <label for="chuyen_nghanh" >Thuộc loại</label>
            <select class="form-control" id="ma_loai" name="ma_loai" required>
                <option value="1">Đồng Hồ </option>
                <option value="2">Máy tính</option>
                <option value="4">Máy ảnh </option>
                <option value="5">Điện thoại</option>
                <option value="6">Nước hoa</option>
                <option value="9">Quần Áo</option>
            </select>
    </div>    
    <button>Lưu</button>
</form>
