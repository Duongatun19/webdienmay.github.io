<?php

function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(namedm) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
function load_all_danhmuc_home(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function load_all_danhmuc_baiviet(){
    $sql="select * from danhmucbaiviet order by id desc";
    $listdanhmucbaiviet=pdo_query($sql);
    return $listdanhmucbaiviet;
}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function loadone_danhmuc_home($idmm){
    if($idmm>0){
    $sql="select * from danhmuc where id=".$idmm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $namedm;
    }else{
      return "";
     
    }

}
function loadone_danhmuc_baiviet($iddmbv){
    if($iddmbv>0){
    $sql="select * from danhmucbaiviet where id=".$iddmbv;
    $dmbv=pdo_query_one($sql);
    extract($dmbv);
    return $dmbaiviet;
    }else{
      return "";
     
    }

}

function update_danhmuc($id,$tenloai){
    $sql="update danhmuc set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}

?>