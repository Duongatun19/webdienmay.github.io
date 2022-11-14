
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dmsanpham.css">
    <title>Document</title>
</head>
<body>
<div class="top">Bài viết</div>
    <div class="conttent">
    <div class="left">
        <div class="top_col3">
            Sửa bài viết
        </div>
        <br>
      
        <div class="khoangcach" style="padding-left: 40px;">
        <label style="color: green; font-size:17px; font-weight:bold; padding-left:40px; "  for=""><?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                    ?>
                    </label>  

 <?php
 if(is_array($bv)){
    extract($bv);
}
$hinhpath="../uploads/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='140' width='120'>";
}else{
    $hinh="no photo";
}
?>
                 
        <form action="index.php?act=capnhat_baiviet" method="post" enctype="multipart/form-data" style="padding: 10px;">
            <label for="">Tiêu Đề Bài Viết</label>
            <br>
            <textarea type="text" name="tenbv" placeholder="Nhập tiêu đề bài viết"style="width:500px" value=""><?=$namebv?></textarea>
      <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <label for="">Hình ảnh</label>
            <br>
            <input style="border: 1px solid black;" type="file" name="hinh">    <?=$hinh?>
        
                    <br>
            <label for="">Mô tả</label>
            <br>
           <textarea name="mota" id="" cols="30" rows="5" style="width:500px"><?=$mota?></textarea>
           <br>
         
           <label for="">Danh mục</label>
            <br>
            <select name="iddmbv" id="input" class="form-group" required="required" style="width:300px ; height:40px; text-align:center" >
   
 <?php

     $listdanhmucbv=loadall_danhmuc_baiviet();
  foreach ($listdanhmucbv as $danhmucbv) {
                         extract($danhmucbv);
                         if($iddmbv==$id)echo '<option value="'.$id.'" selected>'.$dmbaiviet.'</option>';
                         echo '<option value="'.$id.'">'.$dmbaiviet.'</option>';
                     }
                 ?>
        
            </select>
         
            <br>
            <input value="Cập Nhật" type="submit" name="capnhatbv" style="width:150px; height:40px">
            

        </form>
        </div>
        </div>
      

        <div class="right">
        <div class="top_col9">
    Các bài viết 
</div>
<div class="danhsach">
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th width=2%>STT</th>
        <th width=23%>Tên Bài Viết</th>
        <th width=10%>Hình Ảnh</th>
        <th>Mô tả</th>
        <th style="width:100px">Quản lý</th>
       
    </tr>
    <tr>
<?php                     
    $listbaiviet=loadall_baiviet();
    baiviet();
?>
</table>
</div>
</div>
</div>
</body>
</html>