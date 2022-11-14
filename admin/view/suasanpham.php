<?php
 if(is_array($sp)){
    extract($sp);
}
$hinhpath="../uploads/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="no photo";
}

$listsanpham=loadall_sanpham();
?>
    <link rel="stylesheet" href="./css/xulysp.css">
<div class="top">Xử Lý Sản Phẩm</div>
    <div class="conttent">
    <div class="left">
        <div class="top_col3">
         Sửa sản phẩm
        </div>
        <div class="khoangcach" style="padding-left: 10px;">
           
        <form action="index.php?act=update_sanpham" method="post" enctype="multipart/form-data" style="padding:10px;">
 <label for="">Tên Sản Phẩm</label>
 <br>
 <input type="text" placeholder="Nhập tên" name="tensp" required value="<?=$name?>">
 <br>
 <label for="">Giá</label>
 <br>
 <input type="text" placeholder="Nhập giá" name="giasp" required value="<?=$price?>">
 <br>
 <label for="">Giá Khuyến mại</label>
 <br>
 <input type="text" placeholder="Nhập giá" name="giakm" value="<?=$giakm?>" >
 <br>

 <label for="">Chọn hình ảnh</label>
 <br>
 <input style="border: 1px solid black;" type="file" name="hinh" >&nbsp;<?=$hinh?>
 <br>
 
     <!--===================== phần lựa chọn danh mục================== -->
 <label for="">Tên danh mục</label>
 <select style="width:300px;" name="iddm" id="input" class="form-control" required="required">

 <?php
  $listdanhmuc=loadall_danhmuc();
  danhsachdanhmuc();
?>
                    </select>
 <!----------------------------------hết phần lựa chọn danh mục ------------->
                    <label for="">SẢn phẩm nổi bật:</label>
                    <div class="check" >
                    Có&nbsp;<input type="radio" name="noibat" id="" value="co" style="width:25px" >&nbsp;
                    Không&nbsp;<input type="radio" name="noibat" id="" value="khong" style="width:25px"  >
                    </div>
                    <label for="">Mô tả</label>
                    <br>
                    <textarea style="width:400px"class="mota" type="" name="mota" placeholder="Nhập mô tả"><?=$mota?></textarea>
                    <input type="hidden" name="id" value="<?=$id?>">
                   <input type="submit" name="updatesp" value="Cập Nhật">
              
                </form>
                <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
        </div>
        </div>
        <div class="right">
        <div class="top_col9">
    Các bài viết 
</div>
<style>
    .danhsach{
       
 padding:40px 40px ;
  
    }
</style>

<form action="index.php?act=sanpham" method="post">
    <label for="">Tìm theo danh mục</label>
    <br>
                        <input style="width:300px;"type="text" name="kyw">
                        <select  style="width:150px;" name="iddm">
                            <option value="0" selected >Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
            </select>
            <input style="width:50px;" type="submit" name="listok" value="GO">
            </form>
<!-- --------------------hieejn san pham------------------------- --> 
<div class="danhsach">
    <table>
<thead >
            <tr>
                <th width=4%>STT</th>
         
                <th width=23%>Tên Sản Phẩm</th>
                <th width=15%>Giá</th>
                <th width=10%>Giá KM</th>
                <th width=10%>Hình Ảnh</th>
                <th  style="width:300px;text-align:left;">Mô tả</th>
            <th>Sp Nổi Bật</th>
                <th>Thao tác</th>
            </tr>
            <?php
                    $listsanpham=loadall_sanpham();
                       sanpham();
                        
                        ?>
</table>
</div>
        </div>
    </div>

</body>
</html>