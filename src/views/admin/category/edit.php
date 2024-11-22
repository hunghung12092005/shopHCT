<?php 
    
?>

<h1>Thêm Bài Viết</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for=""></label>
        <input class="form-control" type="hidden" name="id" value="<?= $findCategory['id'] ?>">
    </div> 
     <div class="form-group">
        <label for="">Mã Loại</label>
        <input class="form-control" type="text" name="ma_loai" value="<?= $findCategory['ma_loai'] ?>">
    </div>      
     <div class="form-group">
        <label for="">Tên Loại</label>
        <input class="form-control" type="text" name="ten_loai" value="<?= $findCategory['ten_loai'] ?>">
    </div>    
    <button>Lưu</button>
</form>
