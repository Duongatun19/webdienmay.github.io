
<main>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/chitiet_sp.css">
<link rel="stylesheet" href="./css/reposive.css">
    <div class="row">
    <div class="col-9">
        <div class="row ">
            <div class="tieude xx">
<h1><p>CHI TIẾT SẢN PHẨM </p></h1>
           </div>
           
       <div class="chi_tiet">
<br>
<br>

<?php
  $epkieu_price=$price?number_format($price).'đ': '0đ';
$hinh=$img_path.$img;
echo '<div class="img_ct"><img src='.$hinh.' height="340px" width="320px">';
echo"<div class = ndct>";
echo  '<div class="gia ">'.$epkieu_price.'</div>';
echo '<div class="ten ">'.$name.'</div>';
echo"</div>";

echo' <form action="index.php?act=addtocart" method="post">
<div class="nut">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="hidden" name="name" value="'.$name.'">
    <input type="hidden" name="img" value="'.$img.'">
    <input type="hidden" name="price" value="'.$price.'"></div>';
?>
<div class="congtru">
  <div class="sol">
 <input id="tru" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)&&qty>1) result.value--;return false;" type='button' value='-' min="1"/>
    
    <input oninput="fixcartnum()"  type="number" name="num" id="quantity" step="1" value="1" min="1" style="max-width: 50px; ">
    <input id="cong" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
    </div>
   <div class="aaad"><input class="bb" type="submit" name="addtocart" value="ADD to Cart"></div> 
    </div>
    
    </form>
       </div>
  <br>
    <?php
echo '<div class="canle" >'.$mota.'</div>';
    ?>
       </div>
        </div>



<script>
  function fixcartnum() {
    $('[name=num]').val(Math.abs($('[name=num]').val()))
  }
  //fix lỗi k cho nhập số âm
</script>

     
</div>
</div>


        <!--  /*hết col-9*/ -->
<div class="col-3 mg1">
<?php include "menudoc.php" ?>


<!-- //phần bình luận chưa làm -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#binhluan").load("view/binhluanform.php", {idbl: <?=$id?>});
 
});
</script>

<div class="sp_cl" >
    <div class="tieude"><h2><p>Bình luận</p></h2></div>
    <div class="nd_bl" id="binhluan">
    </div>
</div> -->
<!-- //hết phàn bình luận -->
<div class="tieude"><h2><p>SẢN PHẨM CÙNG LOẠI</p></h2></div>
<br>
<div class="khung">
      <div class="khung1 center">
              <?php
        foreach($sp_cung_loai as $sp_cung_loai){
            echo '  <div class="item_cl">';
            extract($sp_cung_loai);
            $price=$price?number_format($price).'đ': '0đ';
            $link_ctsp="index.php?act=spct&idsp=".$id;
            $img=$img_path.$img;
echo '<div class="img_cl"><a href="'.$link_ctsp.'"><img src='.$img.' height="120px" width="100px"></a></div><br>';
      
echo'<div class="name_cl"><a href="'.$link_ctsp.'">'.$name.'</a></div>';
            echo '  </div>';
        }
        ?>
  </div>
  </div>
  </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="./js/slick.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="./js/al1.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="./js/slick2.min.js" ></script>
  <script >
    $('.center').slick({
    centerMode: false,
    centerPadding: '60px',
    
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]});
  
      </script>      

 

</main>




    

            


