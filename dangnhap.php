<?php 
    session_start();
    require_once './src/commons/functions.php';
    require_once './src/commons/evr.php';
    require_once './src/commons/baseModel.php';
    require __DIR__ . '/vendor/autoload.php';

?>
<?php
$client = new Google\Client;

$client->setClientId("23899308701-ijn84djon2l595p1l1ksldjnpa705gug.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/shopDuAn1/dangnhap.php");

$client->addScope("email");
$client->addScope("profile");

if (!isset($_GET["code"])) {
    // Tạo URL xác thực
    $authUrl = $client->createAuthUrl();
    // Gửi URL đến phía client
    echo "<script>window.location.href = '$authUrl';</script>";
    exit;
}

// Lấy token truy cập
$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

if (array_key_exists('error', $token)) {
    exit('Error: ' . htmlspecialchars($token['error']));
}

$client->setAccessToken($token["access_token"]);

// Lấy thông tin người dùng
$oauth = new Google\Service\Oauth2($client);
try {
    $userinfo = $oauth->userinfo->get();
} catch (Exception $e) {
    exit('Error retrieving user info: ' . htmlspecialchars($e->getMessage()));
}

// Kết nối với cơ sở dữ liệu
$servername = "localhost"; // Thay đổi nếu cần
$username = "root"; // Thay đổi thành tên người dùng của bạn
$password = ""; // Thay đổi thành mật khẩu của bạn
$dbname = "duan1"; // Thay đổi thành tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Lưu thông tin người dùng vào session
$_SESSION['user_name'] = $userinfo->name;
$_SESSION['user_email'] = $userinfo->email;

// Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu chưa
$email = $conn->real_escape_string($userinfo->email);
$name = $conn->real_escape_string($userinfo->name);
$address = $conn->real_escape_string($userinfo->address);
$role = 'client';
// Thực hiện truy vấn để kiểm tra xem email đã tồn tại chưa
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$baseUrl = BASE_URL;
if ($result->num_rows == 0) {
    // Nếu email chưa tồn tại, thêm mới người dùng
    $sql = "INSERT INTO users (email, user_id,dia_chi,role) VALUES ('$email', '$name','$address','$role')";
    if ($conn->query($sql) === TRUE) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id']; // Gán d vào session
        $_SESSION['user_id'] = $row['user_id'];
        require_once './config/header.php';

        echo '<script>
                    alert("Email saved successfully!"); 
                    window.location.href = "' . $baseUrl . '/";
                  </script>';
    } else {    
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id']; // Gán id vào session
    $_SESSION['user_id'] = $row['user_id'];
    if ($row['role'] == 'admin') {
        $_SESSION['admin'] = 'admin'; // Gán giá trị
    }
    require_once './config/header.php';
    
    echo '<script>
                    alert("Đăng nhập thành công!"); 
                    window.location.href = "' . $baseUrl . '/";
                  </script>';
}

// Đóng kết nối
$conn->close();
?>