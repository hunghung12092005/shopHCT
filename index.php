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
$url = $client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once './config/head.php';
?>

<body>
    <div class="container">
        <?php
        require_once './config/header.php';
        ?>
        <!--  main-->
        <div class="row main-prod">
            <?php
            require_once './router/index.php';
            // use controllers\client\ProductController;              
            // $data = new ProductController();
            // $data->index();  
            //debug($data); 
            ?>
        </div>
        <!-- foooter -->
        <?php
        require_once './config/footer.php';
        ?>
    </div>
<!-- nút gọi nhanh -->
    <?php if(!isset($_SESSION['admin'])): ?>
    <div class="floating-buttons" id="floatingButtons">
        <button class="close-button" id="closeButton">X</button>
        <div class="floating-button" id="callButton">
            <img src="https://img.icons8.com/ios-filled/50/000000/phone.png" alt="Gọi điện">
        </div>
        <div class="floating-button" id="facebookButton">
            <img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png" alt="Chat Facebook">
        </div>
        <div class="floating-button" id="zaloButton">
            <img src="https://img.icons8.com/ios-filled/50/000000/whatsapp.png" alt="Chat Zalo">
        </div>
    </div>
    <button class="toggle-button" id="toggleButton">
        <img src="./assets//image//2024-11-12_17-13.png" alt="">
    </button>
    <script>
        const closeButton = document.getElementById('closeButton');
        const toggleButton = document.getElementById('toggleButton');
        const floatingButtons = document.getElementById('floatingButtons');

        // Hàm để thu gọn các nút và hiển thị nút "+"
        closeButton.onclick = () => {
            floatingButtons.style.display = "none"; // Ẩn các nút
            toggleButton.style.display = "flex"; // Hiển thị nút "+"
        };

        // Hiển thị nút "+" khi các nút bị ẩn
        toggleButton.onclick = () => {
            floatingButtons.style.display = "flex"; // Hiện các nút
            toggleButton.style.display = "none"; // Ẩn nút "+"
        };
    </script>
    <?php else: ?>
    <?php endif; ?>
<!-- end gọi nhanh -->
</body>

<!-- Main JS File -->

<!-- searchBox start-->
<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

<script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- searchBox end-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script><!-- js clock -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= BASE_URL ?>/assets/js/scripct.js"></script>
<script src="<?= BASE_URL ?>/assets/js/product.js"></script>
<script src="<?= BASE_URL ?>/assets/js/productDetail.js"></script>
<script src="<?= BASE_URL ?>/assets/js/admin.js"></script>

</html>