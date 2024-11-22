
//navbar
let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    let isScrolling;

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            navbar.style.top = '-200px'; // Điều chỉnh chiều cao navbar
        } else {
            // Scrolling up
            navbar.style.top = '0';
        }
        lastScrollTop = scrollTop;

        // Reset the timer when the user scrolls
        clearTimeout(isScrolling);

        // Set a timeout to run after scrolling ends
        isScrolling = setTimeout(function() {
            navbar.style.top = '0'; // Hiện lại navbar khi ngừng cuộn
        }, 1600); // Thời gian chờ 150ms
    });
//đồng hồ
var clock = new Vue({
    el: "#clock",
    data: {
      time: "",
      date: ""
    }
  });
  var week = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
  var timerID = setInterval(updateTime, 1000);
  updateTime();
  function updateTime() {
    var cd = new Date();
    clock.time =
      zeroPadding(cd.getHours(), 2) +
      ":" +
      zeroPadding(cd.getMinutes(), 2) +
      ":" +
      zeroPadding(cd.getSeconds(), 2);
    clock.date =
      zeroPadding(cd.getFullYear(), 4) +
      "-" +
      zeroPadding(cd.getMonth() + 1, 2) +
      "-" +
      zeroPadding(cd.getDate(), 2) +
      " " +
      week[cd.getDay()];
  }
  function zeroPadding(num, digit) {
    var zero = "";
    for (var i = 0; i < digit; i++) {
      zero += "0";
    }
    return (zero + num).slice(-digit);}
//đồng hồ end
    //tìm kiếm 
    const searchIcon = document.querySelector('.search');
    const searchBox = document.querySelector('.searchBox');
    const overlay = document.querySelector('.overlay');
    const closeBtn = document.querySelector('.close');

    searchIcon.addEventListener('click', () => {
        searchBox.classList.add('active');
        overlay.style.display = 'block'; // Hiện overlay
    });

    closeBtn.addEventListener('click', (e) => {
        e.stopPropagation(); // Ngăn chặn sự kiện click từ việc lan truyền
        searchBox.classList.remove('active');
        overlay.style.display = 'none'; // Ẩn overlay
    });

    overlay.addEventListener('click', () => {
        searchBox.classList.remove('active');
        overlay.style.display = 'none'; // Ẩn overlay khi nhấp vào nền
    });
    //tìm kiếm end
/* vuốt chuyển slide */
let touchstartX = 0;
let touchendX = 0;
const carousel = document.getElementById('carouselExampleIndicators');

carousel.addEventListener('touchstart', e => {
    touchstartX = e.changedTouches[0].screenX;
});

carousel.addEventListener('touchend', e => {
    touchendX = e.changedTouches[0].screenX;
    handleGesture();
});

function handleGesture() {
    if (touchendX < touchstartX) {
        var carouselInstance = new bootstrap.Carousel(carousel);
        carouselInstance.next();
    }

    if (touchendX > touchstartX) {
        var carouselInstance = new bootstrap.Carousel(carousel);
        carouselInstance.prev();
    }
}
/* vuốt chuyển slide end */
// hover chuyển ảnh ở product
function changeImage(element, productId) {
    // Lấy đường dẫn hình ảnh từ thuộc tính data-image
    const newImageSrc = element.getAttribute('data-image');
    
    // Tìm hình ảnh chính bằng ID sản phẩm
    const mainImage = document.getElementById(`mainImg${productId}`);
    
    if (mainImage) {
        mainImage.src = newImageSrc; // Cập nhật hình ảnh chính
    } else {
        console.error(`No main image found for product ID: ${productId}`);
    }
}
// hover chuyển ảnh ở product end

// seccsion sale 
//đếm ngược
var target_date = new Date().getTime() + (1000*3600*48); // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;

	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 3600) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}

