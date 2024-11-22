<!DOCTYPE html>
<html>
<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php 
  $tongdm = count($StatisticalChart);
  $i = 1;
  foreach($StatisticalChart as $thongke){
    extract($thongke); 
    if($i==$tongdm) $dauphay = ""; else $dauphay = ",";
    echo "['".$thongke['tenloai']."',".$thongke['soluong']."]$dauphay";
    $i+=1;
  } 
  ?>
 
]);

// Set Options
const options = {
  title:'Biểu đồ thống kê số lượng sản phẩm theo loại',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

</body>
</html>



