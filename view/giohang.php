
<main>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/giohang.css">
<link rel="stylesheet" href="./css/reposive.css">
    <div class="row"> 
        <div class="col-9">
            <div class="row ">
       </style>
     <div class="box_title boloc" style="background-color: white;">
     <h1><p>GIỎ HÀNG</p></h1>
     </div>   
     <div class="cacsanpham " style="background-color: white;">
 <br>
 <br>
 <div class="row" style="background-color: white;">
 <table  cellpadding="5" cellspacing="0" width="100%" >
    <tr>
        <th width=150px>Hình</th>
        <th width=200px>Sản Phẩm</th>
        <th width=180px>Đơn giá</th>
        <th>Số lượng</th>
        <th width=150px>Thành tiền</th>
        <th>Thao tác</th>
    </tr>
    <?php
 view_cart();
    ?>
</table>
</div>
</div>
</div>
</div>  
<div class="dathang">
   <a href="index.php?act=dathang"><input type="button" value="Đặt Hàng" name="dathang"></a>
</div>   
<div class="col-3 mg">
 <?php include "menudoc.php" ?>
</div>
</div>
</div>
</main>
<br>
<br>
<div class="fix"></div>
<style>
    .fix{
        height: 250px;
    }
</style>
<br>

    



