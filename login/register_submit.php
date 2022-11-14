<?php
session_start();
include '../model/scrip.php';
include '../db/sualoi.php';
if(isset($_POST['dang_ki']) && $_POST['username'] != '' && $_POST['password'] !='' && $_POST['repassword'] != '' && $_POST['tel'] != ''&& $_POST['address'] != ''){
//thực hiện xử lí khi người dùng ấn nút submit và điền đầy đủ thông tin
$username =$_POST['username'];
$password =$_POST['password'];
$tel=$_POST['tel'];
$address=$_POST['address'];
$repassword =$_POST['repassword'];
$name=$_POST['name'];
// $_SESSION['name']=$name;
// $_SESSION['tel']=$tel;
// $_SESSION['adress']=$adress;
$email=0;
if( $password != $repassword){//kiểm tra mật khẩu có giống viết lại mật khẩu không
  $_SESSION['thongbao']="Passwork Nhập lại k chính xác";
  $_SESSION['kieuthongbao']="error";
  $_SESSION['time']="2500";
  header("location:../index.php");

  
}
else{
$sql = "SELECT * FROM user WHERE user ='$username'";
$password =md5($password);//mã hoá password
$old =mysqli_query($conn,$sql);}
if(mysqli_num_rows($old)>0){
  $_SESSION['thongbao']="Đã có tài khoản";
  $_SESSION['kieuthongbao']="error";
  $_SESSION['time']="2500";
  header("location:../index.php");
}
else{

$sql =" INSERT INTO user ( user,pass,email,name,tel,address) VALUES ('$username','$password','$email','$name','$tel','$address')";
mysqli_query($conn,$sql);
$_SESSION['thongbao']="Đăng kí thành công";
$_SESSION['kieuthongbao']="success";
$_SESSION['time']="2000";
header("location:../index.php");
}
 }
  else
{
//     $_SESSION['thongbao']=" vui lòng nhập đầy đủ thông tin";
//     $mess2 =" Đã Đăng Kí Thành Công";
// echo "<script type='text/javascript'>alert('$mess2');</script>";
//  header("refresh:0.0000000000000001");
 
}
?>


