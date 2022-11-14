<?php

function insert_sanpham($tensp,$giasp,$giakm,$hinh,$mota,$iddm){
    $sql="insert into sanpham(name,price,giakm,img,mota,iddm) values('$tensp','$giasp','$giakm','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_content(){
    $sql="select * from sanpham where 1 order by id desc limit 0,12";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_all_sanpham_noibat(){
    $sql="select * from sanpham where noibat='co' order by id desc limit 0,6";
    $listspnoibat=pdo_query($sql);
    return $listspnoibat;

}
function loadbaiviet(){  
      $sql="select * from baiviet where 1 order by id desc limit 0,12";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;

}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadone_baiviet($idbv){
    $sql="select * from baiviet where id=".$idbv;
    $sp=pdo_query_one($sql);
    return $sp;
}
//sản phẩm cùng loại
function load_sp_cungloai($id,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id <>".$id ;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}


function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
    else 
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."',mota='".$mota."' where id=".$id;   
    pdo_execute($sql);
}
function load_all_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_all_baiviet($kyw="",$iddmbv=0){
    $sql="select * from baiviet where 1"; 
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddmbv>0){
        $sql.=" and iddmbv ='".$iddmbv."'";
    }
    $sql.=" order by id desc";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}

?>