
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/xulysp.css">
    <title>Document</title>
</head>
<body>
<div class="top">Xử Lý Sản Phẩm</div>
    <div class="conttent">
    <div class="left">
        <div class="top_col3">
            Thêm Sản phẩm
        </div>
        <div class="khoangcach" style="padding-left: 10px;">
      
 <form action="index.php?act=sanpham" method="post" enctype="multipart/form-data" style="padding:10px;">
 <label for="">Tên Sản Phẩm</label>
 <br>
 <input type="text" placeholder="Nhập tên" name="tensp" required>
 <br>
 <label for="">Giá</label>
 <br>
 <input type="text" placeholder="Nhập giá" name="giasp" required>
 <br>
 <label for="">Giá Khuyến mại</label>
 <br>
 <input type="text" placeholder="Nhập giá" name="giakm" >
 <br>

 <label for="">Chọn hình ảnh</label>
 <br>
 <input style="border: 1px solid black;" type="file" name="hinh" required>
 <br>
 
     <!--===================== phần lựa chọn danh mục================== -->
 <label for="">Tên danh mục</label>
 <select style="width:300px;" name="iddm" id="input" class="form-control" required="required">

 <?php
  
          danhsachdanhmuc();
                            ?>
                   
                    </select>
 <!----------------------------------hết phần lựa chọn danh mục ------------->
           
                    <label for="">SẢn phẩm nổi bật:</label>
                    <div class="check" >
                    Có<input type="radio" name="noibat" id="" value="co" >
                    Không<input type="radio" name="noibat" id="" value="khong" >
                    </div>
                 
                
                    <label for="">Mô tả</label>
                    <br>
                    <textarea style="width:400px"class="mota" type="" name="mota" placeholder="Nhập mô tả"></textarea>
                   
                   <input type="submit" name="themsp" value="THÊM MỚI">
                    <button type="reset">Reset</button>
                </form>
                <label style="color: green; font-size:17px; font-weight:bold; padding-left:40px; "  for=""><?php
                        if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                    ?>
                    </label>  
        </div>
        </div>
        <style>
            .check{
 
   display: flex;

    width:100%;
  

}  

        </style>
      

        <div class="right">
        <div class="top_col9">
    Các bài viết 
</div>
<style>
    .danhsach{
       
 padding:40px 40px ;
  
    }
</style>

<!-- <form action="index.php?act=sanpham" method="post">
    <label for="">Tìm theo danh mục</label>
    <br>
                        <input style="width:300px;"type="text" name="kyw">
                        <select  style="width:150px;" name="iddm">
                            <option value="0" selected >Tất cả</option>
                            <?php
                            danhsachdanhmuc();
                            ?>
                            
                        </select>
                     
                        <input style="width:50px;" type="submit" name="listok" value="GO">
            </form> -->
<!-- ------------------------hieejn san pham------------------------- -->
<div class="danhsach">
    <table>
<thead >
            <tr>
                <th width=5%>STT</th>
         
                <th width=23%>Tên Sản Phẩm</th>
                <th width=15%>Giá</th>
                <th width=15%>Giá KM</th>
                <th width=10%>Hình Ảnh</th>
                <th width=200px >Mô tả</th>
                <th>Sp Nổi Bật</th>
                <th>Thao tác</th>
            </tr>
            <?php
                        $listsanpham=loadall_sanpham();
                         sanpham();
                        
                        ?>
                        <style>
                   .usersl{
                    user-select: none;
                   }
                        
            
                        </style>
</table>
</div>
        </div>
    </div>

</body>
</html>