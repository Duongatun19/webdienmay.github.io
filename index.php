<?php

session_start();

include "./model/pdo.php";
include "./model/uploadsp.php";
include "./model/dm_sanpham.php";
include "./model/global.php";
include "./model/form_giohang.php";
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
//kiểm tra nếu không tồn tại  biến $_SESSION['mycart'] sẽ khởi tạo mảng $_SESSION['mycart']=[]; rỗng; và truyền tham số vào line 60 index.php
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
$spnew=loadall_sanpham_content();
$danhmuc=load_all_danhmuc_home();
$danhmucbaiviet=load_all_danhmuc_baiviet();
$spnoibat=load_all_sanpham_noibat();
$baivietall=loadbaiviet();

  

if( isset($_SESSION["user"])){
 
    
}
include "./view/header.php";

if(isset($_GET['act'])){
    $act=$_GET['act'];{
        switch($act){
            // case 'dangki':
            //     include('./taikhoan/dangki.php');
            //     break;
//phần menu ngang
                    case 'tatcasp':
                        include "./view/all_sp.php";
                    break;  
                    case 'allbaiviet':
                        include "./view/all_baiviet.php";
                    break;
                    case 'danhmucbv':
                        if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                            $kyw =$_POST['kyw'];
                        }else{
                            $kyw="";
                        }
                        if(isset($_GET['iddmbv'])&&($_GET['iddmbv']>0)){
                            $iddmbv=$_GET['iddmbv']; 
                        }
                        else{
                           $iddmbv=0;
                        } 
                        $dsbv=load_all_baiviet($kyw,$iddmbv);
                        $tendmbv=loadone_danhmuc_baiviet($iddmbv);
                        include "./view/form_baiviet.php";
                     break;
                    case 'ctbv':
                        if(isset($_GET['idbv'])&&($_GET['idbv']>0)){
                            $idbv=$_GET['idbv'];         
                             $onebv= loadone_baiviet($idbv);
                             extract($onebv);
                        
                         include ('./view/chitietbaiviet.php');
                        }
                        else{
                            include "./view/content.php";
                        }   
                    break;
                       

                    case 'dmsanpham':
                        if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                            $kyw =$_POST['kyw'];
                        }else{
                            $kyw="";
                        }
                        if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                            $iddm=$_GET['iddm']; 
                        }
                        else{
                           $iddm=0;
                        } 
                        $dssp=load_all_sanpham($kyw,$iddm);
                        $tendm=loadone_danhmuc_home($iddm);
                        include "./view/form_layout.php";
                        unset($_SESSION['num']);
                    break;
// =========================================================================================
                case 'thoat':
                    session_unset();
                    header('Location:index.php');
                 break;
        // -------------------------------------------------------
        
                case 'giohang':
                        include ('./view/giohang.php');
                break;
                case 'dathang':
                    include('./view/dat_hang.php');
                break;
// =====================================================
                case 'taodon':
                    if(isset($_POST['taobill'])&&($_POST['taobill'])){
                      
                        $name=$_POST['name'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $email=$_POST['email'];
                                     
                        $ngaydathang=date('d/m/Y - H:i:s');
                        
                        $tongdonhang=tongdonhang();
                        $idbill=insert_bill($name,$address,$tel,$email,$ngaydathang,$tongdonhang);
                        // insert into cart vói session['mycart'] & idbill 
                        
                        foreach ($_SESSION['mycart']as $cart){
                            if(isset($_SESSION['user'])){
                         insert_cart($_SESSION['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                        }else{
                            insert_cart(null,$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                        }
                    
                      
                      }
                    }
                  $bill=loadone_bill($idbill);               
                    $billct=loadone_cart($idbill);
                    include "./view/bill.php";
                    unset($_SESSION['mycart']);
                   
                break;
// ==================================================================

// ============================================================
                case 'xoagiohang':
                        if(isset($_GET['idcart'])){
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);//array_slice[Mảng,vị trí xoá,xoábao nhiêu phaafn tử]
                     }
                        include ('./view/giohang.php');
                        unset($_SESSION['num']);
                break;
// -------------------------------------------------------------------------------------------
                case 'spct':
                  
                    if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                        $id=$_GET['idsp'];         
                         $onesp= loadone_sanpham($id);
                         extract($onesp);
                      $sp_cung_loai = load_sp_cungloai($id,$iddm,$iddm);
                     include ('./view/spchitiet.php');
                    }
                    else{
                        include "./view/content.php";
                    }   
                break;
// =======================================
                default:   
                    include "./view/content.php";
                break;
// ===========================================================
                case 'addtocart':
                        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $img=$_POST['img'];
                            $price=$_POST['price'];
                            $soluong=$_POST['num'];
              
                        //   $soluong=1;
                          $tongtien=$price*$soluong;
                        //   $tongall=(int)$tongall;  
                            $spadd=[$id,$name,$img,$price,$soluong,$tongtien];
                           array_push($_SESSION['mycart'],$spadd);//truyền vào một mảng rổng và 1 mảng con
                        }
                        include "./view/content.php";
                    break;
               // ====================================================        
                    case 'home':
                        include "./view/content.php";
                        unset($_SESSION['num']);
                    break;
                    
// ===============================================
//     case 'admin':
//   header("Location:../admin/index.php");
//     break;                        
            }
        }
    }
        else{
            include "./view/content.php";
         
        }


echo "<br>";
include "./view/footer.php";
    

?>
<!-- <script src="./js/alert.js"></script> -->
