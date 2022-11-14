
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/reposive.css">
    <title>Điện máy mới</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <div id="header"></div>
<style>
        .dautrang{
            z-index: 1000000000000000;
            position:fixed;
            bottom: 20px;
            right: 30px;
            border-radius: 110px;
           
        }
        .dautrang::after{
          
      
    border-radius: 50%;
  
        }
        .dautrang img{
            width: 50px;
            height: 50px;
        }
    </style>
<div class="dautrang" >
    <a href="#header"><img class="logo" src="./images/up-arrow.png"></a>
    </div>


<div class="codinh">
    <style>
        .codinh{
    position: sticky !important;
    z-index: 1000009999999;
    top:0px;
           
        }
    </style>
    <div class="nav_bar">
        <div class="sign">
            <table>
                <?php
             
if(isset($_SESSION['user'])){
    ?>
       <tr>
          <td style="border-right:0.1px solid #999999 ">
          Xin chào :  <?php echo $_SESSION['name']?>&nbsp;&nbsp;&nbsp;
          </td>
          <td>
          <a  class = "anh" onclick="return confirm('Bạn có muốn đăng xuất ko ?')" href="./login/loguot.php" ><img src="./images/logout.png" alt=""></a>
          </td>
      </tr>

    <?php

}else{
?> 
      <button id="btnDK"><a href="#" class="ladi-headline " onclick="dang_ki()">Đăng Kí</a></button>
        <button id="btnDN"><a href="#" class="ladi-headline " onclick="dang_nhap()">Đăng Nhập</a></button>  
        <?php } ?>
        
            </table>    
        </div>
        <hr size="0.01" color="#999999">
    
      
<div class="menu" >
    <div class="logodm">
    <a  href="index.php" ><img class="logo" src="./images/logodm.jpg" alt="" ></a>  
    </div>
  <!-- phần menu    -->
  <!-- thay class -->
<script>

function toggleClass() {
    var element = document.getElementById('menuhay');
  /* check class*/
   if(element.classList.contains('hiden')) {
    element.classList.toggle("hienthi");
    element.classList.remove('hiden');
  } else{
    element.classList.toggle("hiden");
    element.classList.remove('hienthi');
}
}
</script>
<!-- ------ -->
<div class="khoangcach" onclick="toggleClass()">
    <div class="category-menu">
    <i class="bi bi-list-ul"></i>
    </div>
<link rel="stylesheet" href="./css/menu.css">
<div  id="menuhay" class="hiden">
<ul id="mainmenu" >
<li><a href="index.php?act=home">Trang chủ</a>
  
</li>
    <li><a href="index.php?act=tatcasp">Sản Phẩm</a>
    <ul class="sub-mainmenu">

         
         <?php 
     
         foreach($danhmuc as $dm){
             extract($dm);
             $linkdm="index.php?act=dmsanpham&iddm=".$id;
     echo '      <li><a href="'.$linkdm.'">'.$namedm.'</a></li>';
         }
           ?>  
          
    </ul>
</li>
    <li><a href="index.php?act=allbaiviet">Tin Tức</a>
        <ul class="sub-mainmenu">
        <?php 
        foreach($danhmucbaiviet as $dmbv){
            extract($dmbv);
            $linkdmbv="index.php?act=danhmucbv&iddmbv=".$id;
        echo '      <li><a href="'.$linkdmbv.'">'.$dmbaiviet.'</a></li>';
        }
        ?>  
        </ul>
    </li>
    <li><a href="#">Tư vấn</a></li>
    <li><a href="#">Hàng Nhật</a></li>
    <li><a href="#">Hàng Đức</a>
    <ul class="sub-mainmenu"> 
            <li><a href="">menu2.1</a></li>
            <li><a href="">menu2.2</a>
                <ul class="sub-mainmenu">
                    <li><a href="">menu2.1.1</a></li>
                    <li><a href="">menu2.1.2</a></li>
                    <li><a href="">menu2.1.3</a></li>
                    <li><a href="">menu2.1.4</a></li>
                    <li><a href="">menu2.1.5</a></li>
                  
                </ul>
            </li>
            <li><a href="">menu2.3</a></li>
            <li><a href="">menu2.4</a></li>
            <li><a href="">menu2.5</a></li>
        </ul>
   
    </a>
</li>
    <li><a href="index.php?act=profile">Liên Hệ</a>

</li>
</ul>
</div>
</div>
<div class="giohang">
<a href="index.php?act=giohang"><img  src="./images/1.jpg" ></a>
<?php
if(isset($_SESSION['num'])){
    $tong=$_SESSION['num'];
}else{
    $tong=0;
}
?>


<?php
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
        $num=$_POST['num']; 
       
        $tong+=$num;
        $_SESSION['num']=$tong;
     
        echo '<a class="cart_count">'.$tong.'</a>';
    ?>
   

    <?php

}else{
?> 
 <a class="cart_count" style="display:none">
    </a>
    
        <?php } ?>

</div>
<style>

