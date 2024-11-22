<style>
    .register-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 30px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.form-title {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: 600;
  margin-bottom: 8px;
  color: #555;
}

.form-control {
  display: block;
  width: 100%;
  padding: 10px 15px;
  font-size: 16px;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 5px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn-register {
  display: block;
  width: 100%;
  padding: 10px 20px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-register:hover {
  background-color: #0056b3;
}
</style>

<div class="register-form">
        <h2 class="form-title">Đăng ký tài khoản</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">User_id:</label>
                <input type="text" id="user_id" name="user_id" class="form-control" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>           
            <div class="form-group">
                <label for="confirm-password">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Nhập lại mật khẩu" required>
            </div>
            <div class="form-group">
                <select name="role" id="">
                  <option value="client">client</option>
                  <option value="admin">admin</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-register">Đăng ký</button>
        </form>
    </div>