
<main>
<div class="container">
<link rel="stylesheet" href="./css/content.css">
<link rel="stylesheet" href="./css/baiviet.css">
<link rel="stylesheet" href="./css/reposive.css">

 

    <div class="row">
 
        <div class="col-9">
            <div class="row ">
       </style>
     <div class="box_title boloc">
    <h1>Trang <?=$tendmbv?></h1>
     </div>
     <div class="ndbl">

     </div>
     </div>


     <style>
         .boloc h1{
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         color:black;
         position: relative;
            }
        .boloc h1::after{
            content: "";
            position: absolute;
            bottom: -15px;
            left: 45%;
            width: 95px;
            height: 6px;
            border-radius: 30px;
           background-color: red;

        }
     </style>

     <div class="row">
     <?php
   
     ?>
     <div class="cacsanpham ">

 <br>
 <br>


 <?php   
                  
       
              
                    foreach ($dsbv as $bv) {
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
                    ?> 
                  
     
 </div>
     </div>
     </div>

         
        </div>
         
     
            <div class="col-3 mg">
            <?php include "menu_tintuc.php" ?>
</div>
    </div>
</div>

</main>

