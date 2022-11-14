
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
     <h2><p>Thông tin giỏ hàng</p></h2>
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
    </tr>
    <?php
 
     view_dat_hang();
    ?>
     
 
</table>
</div>
</div>
<div class="tt_donhang">
    <div class="title_donhang"><h2 style="color:green"><p>Thông Tin Khách Hàng </p><h2></div>
  <form action="index.php?act=taodon" method="post">
      <?php if(isset($_SESSION['user'])){
       
          $name =$_SESSION['name'];
          $address =$_SESSION['address'];
          $tel=$_SESSION['tel'];
      }else{
        $name ="";
        $address ="";
        $email ="";
        $tel="";
      }
      ?>
    <div class="nhapdulieu">
     
        <label for="">Người Đặt Hàng</label>
        <input type="text" placeholder="Nhập Đầy Họ Tên" name="name" value="<?=$name?>" required>
        <label for="">Điện Thoại</label>
        <input type="text" placeholder="Nhập SĐT" name="tel" value="<?=$tel?>" required>
        <label for="">Email</label>
        <input type="text" placeholder="Nhập Email" name="email" value="">
        <label for="">Địa Chỉ</label>
        <input type="text" placeholder="Nhập Địa Chỉ" name="address" value="<?=$address?>" required> 
       <div class="tao_don"><input type="submit" name="taobill" value="Tạo đơn hàng"></div> 
    </div>
    </form>
    <style>
        .tao_don{
            position: relative;
            width: 100%;
            background-color: red;
            margin-top: 20px;
            
          
           
        }
        .tao_don input{
            position:absolute;
            height: 40px;
            right:43%;
            padding: 7px;
            font-size: 16px;
            font-weight: bold;
            background:linear-gradient(to top right, var(--gray-dark),var(--gray),var(--secondary));
            color :white;
            color:turquoise;
            transition: 0.2s;
        }
        .tao_don input:hover{
        transform: scale(1.1);
        box-shadow: 0px 0px 7px red;
        }
    </style>
</div>
</div>
</div>  
 
<div class="col-3 mg ctop ">
 <?php include "menudoc.php" ?>
</div>
</div>
</div>
</main>
<br>
<br>
<br>

    



