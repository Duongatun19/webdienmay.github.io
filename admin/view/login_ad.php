<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link href="../css/admin.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
 <div>
  
    
	<div class="col-md-6">
    <h2 align="center" style="color:#e5e2e3;">Đăng nhập Admin</h2>
	<div class="form-group">
		<form action="loginsb_ad.php" method="POST">
		<label style="color:#e5e2e3;">Tài khoản</label><br>

		<input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
		<label style="color:#e5e2e3;">Mật khẩu</label>
		<input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>

        <input type="submit" name="dangnhap" class="submit" value="Đăng nhập Admin">
    

		</form>
	</div>
	</div> 
 </div>

</body>
</html>
<!-- <script src="./js/thongb.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./js/thongb1.min.js"></script> -->
<script src=" https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  
    }
?>