</style>
<form action="index.php?act=dmsanpham" method="post">
<div class="tk">
<input style="height:35px; color:white;"type="text" class="search_txt" placeholder="Tìm kiếm" name="kyw">
<button class="timkiem" type="submit" type="submit"> </button>
</div>
</form>
</div>
<!-- hết menu -->




  
    <div  class="modal form_modal form_modal_dang_nhap" id="form_dang_nhap"  style="display:none">
    <link rel="stylesheet" href="./css/modal.css">
    <a class="close" onclick="closeModal()" style="color: white; float:right">X</a>
    <div class="modal-content">
        
    <h3>Đăng nhập</h3>



        <div class="modal-header">      
            <form action="./login/login_submit.php" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Nhập tài khoản" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Nhập mật khẩu" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" id="btnSB">Login</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        
        </table>
    </form>
        </div>
        </div>
    </div>

    <div  class="modal_dang_ki" id="form_dang_ki" >
 <span class="close_dk" onclick="closeModal()" style="color: white; float:right">X</span>
    <div class="modal-content">
    <h3> Đăng Kí</h3>

        <div class="header_dk">  
            <form action="./login/register_submit.php" method="post">
            <table>
                <tr>
                <td>Họ Tên</td>
                    <td>
                       <input type="text" name="name" placeholder="Nhập Họ & Tên"  required>
                    </td>
                </tr>
                <tr>
                   <td>Số Điện Thoại</td>
                    <td>
                        <input type="text" name ="tel" placeholder="nhập sđt :"  required>
                    </td>
                </tr>
                <tr>
                   <td>Địa Chỉ</td>
                    <td>
                        <input type="text" name ="address" placeholder="Nhập Địa Chỉ:"  required>
                    </td>
                </tr>
                <tr>
                    <td>Tài Khoản</td>
                    <td>
                        <input type="text" placeholder="Nhập tài tài khoản" name="username"  required>
                    </td>
                </tr>
                <tr>
                   <td>Mật Khẩu</td>
                    <td>
                        <input type="password" name ="password" placeholder="nhập mật khẩu :"  required>
                    </td>
                </tr>
                <tr>
                    <td>Nhập lại mk</td>
                    <td>       
                        <input type="password" name="repassword" placeholder="Nhập lại mật Khẩu"  required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <button type="submit" name="dang_ki">Đăng Kí</button>
                    <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
            </form>

            </div>
    </div>
            </div>
           


 <div class="loguot">
     
 
<!-- --------------------------------------------------------------- -->

<script>
    // lấy phần Modal
    function dang_nhap(){
    var modal = document.getElementById('form_dang_nhap');
    // Lấy phần button mở Modal
    var btn = document.getElementById("btnDN");
    //khi modal dăng nhập mở thì đóng modal đăng kí
    document.getElementById('form_dang_ki').style.display ="none";
    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close")[0];
    // Khi button được click thi mở Modal
    btn.onclick = function dang_nhap() {
        modal.style.display = "block";
    }
    // Khi span được click thì đóng Modal
    span.onclick = function dang_nhap() {
        modal.style.display = "none";
    }
    var modal = document.getElementById('form_dang_nhap');
    Window.onclick = function dang_nhap() {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    // Khi click ngoài Modal thì đóng Modal
    }
</script>
<!-- ------------------------------------------------------------------------- -->
 
<!-- __________________________________________________________________________________ -->

           
 <script>
    // lấy phần Modal
    function dang_ki(){
    var modal = document.getElementById('form_dang_ki');
  
    // Lấy phần button mở Modal
    var btn = document.getElementById("btnDK");
    //khi modal đăng kí bật sẽ đóng modal đăng nhập
    document.getElementById('form_dang_nhap').style.display ="none";
  
    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close_dk")[0];
  
    // Khi button được click thi mở Modal
    btn.onclick = function dang_ki() {
        modal.style.display = "block";
    }
  
    // Khi span được click thì đóng Modal
    span.onclick = function close_Modal() {
        modal.style.display = "none";
    }
    var modal = document.getElementById('form_dang_ki');
    window.onclick = function dang_ki() {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    // Khi click ngoài Modal thì đóng Modal
    }
</script>
</div> 
</div>

</div>

<?php
include("./view/sidebar.php");
?>
<script src="./js/thongbao.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./js/thongbao1.min.js"></script>
<!-- <script src=" https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<?php

if(isset($_SESSION['thongbao'])&& $_SESSION['thongbao'] != '')
{
?>
<script>

    const Toast = Swal.mixin({
    toast: true,
    position: 'top-center',
    showConfirmButton: false,
     timer: '<?php echo $_SESSION['time']; ?>',
     timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })

    Toast.fire({
     icon: '<?php echo $_SESSION['kieuthongbao']; ?>',
    title: '<?php echo $_SESSION['thongbao'];?>'
    })
</script>
<?php
    unset ($_SESSION['thongbao']);
    }
?>
<!-- ---------------------------------------------------------------------------------------- -->
  
    

  




