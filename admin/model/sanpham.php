<?php

function insert_sanpham($tensp,$giasp,$giakm,$hinh,$mota,$noibat,$iddm){
    $sql="insert into sanpham(name,price,giakm,img,mota,noibat,iddm) values('$tensp','$giasp','$giakm','$hinh','$mota','$noibat','$iddm')";
    pdo_execute($sql);
}
function insert_baiviet($tenbv,$hinh,$mota,$iddmbv){
    $sql="insert into baiviet(namebv,img,mota,iddmbv) values('$tenbv','$hinh','$mota',$iddmbv)";
    pdo_execute($sql);
}
function delete_baiviet($id){
    $sql="delete from baiviet where id=".$id;
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw="",$iddm=0){
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
function loadall_baiviet($kyw="",$iddmbv=0){
    $sql="select * from baiviet where 1"; 
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddmbv>0){
        $sql.=" and iddm ='".$iddmbv."'";
    }
    $sql.=" order by id desc";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function load_one_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}


function update_baiviet($id,$namebv,$hinh,$mota,$iddmbv){
    if($hinh!="")
        $sql="update baiviet set  namebv='".$namebv."',img='".$hinh."',mota='".$mota."',iddmbv='".$iddmbv."'   where id='$id'";
    else 
    $sql="update baiviet set  namebv='".$namebv."',mota='".$mota."',iddmbv='".$iddmbv."'   where id='$id'";   // bỏ update hinh
    pdo_execute($sql);
}
function update_sanphamAdmin($id,$name,$price,$giakm,$hinh,$mota,$noibat,$iddm){
    if($hinh!="")
        $sql="update sanpham set  name='".$name."',price='".$price."',giakm='".$giakm."',img='".$hinh."',mota='".$mota."',noibat='".$noibat."',iddm='".$iddm."'   where id='$id'";
    else 
    $sql="update sanpham set  name='".$name."',price='".$price."',giakm='".$giakm."',mota='".$mota."',noibat='".$noibat."',iddm='".$iddm."'   where id='$id'";   // bỏ update hinh
    pdo_execute($sql);
}
function thongke(){
    $sql="SELECT danhmuc.id as madm, danhmuc.namedm as tendm, count(sanpham.id) as countsp from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    // $sql.="";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listthongke=pdo_query($sql);
    return $listthongke;
}

?>