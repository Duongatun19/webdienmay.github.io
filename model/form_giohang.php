<?php
function view_cart(){
        $i=0;
        $tongall=0;
        foreach ($_SESSION['mycart'] as $cart){
        // truyền $_SESSION['mycart'] từ trang index sang
        // $cart[2]:hình ảnh
        // $cart[3]:giá
        // $cart[4]:số lượng
        // $cart[5]:tongtien
        global $img_path;
        $hinh=$img_path.$cart[2];//khai báo biến với đường dẫn.giá trị trong mảng $cart[2]
        $cart[3]=(int)$cart[3];//ép kiểu int để nhân với số lượng
        //convert sang tiền việt
        $tongtien=$cart[4]*$cart[3];//số lượng nhân với giá= mảng cart[3]=$price
        $conver_cart3=$cart[3]?number_format($cart[3]).'đ': '0đ';
        $conver_tongtien=$tongtien?number_format($tongtien).'đ': '0đ';
        $tongall+=$tongtien;
        $xoasp='  <a href="index.php?act=xoagiohang&idcart='.$i.'"><input class="thaotac" type="submit" value="Xoá" style="border-radius: 5px;"></a>';
        echo '  <tr style="border:solid;"> 
        <td><img src="'.$hinh.'" alt="" width="100px" height="100px" ></td>
        <td>'.$cart[1].'</td>
        <td>'.$conver_cart3.'</td>  
        <td>'.$cart[4].'</td>
        <td>'.$conver_tongtien.'</td>
        <td>'.$xoasp.'</td>
        </tr>';
        $i+=1;
        }
        $conver_cart5=$tongall?number_format($tongall).'đ': '0đ';
        echo '  <tr>        
        <td colspan="4" style="font-weight: bold;">Tổng Tiền</td>       
        <td style="color:red; font-weight: bold;" >'.$conver_cart5.'</td>   
        <td></td>
        </tr>';

}
// ---------------------------------------------------------
function view_dat_hang(){

    $i=0;
    $tongall=0;
    foreach ($_SESSION['mycart'] as $cart){
    // truyền $_SESSION['mycart'] từ trang index sang
    // $cart[2]:hình ảnh
    // $cart[3]:giá
    // $cart[4]:số lượng
    // $cart[5]:tongtien
    global $img_path;
    $hinh=$img_path.$cart[2];//khai báo biến với đường dẫn.giá trị trong mảng $cart[2]
    $cart[3]=(int)$cart[3];//ép kiểu int để nhân với số lượng
    //convert sang tiền việt
    $tongtien=$cart[4]*$cart[3];//số lượng nhân với giá= mảng cart[3]=$price
    $conver_cart3=$cart[3]?number_format($cart[3]).'đ': '0đ';
    $conver_tongtien=$tongtien?number_format($tongtien).'đ': '0đ';
    $tongall+=$tongtien;
    $xoasp='  <a href="index.php?act=xoagiohang&idcart='.$i.'"><input class="thaotac" type="submit" value="Xoá" style="border-radius: 5px;"></a>';
    echo '  <tr style="border:solid;"> 
    <td><img src="'.$hinh.'" alt="" width="100px" height="100px" ></td>
    <td>'.$cart[1].'</td>
    <td>'.$conver_cart3.'</td>  
    <td>'.$cart[4].'</td>
    <td>'.$conver_tongtien.'</td>
    </tr>';
    $i+=1;
    }
    $conver_cart5=$tongall?number_format($tongall).'đ': '0đ';
    echo '  <tr>        
    <td colspan="4" style="font-weight: bold;">Tổng Tiền</td>       
    <td style="color:red; font-weight: bold;" >'.$conver_cart5.'</td>   
    </tr>';


}
function tongdonhang(){
    $tongall=0;
    foreach($_SESSION['mycart'] as $cart){
        $tongtien=$cart[3]*$cart[4];
        $tongall+=$tongtien;
    }
 
    return $tongall;
}
function insert_bill($name,$address,$tel,$email,$ngaydathang,$tongdonhang){
    $sql="insert into bill(bill_name,bill_address,bill_tel,bill_email,ngaydathang,total) values('$name','$address','$tel','$email','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadone_cart($idbill){
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}
function bill_chi_tiet($lissbill){
    $i=0;
    $tongtt=0;
    

   
    foreach ($lissbill as $cart){
    // truyền $_SESSION['mycart'] từ trang index sang
    // $cart[2]:hình ảnh
    // $cart[3]:giá
    // $cart[4]:số lượng
    // $cart[5]:tongtien
    global $img_path;
    $hinh=$img_path.$cart['img'];//khai báo biến với đường dẫn.giá trị trong mảng $cart[2]
    $tong=$cart['thanhtien'];
   
  
    $conver_cart=$cart['price']?number_format($cart['price']).'đ': '0đ';
    $conver_tt=$tong?number_format($tong).'đ': '0đ';
    $tongtt+=$tong;
    

    echo '  <tr style="border:solid;"> 
    <td>'.$cart['id'].'</td>
    <td><img src="'.$hinh.'" alt="" width="100px" height="100px" ></td>
    <td>'.$cart['name'].'</td>
    <td>'.  $conver_cart.'</td> 
    <td>'.$cart['soluong'].'</td>
    <td>'.$conver_tt.'</td>
    </tr>';
    $i+=1;
    }
    $conver_tongtien=$tongtt?number_format($tongtt).'đ': '0đ';
    echo '  <tr>        
    <td colspan="5" style="font-weight: bold;">Tổng Tiền</td>       
    <td style="color:red; font-weight: bold;" >'.$conver_tongtien.'</td>   
    </tr>';
    
}
?>



