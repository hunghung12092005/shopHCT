<style>
    /* TikTok: Coding World */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');


    .overlayLogin {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000000;
        z-index: 1;
        opacity: 0;
        transition: opacity 0.5s ease;
        pointer-events: none;
        /* Không cho phép tương tác với overlayLogin khi mờ */
    }

    .containerLogin {
        background-color: #fff;
        border-radius: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        margin: 0 auto;
        min-height: 480px;
        z-index: 2;
        /* Nội dung nằm trên overlayLogin */
    }

    .containerLogin p {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 0.3px;
        margin: 20px 0;
    }

    .containerLogin span {
        font-size: 12px;
    }

    .containerLogin a {
        color: #333;
        font-size: 13px;
        text-decoration: none;
        margin: 15px 0 10px;
    }

    .containerLogin button {
        background-color: #000000;
        color: #fff;
        font-size: 12px;
        padding: 10px 45px;
        border: 1px solid transparent;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-top: 10px;
        cursor: pointer;
    }

    .containerLogin button.hidden {
        background-color: transparent;
        border-color: #fff;
    }

    .containerLogin form {
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        height: 100%;
    }

    .containerLogin input {
        background-color: #eee;
        border: none;
        margin: 8px 0;
        padding: 10px 15px;
        font-size: 13px;
        border-radius: 8px;
        width: 100%;
        outline: none;
    }

    .form-containerLogin {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.3s ease-in-out;
    }

    .sign-in {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .containerLogin.active .sign-in {
        transform: translateX(100%);
    }

    .sign-up {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .containerLogin.active .sign-up {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: move 0.6s;
    }

    @keyframes move {

        0%,
        29.99% {
            opacity: 1;
            z-index: 1;
        }

        80%,
        100% {
            opacity: 5;
            z-index: 10;
        }
    }

    .social-icons {
        margin: 20px 0;
    }

    .social-icons a {
        border: .5px solid #ccc;
        border-radius: 20%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 3px;
        width: 40px;
        height: 40px;
    }

    .toggle-containerLogin {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        z-index: 1000;
    }

    .containerLogin.active .toggle-containerLogin {
        transform: translateX(-100%);
    }

    .toggle {
        background-color: #000000;
        height: 100%;
        background: linear-gradient(to right, #000000ca, #000000);
        color: #fff;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: all 0.3s ease-in-out;
    }

    .containerLogin.active .toggle {
        transform: translateX(50%);
    }

    .toggle-panel {
        position: absolute;
        width: 50%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 30px;
        text-align: center;
        top: 0;
        transform: translateX(0);
        transition: all 0.3s ease-in-out;
    }

    .toggle-left {
        transform: translateX(-50%);
    }

    .containerLogin.active .toggle-left {
        transform: translateX(0);
    }

    .toggle-right {
        right: 0;
        transform: translateX(0);
    }

    .containerLogin.active .toggle-right {
        transform: translateX(200%);
    }
</style>
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="overlayLogin" id="overlayLogin"></div>
    <div class="containerLogin" id="containerLogin">
        <div class="form-containerLogin sign-up">
            <form>
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-microsoft"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-containerLogin sign-in">
            <form action="" method="post">
            <?php
$client = new Google\Client;
$client->setClientId("23899308701-ijn84djon2l595p1l1ksldjnpa705gug.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/shopDuAn1/dangnhap.php");
$client->addScope("email");
$client->addScope("profile");
$url = $client->createAuthUrl();
?>
                <h1>Sign In</h1>
                <div class="">
                <a href="<?= $url  ?>
                    "><i class="fa-brands fa-google-plus-g"></i> 
                </a>
                </div>
                <span>or use your email password</span>
                <input type="text" placeholder="User" name="user_id" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="g-recaptcha" data-sitekey="6Lfq7IMqAAAAAA_3LfpIkQkH5w-nMLGDCCzr3C0i"></div>

                <a href="#">Forget Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-containerLogin">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome to HCT CLOTHER!</h1>
                    <p>Bạn đã có tài khoản?</p>
                    <button class="hidden" id="login">Đăng nhập ngay tại đây!</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Bạn chưa có tài khoản ?</p>
                    <button class="hidden" id="register">Đăng ký tại đây!</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        /* TikTok: Coding World */
        const containerLogin = document.getElementById("containerLogin");
        const overlayLogin = document.getElementById("overlayLogin");
        const registerBtn = document.getElementById("register");
        const loginBtn = document.getElementById("login");

        registerBtn.addEventListener("click", () => {
            containerLogin.classList.add("active");
            overlayLogin.style.opacity = '1'; // Hiện overlayLogin
            overlayLogin.style.pointerEvents = 'auto'; // Cho phép tương tác với overlayLogin
        });

        loginBtn.addEventListener("click", () => {
            containerLogin.classList.remove("active");
            overlayLogin.style.opacity = '0'; // Ẩn overlayLogin
            overlayLogin.style.pointerEvents = 'none'; // Không cho phép tương tác khi ẩn
        });
    </script>
</body>