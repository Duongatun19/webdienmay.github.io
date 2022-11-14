
	<?php
	session_start();
 include('../db/connect.php'); 
?>
<?php
	
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['matkhau']);
	
		if($taikhoan=='' || $matkhau ==''){
		
			$_SESSION['thongbao']= "Vui lòng Nhập Đầy Đủ Thông Tin";
			$_SESSION['kieuthongbao']="error";
			$_SESSION['time']="1500";
			header("location:../index.php");
		
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM user WHERE user='$taikhoan' AND pass='$matkhau'  ");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0 AND $row_dangnhap['admin']==1){
			
				$_SESSION['dangnhap'] = $row_dangnhap['name'];
				$_SESSION['admin_id'] = $row_dangnhap['id'];
				
				header("location:../index.php");
				
			}else{
				$_SESSION['thongbao']= "Bạn Đăng nhập không Phải quyền admin";
				$_SESSION['kieuthongbao']="error";
				$_SESSION['time']="1500";
				header("location:../index.php");
			}
		}
	}else{}	
	
?>
