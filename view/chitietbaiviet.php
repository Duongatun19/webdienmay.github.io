
<main>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/chitiet_sp.css">
<link rel="stylesheet" href="./css/reposive.css">
    <div class="row">
    <div class="col-9">
        <div class="row ">
            <div class="tieude xx">
<h1><p>CHI TIẾT BÀI VIẾT</p></h1>
           </div>
       <div class="chi_tiet bviet">
<br>
<br>

<?php
 
$hinh=$img_path.$img;
echo '<div class="img_ct bnn"><img src='.$hinh.' height="370px" width="320px"></div><br>';

echo '<div class="canle">'.$mota.'</div>';

?>
<style>
    .bnn{
        height: 400px;
    }
</style>  
</div>
</div>  
</div> 

        <!--  /*hết col-9*/ -->
<div class="col-3 mg1">
<?php include "menu_tintuc.php" ?>
</div>
</div>
 

</div>
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

 

</main>




    

            


