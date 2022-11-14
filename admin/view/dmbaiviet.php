<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dmsanpham.css">
    <title>Document</title>
</head>

<body>
  <div class="top">Danh Mục Bài Viết</div>
  <div class="conttent">
      <div class="left">
      <div class="top_col3">
                Thêm Danh Bài viết
            </div>
        <div class="khoangcach">
        <form action="index.php?act=dmbv" method="post">
                <label for="">Thêm danh mục loại bài viết</label>
                <br>
                <label style="color: green; font-size:17px; font-weight:bold; "  for=""><?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                    ?>
                    </label>
                    <br>
                <style>
                    input{
                        height: 30px;
                    }
                </style>
                <input type="text" name="dmbv" placeholder="Nhập danh mục">  
                <br>   
                <br>       
                <input style="width:100px;" type="submit" name="themdm" value="THÊM MỚI">    
            </form>
            </div>
      </div>
      <div class="right">
<div class="top_col9">Liệt kê danh mục</div>
<div class="nd">
    <div class="bang">
    <table cellpadding="5" cellspacing="0" width="50%">
        <tr>
            <th width=70px>stt</th>
            <th width=200px>Tên danh mục</th>
            <th width=170px>Quản lý</th>
        </tr>
        <tr>
        <?php
        $listdanhmucbv=loadall_danhmuc_baiviet();
        foreach ( $listdanhmucbv as $danhmucbv) {
            extract($danhmucbv);
            $suadmbv="index.php?act=suadmbv&id=".$id;
            $xoadmbv="index.php?act=xoadmbv&id=".$id;

            echo '<tr>
                
                    <td>'.$id.'</td>
                    <td>'.$dmbaiviet.'</td>
                    <td><a href="'.$suadmbv.'"><input type="button" value="Sửa"></a> <a href="'.$xoadmbv.'"><input type="button" value="Xóa"></a></td>
                </tr>';
        }
        ?>
        </tr>
    </table>
    </div>
</div>
      </div>
  </div>
      
  </div>
</body>
</html>