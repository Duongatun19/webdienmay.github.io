<?php

function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(namedm) values('$tenloai')";
    pdo_execute($sql);
}
function insert_danhmuc_baiviet($dmbv){
    $sql="insert into danhmucbaiviet(dmbaiviet) values('$dmbv')";
    pdo_execute($sql);
}
function loadall_danhmuc_baiviet(){
    $sql="select * from danhmucbaiviet order by id desc";
    $listdanhmucbv=pdo_query($sql);
    return $listdanhmucbv;
}
function delete_danhmuc_baiviet($id){
    $sql="delete from danhmucbaiviet where id=".$id;
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id='$id'";
    $dm=pdo_query_one($sql);
    return $dm;
}
function finddanhmucbyID($id){
 $sql=" SELECT * from danhmuc where id='$id'";
 $dm=pdo_query_one($sql);
 return $dm;
}
function finddanhmucbvbyID($id){
    $sql=" SELECT * from danhmucbaiviet where id='$id'";
    $dmbv=pdo_query_one($sql);
    return $dmbv;
}
function update_danhmuc($id,$tenloai){
    $sql=" UPDATE danhmuc SET namedm ='$tenloai' where id='$id'";
    pdo_execute($sql);
}
function update_danhmuc_baiviet($id,$danhmucbaiviet){
    $sql=" UPDATE danhmucbaiviet SET dmbaiviet ='$danhmucbaiviet' where id='$id'";
    pdo_execute($sql);
}
  function baiviet(){
    global $listbaiviet;
    foreach ($listbaiviet as $baiviet) {
        extract($baiviet);
      
        $suabv="index.php?act=suabv&id=".$id;
        $xoabv="index.php?act=xoabv&id=".$id;
        $hinhpath="../uploads/".$img;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='80'>";
        }else{
            $hinh="no photo";
        }
        echo '<tr>                                  
                <td>'.$id.'</td>
                <td><textarea style="width:300px"; disabled class="usersl">'.$namebv.'</textarea></td>
                <td>'.$hinh.'</td>
               
             
                <td  width=200px; color="red"><textarea style="width:500px"; disabled class="usersl">'.$mota.'</textarea></td>
        
             
                <td><a href="'.$suabv.'"><input type="button" value="Sửa"></a> <a href="'.$xoabv.'"><input type="button" value="Xóa"></a></td>
            </tr>';
    }
}
function findbaivietbyID($id){
    $sql=" SELECT * from baiviet where id='$id'";
    $bv=pdo_query_one($sql);
    return $bv;
   }
   function findsanphambyID($id){
    $sql=" SELECT * from sanpham where id='$id'";
    $sp=pdo_query_one($sql);
    return $sp;
   }
function sanpham(){
    global $listsanpham;
    foreach ($listsanpham as $sanpham) {
        extract($sanpham);
        $price=$price?number_format($price).'đ': '0đ';
        $suasp="index.php?act=suasp&id=".$id;
        $xoasp="index.php?act=xoasp&id=".$id;
        $hinhpath="../uploads/".$img;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='80'>";
        }else{
            $hinh="no photo";
        }

        echo '<tr>
              
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$price.'</td>
                <td>'.$giakm.'</td>
                <td>'.$hinh.'</td>
                <td  width=200px; color="red"><textarea disabled class="usersl">'.$mota.'</textarea></td>
                <td>'.$noibat.'</td>
        
             
                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
            </tr>';
    }
} 
function danhsachdanhmuc(){
    global $listdanhmuc;
    foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        if($iddm==$id)echo '<option value="'.$id.'" selected>'.$name.'</option>';
        else echo '<option value="'.$id.'">'.$namedm.'</option>';
    }
}  
?>