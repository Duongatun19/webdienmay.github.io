<?php
if(isset($bill)&&(is_array($bill))){
extract($bill);
}
$bill['total']=$total;
$conver_tongdon=$total?number_format($total).'đ': '000đ';
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<main>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/reposive.css">
    <div class="row">
 
        <div class="col-9">
        <div class="row ">
       </style>
     <div class="box_title boloc">
    <h3>Thông Tin Đơn Hàng</h3>
 <style>
     .zxc{
         position: absolute;
      color: green;
        bottom: 0px;
        width: 100%;
         font-weight: bold; 
         text-align: center;
     }
 </style>
     </div>
     <div class="ndbl">
        
         <label for="">Mã đơn hàng: <span style="color: green;">DH-<?=$bill['id']?></span></label><br>
         <label for="">Ngày đặt:<span style="color: green;"> <?=$bill['ngaydathang']?></span></label><br>
         <label  for="">Tổng đơn hàng: <span style="color: red;"><?=$conver_tongdon?></span></label><br>

         <div class="box_title boloc"><h3>Thông tin khách hàng</h3></div>

         <label for="">Khách Hàng:<span style="color: green;"> <?=$bill['bill_name']?></span></label><br>
         <label for="">Số Điện Thoại:<span style="color: green;"> <?=$bill['bill_tel']?></span></label><br>
         <label for="">Email:<span style="color: green;"> <?=$bill['bill_email']?></span></label><br>
         <label for="">Địa chỉ:<span style="color: green;"> <?=$bill['bill_address']?></span></label><br>
         <br>
         <br>

      
      
   
     </div>
     </div>


     <style>
         .ndbl label{
             margin-left: 60px;
             line-height: 30px;
             font-weight: bold;
           
         }
         .boloc h3{
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         color:black;
         position: relative;
            }
        .boloc h3::after{
            content: "";
            position: absolute;
            bottom: -15px;
            left: 45%;
            width: 95px;
            height: 6px;
            border-radius: 30px;
           background-color: red;

        }
     </style>

     <div class="row">
    
     <div class="cacsanpham ">
  
     <div class="box_title boloc">
  
  <h3>Chi tiết đơn hàng</h3>  

 </div>
 <div class="giohang_bill">
     <table cellpadding="5" cellspacing="0" width="100%" border="1px">
         <tr>
             <th>STT</th>
             <th>Hình Ảnh</th>
             <th>Sản Phẩm</th>
             <th>Đơn giá</th>
             <th>Số lượng</th>
             <th>Thành tiền</th>
         </tr>
         <?php
         bill_chi_tiet($billct);
         ?>
     </table>
 </div>
 <br>
 <br>
 <?php
 if(isset($_SESSION['user'])){
    ?>

     <div class="zxc">Cảm ơn <?php echo $_SESSION['name']?> đã đặt hàng !
    <?php
}else{
?> 
            <div class="zxc">Cảm ơn bạn đã đặt hàng !</div>
<?php } ?>
 <div class="row">   
 </div>
     </div>
     </div>

         
        </div>
         
     
            <div class="col-3 mg">
 <?php include "menudoc.php" ?>

</div>
    </div>
</div>

</main>
