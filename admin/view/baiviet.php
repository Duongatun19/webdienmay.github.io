
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dmsanpham.css">
    <title>Bài viết</title>
</head>
<body>
<div class="top">Bài viết</div>
    <div class="conttent">
    <div class="left">
        <div class="top_col3">
            Thêm bài viết
        </div>
        <br>
      
        <div class="khoangcach" style="padding-left: 40px;">
        <label style="color: green; font-size:17px; font-weight:bold; padding-left:40px; "  for=""><?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                    ?>
                    </label>  
        <form action="index.php?act=thembv" method="post" enctype="multipart/form-data">
            <label for="">Tiêu Đề Bài Viết</label>
            <br>
            <textarea type="input" name="tenbv" placeholder="Nhập tên bài viết"style="width:300px"></textarea>
      
            <br>
            <label for="">Hình ảnh</label>
            <br>
            <input style="border: 1px solid black;" type="file" name="hinh">
        
                    <br>
            <label for="">Mô tả</label>
            <br>
           <textarea name="mota" id="" cols="30" rows="5" style="width:300px"></textarea>
           <br>
         
           <label for="">Danh mục</label>
            <br>
            <select name="iddmbv" id="input" class="form-group" required="required" style="width:300px ; height:40px; text-align:center" >
              
 <?php
     $listdanhmucbv=loadall_danhmuc_baiviet();
  foreach ($listdanhmucbv as $danhmucbv) {
                         extract($danhmucbv);
                         echo '<option value="'.$id.'">'.$dmbaiviet.'</option>';
                     }
                 ?>
        
            </select>
            <br>
            <input value="Thêm mới" type="submit" name="thembv" style="width:150px; height:40px">
            

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