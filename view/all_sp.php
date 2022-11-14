

<main>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/reposive.css">
<div class="boloc ccc">
<h2 >Một số sản Phẩm</h2></div>
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
        <div class="col-3">
  
    <?php
        include "menudoc.php"
    ?>
        </div>
        </div>
</main>
