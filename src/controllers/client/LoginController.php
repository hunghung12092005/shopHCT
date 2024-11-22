<?php 
    namespace controllers\client;

    use models\Login;

    class LoginController {
        public $modelObject;
        public $baseUrl = BASE_URL;
        public $tableName = "loai";
        public function __construct()
        {
            $this->modelObject = new Login();
        }
        public function login() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Xác thực reCAPTCHA
                $recaptchaSecret = '6Lfq7IMqAAAAAAqZID5d3TrUCWxcpx5m_q7ZDhsr'; // Thay thế bằng secret key của bạn
                $recaptchaResponse = $_POST['g-recaptcha-response'];
        
                // Gửi yêu cầu để xác thực reCAPTCHA
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
                $responseKeys = json_decode($response, true);
        
                if (intval($responseKeys["success"]) !== 1) {
                    echo '<script>
                    alert("Vui lòng xác thực reCAPTCHA!"); 
                    </script>';
                    require_once './src/views/login/login.php';
                    return;
                }
        
                // Tiến hành tìm kiếm thông tin tài khoản
                unset($_POST['g-recaptcha-response']);
                //debug($_POST);
                $accountInfo = $this->modelObject->findUser($_POST) ?? [];
                if ($accountInfo === false) {
                    $loginFailMess = "Sai tên truy cập hoặc mật khẩu";
                    require_once './src/views/login/login.php';
                } else {
                    $_SESSION['user_id'] = $accountInfo['user_id'];
                    $_SESSION['id'] = $accountInfo['id'];
                    //$_SESSION['image'] = $accountInfo['image'];
        
                    // Gán giá trị role dựa trên điều kiện
                    if ($accountInfo['role'] == 'admin') {
                        $_SESSION['admin'] = 'admin'; // Gán giá trị
                    }
                    echo '<script>
                    alert("Đăng nhập thành công!"); 
                    window.location.href = "' . $this->baseUrl . '/";
                    </script>';
                    exit();
                }
            } else {
                require_once './src/views/login/login.php';
            }            
        }
        public function loginGG(){
            require_once './src/views/login/dangnhap.php';
        }
        public function changeLogin() {
            $id = $_GET['ID'] ?? "";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //debug(1);
                $passcurrent = $_POST['passcurrent'];
                $newpass = $_POST['newpass'];
                $confirmpass = $_POST['confirmpass'];  
                $user = $this->modelObject->findIDUser($id);
                if ($user && $passcurrent == $user['password']) {
                    if ($newpass == $confirmpass) {
                        //debug($_POST);
                        $this->modelObject->changeByIDUser($id, $newpass);
                        // Cập nhật mật khẩu mới cho user
                        
                        
                        echo '<script>
                            alert("Cập nhật mật khẩu thành công");
                            window.location.href = "' . $this->baseUrl . '/changeLogin";
                        </script>';
                        return;
                    } else {
                        echo '<script>
                            alert("Mật khẩu mới và xác nhận mật khẩu không khớp.");
                            window.location.href = "' . $this->baseUrl . '/changeLogin";
                        </script>';
                        
                    }
                } else {
                    echo '<script>
                    alert("Mật khẩu hiện tại không đúng.");
                    window.location.href = "' . $this->baseUrl . '/changeLogin";
                </script>';
                    
                }

                // Chuyển hướng người dùng đến trang adminSinhVien
                // echo '<script>
                //     alert("Cập nhật user thành công");
                //       window.location.href = "' . $this->baseUrl . '/";
                //       </script>';
                // return;
            }
            require_once './src/views/login/changeLogin.php';
        }

        public function updateAccount() {
            $id = $_GET['ID'] ?? "";
        
            // Kiểm tra xem có đang bấm nút Lưu với phương thức POST hay không?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //debug(1);
                // Gọi hàm updateByIDAdminSinhVien của Model (Product) để cập nhật dữ liệu
               // debug($_POST);     
                $this->modelObject->updateByIDUser($id, $_POST);  
                // Chuyển hướng người dùng đến trang adminSinhVien
                echo '<script>
                    alert("Cập nhật user thành công");
                      window.location.href = "' . $this->baseUrl . '/";
                      </script>';
                return;
            }
        
            // Lấy dữ liệu từ Model (Product) và gán vào biến $data
            $findUser = $this->modelObject->findIDUser($id);
        
            // Yêu cầu hiển thị view createAdminSinhVien.php
            require_once './src/views/login/updateAccount.php';
        }

       

        public function logout() {
            session_unset();
            echo '<script>
            alert("Đăng xuất thành công!"); 
            window.location.href = "' . $this->baseUrl . '/";
          </script>';
            exit();
        }
          //đăng ký
        public function createAccount() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user_id = $_POST['user_id'];
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm-password'];
                $role = $_POST['role'];
        
                // Kiểm tra xem hai mật khẩu có trùng nhau không
                if ($password !== $confirm_password) {
                    echo '<script>
                    alert("Mật khẩu nhập lại sai!");
                    window.location.href = "' . $this->baseUrl . '/creteAccount";
                </script>';
                    
                    return;
                }
                //kiểm tra user_id đã tồn tại chưa
                    $count = $this->modelObject->checkDuplicateUserId($user_id);
                    // debug(1);
                    if ($count > 0) {
                        echo '<script>
                            alert("User ID đã tồn tại. Vui lòng chọn một User ID khác.!");
                            window.location.href = "' . $this->baseUrl . '/creteAccount";
                        </script>';
                        
                        return;
                    }
        
                // Mã hóa mật khẩu
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                $accountInfo = $this->modelObject->createUser($user_id, $user_name, $email,$password, $role);
                    
                    echo '<script>
                        alert("Thao tác tạo user thành công!");
                        window.location.href = "' . $this->baseUrl . '/shopDuAnMau";
                    </script>';                 
                  
                 if($accountInfo != 0) {
                    $error_message = "Lỗi khi thực hiện truy vấn SQL.";
                    require_once './src/views/login/createAccount.php';
                }
            } 
                require_once './src/views/login/createAccount.php';
            
        }
        // public function crateAccount() {
        //     if($_SERVER['REQUEST_METHOD'] == 'POST') {
               
        //         // $fileExtension = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));//chuyển tất cả sang chữ hoa
        //         // //debug($fileExtension);
                
        //         // if(in_array($fileExtension,['jpg','png','jpng'])){
        //         //     if(isset($_FILES) && $_FILES['image']['size'] > 0){
        //         //         //debug($_FILES['image']['name']);//lấy ra đường dẫn chính của hình ảnh
        //         //     $dir = "./assets/image/account";//đường dẫn bạn muốn lưu file về đâu
        //         //     $tmp_name = $_FILES['image']['tmp_name'];//lấy ra cái name của mảng mặc định theo tên của sever(mảng 2 chiều)
        //         //     $file_name = $_FILES['image']['name'];//lưu vào thì nó tên là gì
        //         //     $_POST['image'] = "$dir/$file_name";//thêm  image vào mảng $post để người dùng mới có thể up được file lên
        //         //     move_uploaded_file($tmp_name, "$dir/$file_name");//lấy biến lưu vào folder với tên
        //         //     }
        //         // }
        //         // else{
        //         //     echo'phải là file png,jpg....';
        //         //     return;
        //         // }
        
        //     //Thực hiện câu lệnh Insert
        //     //debug($_POST);
        //     $this->modelObject->createAccount($this->tableName, $_POST);
        //     echo '<script>
        //               window.location.href = "' . $this->baseUrl . '/";
        //               </script>';
        //     return;
        // } 
       
        //     require_once './src/views/login/createAccount.php';
        
        // }
        
    }
    
?>