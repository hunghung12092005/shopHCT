//bộ lọc 
// Khởi tạo trạng thái hiển thị cho các tùy chọn
document.addEventListener('DOMContentLoaded', function() {
    const colorOptions = document.getElementById('color-options');
    colorOptions.style.display = 'flex'; // Hiện thị mặc định

    const sizeOptions = document.getElementById('size-options');
    sizeOptions.style.display = 'flex'; // Hiện thị mặc định
    const genderOptions = document.getElementById('gender-options');
    genderOptions.style.display = 'flex'; // Hiện thị mặc định
});
//nhấn icon thì thu vào
document.getElementById('toggle-colors').addEventListener('click', function() {
    const colorOptions = document.getElementById('color-options');
    colorOptions.style.display = colorOptions.style.display === 'none' ? 'flex' : 'none';
    this.classList.toggle('collapsed');
});

document.getElementById('toggle-sizes').addEventListener('click', function() {
    const sizeOptions = document.getElementById('size-options');
    sizeOptions.style.display = sizeOptions.style.display === 'none' ? 'flex' : 'none';
    this.classList.toggle('collapsed');
});
document.getElementById('toggle-gender').addEventListener('click', function() {
    const genderOptions = document.getElementById('gender-options');
    genderOptions.style.display = genderOptions.style.display === 'none' ? 'flex' : 'none';
    this.classList.toggle('collapsed');
});
//nhấn icon thì thu vào end
// click vào thì active mặc định đang ăn của boostrap
document.addEventListener('DOMContentLoaded', function() {
        const sizeButtons = document.querySelectorAll('.size-button');
        sizeButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Xóa lớp active khỏi tất cả các nút
                sizeButtons.forEach(btn => btn.classList.remove('active'));
                // Thêm lớp active vào nút được nhấn
                this.classList.add('active');
            });
        });
    });
    // click vào thì active mặc định đang ăn của boostrap end
    //kéo giá hiển thị giá trị
    const rangeInput = document.getElementById('customRange3');
    const currentValue = document.getElementById('currentValue');
    rangeInput.addEventListener('input', function() {
        // Tính giá trị tương ứng với vị trí của thanh trượt
        const value = this.value * 50000; // Mỗi bước là 50.000
        currentValue.textContent = value.toLocaleString() + 'đ';
    });
    // Khởi động giá trị ban đầu
    const initialValue = rangeInput.value * 50000; // Khởi động với giá trị ban đầu
    currentValue.textContent = initialValue.toLocaleString() + 'đ';
    //kéo giá hiển thị giá end
//bộ lọc end

