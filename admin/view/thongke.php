<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dmsanpham.css">
    <title>Document</title>
</head>

<body>
  <div class="top">Thống Kê</div>
  <div class="conttent">
      <div class="left">
      <div class="top_col3">
                Bảng thống kê
            </div>
        <div class="khoangcach thongke">
      <table cellpadding="5" cellspacing="0" width="90%">
        <tr>
            <th width=70px>STT</th>
            <th width=500px>Tên danh mục</th>
            <th width=100px>Số lượng</th>
        </tr>
     
        <?php
        foreach($thongke as $tk){
        extract($tk);
        echo'   
        <tr>
        <td>'.$madm.'</td>
        <td>'.$tendm.'</td>
        <td>'.$countsp.'</td>
        </tr>';
        }
        ?> 
      </table>             
</div>       
</div>
<div class="right" style="background-color: white;" >
<div class="top_col9">Biểu đồ thống kê</div>
<div class="bangtk">
<div id="piechart"></div>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
<script src="./js/bieudo.min.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
  $tongdm=count($thongke);
  $i=1;
  foreach($thongke as $tk){
    extract($tk);
    if($i==$tongdm) $bientrong="";else $bientrong=",";
    echo "['".$tk['tendm']."',".$tk['countsp']."]".$bientrong;
  }
  ?>

  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê theo danh mục', 'width':1000, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
</div>
</div>
</div>
</body>
</html>