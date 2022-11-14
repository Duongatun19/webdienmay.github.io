<style>
   
</style>

<main>
<div class="nenzxc">
    <div><span class="zxc"></span></div>
    <div><span class="zxc"></span></div>
    <div><span class="zxc"></span></div>
    <div><span class="zxc"></span></div>
    <div><span class="zxc"></span></div>
</div>
<style>
    main .nenzxc{
        position: absolute;
    }
    .nenzxc div{
        position: absolute;
    }
    .nenzxc div:nth-child(1) {
        width: 100px;
        height: 100px;
    /* border: 1px solid black; */
    animation: 15s tt alternate  infinite;
        top: 2745px;
        left: 1660px;

    border-radius: 25% 75% 26% 74% / 42% 57% 43% 58%  ;
    background-image: url(https://media2.giphy.com/media/UGNwU7iGSdFYHbbklS/giphy.webp);
    background-size: cover;
    
}

@keyframes tt {
    0% {
        /* transform: rotate(90deg); */
        border-radius:60% 40% 26% 74% / 42% 30% 70% 58%  ;
        
    }
    25% {
        /* transform: rotate(180deg); */
        border-radius: 60% 40% 53% 47% / 68% 30% 70% 32%  ;

        
    }
    50% {
        /* transform: rotate(360deg); */
        border-radius: 83% 17% 53% 47% / 21% 71% 29% 79%  ;
    }
    75% {
        /* transform: rotate(180deg); */
  border-radius: 30% 70% 70% 30% / 21% 83% 17% 79% ;
        
    }
    
    100% {
        /* transform: rotate(90deg); */
        border-radius:30% 70% 26% 74% / 21% 83% 17% 79%  ;
    }}

      
</style>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/reposive.css">
<div class="boloc ccc">

<h2 >Sản Phẩm mới</h2></div>
    <div class="row">
        <style>
            .ccc{
                border-radius: 50px;
                line-height: 80px;
            }
        </style>
        <div class="col-9">
            <div class="row">     
    <?php   
        include "./model/global.php";
        include "./model/sanpham_home.php";
        sanpham_home();
    ?>     
        </div>
        <div class="boloc ccc">
<h2 >Sản Phẩm Nổi Bật</h2></div>   
        <div class="row">
<?php
spnoibat();
?>
        </div>
        <div class="col-3">
  
    <?php
        include "menudoc.php"
    ?>
        </div>
        </div>
        <script type="text/javascript" href="./css/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" href="./css/bootstrap.min.js"></script>
       
</main>
