
    <link rel="stylesheet" href="./css/dmsanpham.css">
 <?php
 if(is_array($dm)){
    extract($dm);
}
?>

 <div class="top">Danh Mục Sản Phẩm</div>
 <div class="conttent">
     <div class="left">
     <div class="top_col3">
               Thêm Danh Mục Sản Phẩm
           </div>
         
       <div class="khoangcach">
           <form action="index.php?act=updatedm" method="post">
<!-- ----------------------------phần thông báo-------------------------->
               <label for="">Sủa danh mục</label>
              
               <br>
               <label style="color: green; font-size:17px; font-weight:bold; "  for=""><?php
                       if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
                   ?>
                   </label>
<!---------------------- hết phần thông báo-------------------------- -->
                   <br>  
<!-- -----------------------phần nhập liệu---------------------  -->
               <input type="text" name="tenloai" placeholder="Nhập danh mục" value="<?=$namedm?>">
               <input type="hidden" name="id" value="<?=$id?>">     
               <input style="width:100px;" type="submit" name="capnhat_dm" value="sửa">                       
           </form>
<!----------------------- hết phần nhập liệu---------------------- -->
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
                           $listdanhmuc=loadall_danhmuc();
                           foreach ($listdanhmuc as $danhmuc) {
                               extract($danhmuc);
                               $suadm="index.php?act=suadm&id=".$id;
                               $xoadm="index.php?act=xoadm&id=".$id;

                               echo '<tr>
                                   
                                       <td>'.$id.'</td>
                                       <td>'.$namedm.'</td>
                                       <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                   </tr>';
                           }
                       
                       ?>
   </table>
   </div>
</div>
     </div>
 </div>
     
 </div>
