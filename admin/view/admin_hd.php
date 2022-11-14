
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Admin</title>
	<link href="../css/admin1.css" rel="stylesheet" type="text/css" media="all" />
</head>
<?php

?>
<body>
    <div class="admin">
		<div class="topdep">
	<div class="bieutuong">ADMIN</div><p>Xin chào : <?php echo $_SESSION['dangnhap'] ?> <a href="index.php?act=thoat">Đăng xuất</a></p></div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav" >
	    <ul class="navbar-nav" >
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php?act=donhang">Đơn hàng <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?act=baiviet">Bài Viết </a>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="index.php?act=dmbv">Danh mục Bài Viết</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?act=sanpham">Sản phẩm</a>
	      </li>
          <li class="nav-item">
	        <a class="nav-link" href="index.php?act=dmsp">Danh Mục Sản phẩm</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="index.php?act=khachhang">Khách hàng</a>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" href="index.php?act=thongke">Thống kê</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
    </div>