<?php
function sanpham_home(){
    global$spnew;
    global $img_path;
    foreach ($spnew as $sp) {
        extract($sp);
        $epkieu_price=$price?number_format($price).'đ': '0đ';
        $hinh=$img_path.$img;
        $link_ctsp="index.php?act=spct&idsp=".$id;
        echo '<div class="col-4 col-md-6">
        <div class="item-product">
        <div class="overlay"><a href="'.$link_ctsp.'">Xem Thêm>></a>     </div>
        <div class="hinhanh"><a href="'.$link_ctsp.'"><img src ="'.$hinh.'"height="270px" width="100%"></a></div>
        <br>
        <br>
        <div class="ten"><a href="'.$link_ctsp.'">'.$name.'</a></div>
        <div class="gia">'.$epkieu_price.'</div>
        <form action="index.php?act=addtocart" method="post">
        <div class="nut_ho">
       <input type="hidden" name="id" value="'.$id.'">
       <input type="hidden" name="name" value="'.$name.'">
       <input type="hidden" name="img" value="'.$img.'">
       <input type="hidden" name="price" value="'.$price.'">
       <div class="nut_home1"><input onchange="fixcartnum()"  type="number" name="num" id="" step="1" min="1" value="1" style="max-width: 60px; text-align:center; height:30px; border:1px solid black"></div>
       <div class="nut_home"><input class="ip_home" type="submit" name="addtocart" value="ADD to Cart" style="height:30px";></div>
       </div>
       </form>
       </div>
       </div>';

    }
}
function allbaiviet(){
    global$baivietall;
    global $img_path;
    foreach ($baivietall as $bv) {
        extract($bv);
       
        $hinh=$img_path.$img;
                        $link_ctbv="index.php?act=ctbv&idbv=".$id;
                        echo '
                        <div class="row">
                        <div class="col-4 bv">
                        <div class="item-product1 itbv">
                        <div class="overlay"><a href="'.$link_ctbv.'">Xem Thêm>></a>     </div>
         <div class="hinhanh"><a href="'.$link_ctbv.'"><img src ="'.$hinh.'"height="140px" width="100%"></a></div>
         <br>
         <br>           
                   </div>
              
                   </div>
                   <div class="tenbv"><a href="'.$link_ctbv.'">'.$namebv.'...<span style="color:red">Xem Thêm >></span></a></div>
                   </div>';


    }
}
function spnoibat(){
    global $spnoibat;
    global $img_path;
    foreach ($spnoibat as $spnb) {
        extract($spnb);
        $epkieu_price=$price?number_format($price).'đ': '0đ';
        $hinh=$img_path.$img;
        $link_ctsp="index.php?act=spct&idsp=".$id;
        echo '<div class="col-4 ">
        <div class="item-product">
        <div class="overlay"><a href="'.$link_ctsp.'">Xem Thêm>></a>     </div>
        <div class="hinhanh"><a href="'.$link_ctsp.'"><img src ="'.$hinh.'"height="270px" width="100%"></a></div>
        <br>
        <br>
        <div class="ten"><a href="'.$link_ctsp.'">'.$name.'</a></div>
        <div class="gia">'.$epkieu_price.'</div>
        <form action="index.php?act=addtocart" method="post">
        <div class="nut_ho">
       <input type="hidden" name="id" value="'.$id.'">
       <input type="hidden" name="name" value="'.$name.'">
       <input type="hidden" name="img" value="'.$img.'">
       <input type="hidden" name="price" value="'.$price.'">
       <div class="nut_home1"><input onchange="fixcartnum()"  type="number" name="num" id="" step="1" min="1" value="1" style="max-width: 60px; text-align:center; height:30px; border:1px solid black"></div>
       <div class="nut_home"><input class="ip_home" type="submit" name="addtocart" value="ADD to Cart" style="height:30px";></div>
       </div>
       </form>
       </div>
       </div>';
     
    

}
}

?>
<style>
    .nut_ho{
        position: relative;
        background-color: red;
        display: flex;
        margin-top: 122%;
        

    }
    .nut_home{
        position: absolute;
      width: 50%;
        right: 25px;
    }
    .nut_home1{
        position: absolute;
        width: 50%;
        left: 8%;
       
    }
    .nut_home input{
  
  background-color: rgb(189, 28, 28);
  border-radius: 7px;
  color: antiquewhite;
  transition: 0.25s;
}
.nut_home input:hover{
 transform: scale(1.1);
 background-color: red;
 border:1px solid rgb(189, 28, 28);
}
       
</style>
