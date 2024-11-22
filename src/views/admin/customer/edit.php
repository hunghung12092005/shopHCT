<?php 
    
?>

<h1>Sửa khách hàng</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for=""></label>
        <input class="form-control" type="hidden" name="id" value="<?= $findCustomer['id'] ?>">
    </div> 
     <div class="form-group">
        <label for="">User_id</label>
        <input class="form-control" type="text" name="user_id" value="<?= $findCustomer['user_id'] ?>">
    </div>      
     <div class="form-group">
        <label for="">User_name</label>
        <input class="form-control" type="text" name="user_name" value="<?= $findCustomer['user_name'] ?>">
    </div>      
     <div class="form-group">
        <label for="">password</label>
        <input class="form-control" type="text" name="password" value="<?= $findCustomer['password'] ?>">
    </div>      
     <div class="form-group">
        <label for="">role</label>
        <input class="form-control" type="text" name="role" value="<?= $findCustomer['role'] ?>">
    </div>      
     <div class="form-group">
        <label for="">email</label>
        <input class="form-control" type="text" name="email" value="<?= $findCustomer['email'] ?>">
    </div>      
     <div class="form-group">
        <label for="">image</label>
        <input class="form-control" type="text" name="image" value="<?= $findCustomer['image'] ?>">
    </div>    
    <button>Lưu</button>
</form>
