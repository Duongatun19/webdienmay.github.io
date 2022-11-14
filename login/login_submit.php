<?php
session_start();
unset($_SESSION['num']);
include '../model/scrip.php';
include '../db/sualoi.php';
if(isset($_POST['submit']) && $_POST['username'] !='' && $_POST['password'] != ''){
    $username =$_POST['username'];
    $password =$_POST['password'];
    $password = md5($password);
    // $name = $_POST['name'];
   $sql = "SELECT * FROM user WHERE user ='$username'  AND pass ='$password'";
   $user = mysqli_query($conn, $sql);
   $row_dangnhap = mysqli_fetch_array($user);

   if(mysqli_num_rows($user)>0){
       $_SESSION["user"] = $username;
       $_SESSION["id"] = $row_dangnhap['id'];
       $_SESSION['name'] =  $row_dangnhap['name'];
       $_SESSION['tel'] = $row_dangnhap['tel'];
       $_SESSION['address']=$row_dangnhap['address']; 
       $_SESSION['thongbao']= "Đăng nhập thành công";
        $_SESSION['kieuthongbao']="success";
        $_SESSION['time']="1500";
        unset($_SESSION['mycart']);
      header("location:../index.php");
   }
   
   else
   {
     
    //   $message="Sai tài khoản hoặc mật khẩu";
    //   echo "<script type='text/javascript'>alert('$message');</script>";
    //   header("refresh:0.1");
   $_SESSION['thongbao']="Sai tên đăng nhập hoặc mật khẩu";
   $_SESSION['kieuthongbao']="error";
   $_SESSION['time']="2000";
   header('location:../index.php');
 
  
   
    }
   }
else{
    $_SESSION['thongbao']="Vui lòng nhập đủ thông tin";
   $_SESSION['kieuthongbao']="waring";
    header('location:../index.php');
}


?>
