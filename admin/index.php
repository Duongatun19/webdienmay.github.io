<?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('Location:./view/login_ad.php');
	}


	include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
	include "./view/admin_hd.php";
	if(isset($_GET['act'])){
		$act=$_GET['act'];{
			switch($act){
				// case '1':
				// header('location:./view/donhang.php');
				// break;
						case 'baiviet':
							include('./view/baiviet.php');
						break;
// =========PHẦN DANH MỤC BÀI VIÊT=========	
//thêm danh mục bài viết				
						case 'dmbv':
							if(isset($_POST['themdm'])&&($_POST['themdm'])){
								$dmbv=$_POST['dmbv'];
								insert_danhmuc_baiviet($dmbv);
								$thongbao="Thêm thành công !";
							}
								include('./view/dmbaiviet.php');
						break;
// xóa danh mục bài viết
						case 'xoadmbv':
							if(isset($_GET['id'])&&($_GET['id']>0)){
							delete_danhmuc_baiviet($_GET['id']);
							}
							$listdanhmucbv=loadall_danhmuc_baiviet();
							include('./view/dmbaiviet.php');
						break;
// sửa danh mucj bài viết	
						case 'suadmbv':
							if(isset($_GET['id'])&&($_GET['id']>0)){
								$dmbv=finddanhmucbvbyID($_GET['id']);
								}
								$listdanhmucbv=loadall_danhmuc_baiviet();
							include "./view/suadmbv.php";
						break	;
// cập nhật danh mục bài viết	
						case 'capnhat_dmbv':
							if(isset($_POST['capnhat_dmbv'])&&($_POST['capnhat_dmbv'])){
								$danhmucbaiviet=$_POST['dmbv'];	
								$id=$_POST['id'];
								update_danhmuc_baiviet($id,$danhmucbaiviet);
								$thongbao="Cập nhật thành công";
								}
								$listdanhmucbv=loadall_danhmuc_baiviet();
							include "./view/dmbaiviet.php";
						break;			
// =====HẾT pHẦN DANH MỤC BÀI VIẾT======

// PHẦN BÀI VIẾT
//thêm bài viết
						case 'thembv':
								if(isset($_POST['thembv'])&&($_POST['thembv'])){
								$iddmbv=$_POST['iddmbv'];
								$tenbv=$_POST['tenbv'];						
								$mota=$_POST['mota'];
								$hinh=$_FILES['hinh']['name'];
								$target_dir = "../uploads/";
								$target_file = $target_dir.basename($_FILES["hinh"]["name"]);
								if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {					   
								}else{								  
								}
								insert_baiviet($tenbv,$hinh,$mota,$iddmbv);
								$thongbao="Thêm thành công";
								}
								$listdanhmucbv=loadall_danhmuc_baiviet();
								include './view/baiviet.php';
						break;
 //xóa bài viết
						case 'xoabv':
							if(isset($_GET['id'])&&($_GET['id']>0)){
								delete_baiviet($_GET['id']);
							}
							$listbaiviet=loadall_baiviet();
							include "./view/baiviet.php";
						break;
 // sửa bài viết
 						case'suabv':
							if(isset($_GET['id'])&&($_GET['id']>0)){
								$bv=findbaivietbyID($_GET['id']);
								}
								$loadallbv=loadall_baiviet();
							
							include "./view/suabaiviet.php";
						break;
// cập nhật bài viết	
						case 'capnhat_baiviet':
							if(isset($_POST['capnhatbv'])&&($_POST['capnhatbv'])){
											$id=$_POST['id'];
											$iddmbv=$_POST['iddmbv'];
											$namebv=$_POST['tenbv'];
											$mota=$_POST['mota'];
											$hinh=$_FILES['hinh']['name'];
											$target_dir = "../uploads/";
											$target_file = $target_dir.basename($_FILES["hinh"]["name"]);
											if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
											   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
											} else {
											  //  echo "Sorry, there was an error uploading your file.";
											}
											update_baiviet($id,$namebv,$hinh,$mota,$iddmbv);
											$thongbao="Cập nhật thành công";	
										}						

							include "./view/baiviet.php";
						break;	
// =========================HẾT PHẦN BÀI VIẾT==================================			
// =========================PHẦN XỬ LÝ SẢN PHẨM ================================		
// phần trang sản phẩm (thêm sản phẩm)	---------------------------------------					
						case 'sanpham':
	 						if(isset($_POST['themsp'])&&($_POST['themsp'])){
							$iddm=$_POST['iddm'];
							$tensp=$_POST['tensp'];
							$giasp=$_POST['giasp'];
							$giakm=$_POST['giakm'];
							$mota=$_POST['mota']; 
							$noibat=$_POST['noibat'];
							$hinh=$_FILES['hinh']['name'];
							$target_dir = "../uploads/";
							$target_file = $target_dir.basename($_FILES["hinh"]["name"]);

							if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
	  						 // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
							} else {
	 						 $thongbao="Sorry, there was an error uploading your file.";
							}
							insert_sanpham($tensp,$giasp,$giakm,$hinh,$mota,$noibat,$iddm);
							$thongbao="Thêm thành công";
	                        }
							else{
							$thongbao1="Bạn cần chọn checkbox";
							}
							$listdanhmuc=loadall_danhmuc();
							include('./view/xulysanpham.php');
						break;
//phần sửa sản phẩm
						case 'suasp':
							if(isset($_GET['id'])&&($_GET['id']>0)){
							$sp=findsanphambyID($_GET['id']);
							}
							$loadallsp=loadall_sanpham();
							include "./view/suasanpham.php";
						break; 
//xoá sản phẩm theo id	
						case 'xoasp':
							if(isset($_GET['id'])&&($_GET['id']>0)){
							delete_sanpham($_GET['id']);
							}
							$listsanpham=loadall_sanpham();
							include('./view/xulysanpham.php');
						break;
	// ---------------------------------
// cập nhật sản phẩm
						case 'update_sanpham':
							if(isset($_POST['updatesp'])&&($_POST['updatesp'])){
								$id=$_POST['id'];
								$iddm=$_POST['iddm'];
								$name=$_POST['tensp'];
								$mota=$_POST['mota'];
								$price=$_POST['giasp'];
								$noibat=$_POST['noibat'];
								$giakm=$_POST['giakm'];
								$hinh=$_FILES['hinh']['name'];
								$target_dir = "../uploads/";
								$target_file = $target_dir.basename($_FILES["hinh"]["name"]);
								if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
								   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
								} else {
								  //  echo "Sorry, there was an error uploading your file.";
								}
								update_sanphamAdmin($id,$name,$price,$giakm,$hinh,$mota,$noibat,$iddm);
								$thongbao="Cập nhật thành công";	
							}						
						
							include('./view/xulysanpham.php');
						break;
