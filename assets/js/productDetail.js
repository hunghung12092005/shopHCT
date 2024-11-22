document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('#productCarousel');

    document.querySelectorAll('.thumbnail').forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            const slideTo = this.getAttribute('data-slide-to');
            const mainImage = carousel.querySelector('.carousel-item.active .main-img');
            const thumbnailRect = this.getBoundingClientRect();
            const mainImageRect = mainImage.getBoundingClientRect();

            // Animate thumbnail to main image position
            const thumbnailClone = this.cloneNode(); // Clone thumbnail for animation
            thumbnailClone.classList.add('thumbnail-clone');
            document.body.appendChild(thumbnailClone);

            // Set styles for the clone
            thumbnailClone.style.position = 'absolute';
            thumbnailClone.style.top = `${thumbnailRect.top}px`;
            thumbnailClone.style.left = `${thumbnailRect.left}px`;
            thumbnailClone.style.width = `${thumbnailRect.width}px`;
            thumbnailClone.style.height = `${thumbnailRect.height}px`;
            thumbnailClone.style.transition = 'transform 0.5s ease';

            // Start animation
            setTimeout(() => {
                thumbnailClone.style.transform = `translate(${mainImageRect.left - thumbnailRect.left}px, ${mainImageRect.top - thumbnailRect.top}px)`;
            }, 10);

            // Remove clone after animation
            setTimeout(() => {
                thumbnailClone.remove();
            }, 510); // Match duration with the CSS transition

            // Change the carousel slide
            carousel.querySelectorAll('.carousel-item').forEach(item => item.classList.remove('active'));
            carousel.querySelectorAll('.carousel-item')[slideTo].classList.add('active');
        });
    });
});
//sao chép ID
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('ID đã được sao chép: ' + text);
    }).catch(err => {
        console.error('Không thể sao chép: ', err);
    });
}
// Màu sắc
const colorOptions = document.querySelectorAll('.color-options-Detail div');
const colorDisplay = document.querySelector('.color-display');
const hiddenColorInput = document.getElementById('hidden-color');

colorOptions.forEach(option => {
    option.addEventListener('click', () => {
        // Xóa class đã chọn từ tất cả các ô
        colorOptions.forEach(opt => opt.classList.remove('color-option-selected'));
        
        // Thêm class đã chọn vào ô được nhấn
        option.classList.add('color-option-selected');

        const colorName = option.getAttribute('data-color');
        colorDisplay.textContent = ` ${colorName}`;
        hiddenColorInput.value = colorName; // Cập nhật giá trị màu sắc
    });
});

// Kích cỡ
const buttons = document.querySelectorAll('.btn-Detail');
const sizeDisplay = document.querySelector('.size-display');
const hiddenSizeInput = document.getElementById('hidden-size');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Cập nhật nội dung cho phần hiển thị kích cỡ
        sizeDisplay.textContent = `size ${button.textContent}`;
        hiddenSizeInput.value = button.getAttribute('data-size'); // Cập nhật giá trị kích cỡ
    });
});

// Tăng số lượng sản phẩm
let quantity = 1;
const quantityDisplay = document.getElementById('quantity');
const hiddenQuantityInput = document.getElementById('hidden-quantity');

const increaseBtn = document.getElementById('increaseQty');
const decreaseBtn = document.getElementById('decreaseQty');

increaseBtn.addEventListener('click', function () {
    quantity++;
    quantityDisplay.textContent = quantity;
    hiddenQuantityInput.value = quantity; // Cập nhật giá trị số lượng
});

decreaseBtn.addEventListener('click', function () {
    if (quantity > 1) {
        quantity--;
        quantityDisplay.textContent = quantity;
        hiddenQuantityInput.value = quantity; // Cập nhật giá trị số lượng
    }
});
//js chia sẻ qua link
 const productLink = encodeURIComponent(window.location.href);//link sản phẩm họ đang truy cập

 // Set Facebook link
 document.getElementById('facebook-link').href = `https://www.facebook.com/sharer/sharer.php?u=${productLink}`;

 // Set Messenger link
 document.getElementById('messenger-link').href = `https://www.messenger.com/share/?link=${productLink}`;
 // Set link copy
 document.getElementById('copy-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor behavior

    // Get the current page URL
    const productLink = window.location.href;

    // Create a temporary input element to hold the URL
    const tempInput = document.createElement('input');
    tempInput.value = productLink; // Set the value to the product link
    document.body.appendChild(tempInput); // Append it to the body

    // Select the input value
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected text to clipboard
    document.execCommand('copy');

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Optional: Alert the user that the link has been copied
    alert('Product link copied to clipboard!');
});
//seccsion liên quan
document.querySelector('.carousel-control.left').addEventListener('click', function() {
    $('#carouselExampleIndicators').carousel('prev');
});
document.querySelector('.carousel-control.right').addEventListener('click', function() {
    $('#carouselExampleIndicators').carousel('next');
});
//di chuyển giỏ hàng
