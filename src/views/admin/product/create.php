

<h1>Thêm Bài Viết Sản phẩm</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for=""></label>
        <input class="form-control" type="hidden" name="id" >
    </div> 
     <div class="form-group">
        <label for="">Mã sản phẩm</label>
        <input class="form-control" type="text" name="ma_san_pham" >
    </div>      
     <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input class="form-control" type="text" name="ten_san_pham" >
    </div> 
     <div class="form-group">
        <label for="">Giá</label>
        <input class="form-control" type="text" name="gia" >
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input class="form-control" type="file" name="img" multiple>
    </div> 
    <div class="form-group">
        <label for="">Hình ảnh (link)</label>
        <input class="form-control" type="text" name="img_link" placeholder="chỉ được thêm khi để trống mục hình ảnh">
    </div> 
    <div class="form-group">
        <label for="">Mô tả</label>
        <input class="form-control" type="text" name="moTa" >
    </div> 
    
    <div class="form-group">
  <label for="chuyen_nghanh">Thuộc loại</label>
    <select class="form-control" id="ma_loai" name="ma_loai">
        <option value="1">Đồng Hồ </option>
        <option value="2">Máy tính</option>
        <option value="4">Máy ảnh </option>
        <option value="5">Điện thoại</option>
        <option value="6">Nước hoa</option>
    </select>
    </div>

    <button>Lưu</button>
</form>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const fileInput = document.querySelector('input[name="img"]');
  const linkInput = document.querySelector('input[name="img_link"]');

  fileInput.addEventListener('change', function() {
    if (this.value) {
      linkInput.value = '';
      
    }
  });

  linkInput.addEventListener('input', function() {
    if (this.value) {
      fileInput.value = '';
    }
  });
});
</script>