//HẾT PHẦN XỬ LÍ SẢN PHẨM==================================
// phần trang danh mục sản phẩm (thêm danh mục sản phẩm)---------------------------------------	
						case 'dmsp':
								if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
								$tenloai=$_POST['tenloai'];
								insert_danhmuc($tenloai);
								$thongbao="Thêm thành công !";
								}
								include('./view/dmsanpham.php');
						break;
// xoá danh mục sản phẩm
						case 'xoadm':
								if(isset($_GET['id'])&&($_GET['id']>0)){
								delete_danhmuc($_GET['id']);
								}
								$listdanhmuc=loadall_danhmuc();
								include('./view/dmsanpham.php');
						break;
//sửa danh mục saen phẩm
						case 'suadm':
							if(isset($_GET['id'])&&($_GET['id']>0)){
							$dm=finddanhmucbyID($_GET['id']);
							}
							$listdanhmuc=loadall_danhmuc();
							include "./view/suadm.php";
						break;
// cập nhật danh mục sản phẩm				  
						case 'updatedm':
							if(isset($_POST['capnhat_dm'])&&($_POST['capnhat_dm'])){
							$tenloai=$_POST['tenloai'];	
							$id=$_POST['id'];
							update_danhmuc($id,$tenloai);
							$thongbao="Cập nhật thành công";
							}
							$listdanhmuc=loadall_danhmuc();
							include "./view/dmsanpham.php";
						break;
// HẾT PHẦN DANH MỤC SẢN PHẨM=========================================================================================	
//PHẦN TÌMT HEO DANH MỤC (CHƯA ĐC )				
						case 'listsp':
							if(isset($_POST['listok'])&&($_POST['listok'])){
							$kyw=$_POST['kyw'];
							$iddm=$_POST['iddm'];
							}else{
							$kyw='';
							$iddm=0;
							}
							$listdanhmuc=loadall_danhmuc();
							$listsanpham=loadall_sanpham($kyw,$iddm);
							include "./view/xulysanpham.php";
// =============================================		=====================
						case 'khachhang':
								include('./view/khachhang.php');
						break;
						case 'thongke':
							$thongke=thongke();
							include "./view/thongke.php";
						break;
//ĐĂNG XUẤT						
						case 'thoat':
								include "./view/loguot.php";
						break;

				
					}

		}
	}


?>
<script src="./js/alert.js"></script>