function pad(n) {
	return (n < 10 ? '0' : '') + n;
}
//đếm ngược end
//product sale
        // flash sale
        let scrollLeft = 0;
        let scrollLeftMax = document.querySelector(".prod-bar").scrollWidth - document.querySelector(".prod-bar").offsetWidth;
        
        // Lay chieu dai cho mot san pham
        let prodWidth = 240; // thiet bi pc lon hon 1024px
        if (window.matchMedia('(max-width: 740px)').matches) {
            prodWidth = 165; // mobile
        } else if (window.matchMedia('(max-width: 1024px)').matches) {
            prodWidth = 215; // tablet
        }
        
        // Lay gia tri cho moi lan scroll
        let eachScroll = prodWidth; // mac dinh se chi scroll qua 1 san pham
        let prodBarWidth = document.querySelector(".prod-bar").offsetWidth; // lay chieu dai thanh prod-bar
        if ((prodBarWidth / prodWidth) >= 2) {
            if ((prodBarWidth % prodWidth) === 0) {
                eachScroll = (Math.floor(prodBarWidth / prodWidth) - 1) * prodWidth;
            } else {
                eachScroll = Math.floor(prodBarWidth / prodWidth) * prodWidth;
            }
        }
        
        // Lay lai cac gia tri can thiet khi nguoi dung thay doi chieu dai thiet bi
        window.addEventListener('resize', function () {
            scrollLeftMax = document.querySelector(".prod-bar").scrollWidth - document.querySelector(".prod-bar").offsetWidth;
        
            // Lay chieu dai cho mot san pham
            prodWidth = 240; // thiet bi pc lon hon 1024px
            if (window.matchMedia('(max-width: 740px)').matches) {
                prodWidth = 165; // mobile
            } else if (window.matchMedia('(max-width: 1024px)').matches) {
                prodWidth = 215; // tablet
            }
        
            // Lay gia tri cho moi lan scroll
            eachScroll = prodWidth; // mac dinh se chi scroll qua 1 san pham
            prodBarWidth = document.querySelector(".prod-bar").offsetWidth; // lay chieu dai thanh prod-bar
            if ((prodBarWidth / prodWidth) >= 2) {
                if ((prodBarWidth % prodWidth) === 0) {
                    eachScroll = (Math.floor(prodBarWidth / prodWidth) - 1) * prodWidth;
                } else {
                    eachScroll = Math.floor(prodBarWidth / prodWidth) * prodWidth;
                }
            }
        });
        
        // Khi nguoi dung nhan se scroll theo gia tri cua eachScroll
        document.querySelector(".flash-sale .to-right").addEventListener("click", function () {
            scrollToNext();
        });
        
        document.querySelector(".flash-sale .to-left").addEventListener("click", function () {
            scrollToPrev();
        });
        
        // Function to scroll right
        function scrollToNext() {
            document.querySelector(".prod-bar").scrollBy({
                top: 0,
                left: eachScroll,
                behavior: 'smooth'
            });
            scrollLeft += eachScroll;
            showHideBtn();
        }
        
        // Function to scroll left
        function scrollToPrev() {
            document.querySelector(".prod-bar").scrollBy({
                top: 0,
                left: -eachScroll,
                behavior: 'smooth'
            });
            scrollLeft -= eachScroll;
            showHideBtn();
        }
        
        // An hien nut next, prev tran thanh flash sale
        function showHideBtn() {
            if (scrollLeft <= 0) {
                document.querySelector('.to-left').style.display = 'none';
                scrollLeft = 0;
            } else {
                document.querySelector('.to-left').style.display = 'block';
            }
            if (scrollLeft >= scrollLeftMax) {
                document.querySelector('.to-right').style.display = 'none';
                scrollLeft = scrollLeftMax;
            } else {
                document.querySelector('.to-right').style.display = 'block';
            }
        }
        
        // Auto scroll every 2 seconds
        setInterval(function() {
            if (scrollLeft < scrollLeftMax) {
                scrollToNext();
            } else {
                scrollLeft = 0; // Reset to start if reached the end
                document.querySelector(".prod-bar").scrollTo({ left: 0, behavior: 'smooth' });
            }
        }, 10000);
//product sale
//secssion sale end
