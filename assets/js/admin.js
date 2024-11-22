let toggle = document.querySelector(".toggle-Admin");
let navigation = document.querySelector(".navigation-Admin");
let main = document.querySelector(".main-Admin");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};

let list = document.querySelectorAll(".navigation-Admin li");

function activeLink() {
    list.forEach((item) => item.classList.remove("hovered"));
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Chart.js code
var ctx = document.getElementById("myChart").getContext("2d");
var earning = document.getElementById("earning").getContext("2d");

// Original data
const dataValues = [1100, 1500, 2200];

// Calculate total
const total = dataValues.reduce((acc, value) => acc + value, 0);

// Convert data to percentages
const percentageData = dataValues.map(value => (value / total) * 100);

var myChart = new Chart(ctx, {
    type: "polarArea",
    data: {
        labels: ["Nam", "Nữ", "Đồ của bé"],
        datasets: [
            {
                label: "Traffic Source",
                data: [1100, 1500, 2200], // Dữ liệu ban đầu
                backgroundColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                ],
            },
        ],
    },
    options: {
        responsive: true,
        scales: {
            r: {
                ticks: {
                    display: false // Ẩn nhãn trục
                }
            }
        },
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        // Hiển thị tỷ lệ phần trăm trong tooltip
                        const total = tooltipItem.dataset.data.reduce((acc, value) => acc + value, 0);
                        const percentage = (tooltipItem.raw / total * 100).toFixed(2);
                        return `${tooltipItem.label}: ${percentage}%`;
                    }
                }
            }
        }
    },
});

var myEarningChart = new Chart(earning, {
    type: "bar",
    data: {
        labels: [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December",
        ],
        datasets: [
            {
                label: "Earning",
                data: [
                    4500, 4106, 7005, 6754, 5154, 4554,
                    7815, 3152, 2204, 4457, 8740, 11000,
                ],
                backgroundColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                    "rgba(255, 159, 64, 1)",
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                    "rgba(255, 159, 64, 1)",
                ],
            },
        ],
    },
    options: {
        responsive: true,
    },
});