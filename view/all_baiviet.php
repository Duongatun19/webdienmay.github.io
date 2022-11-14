
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
    <h1>Một số bài viết</h1>
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
                  include "./model/global.php";
                  include "./model/sanpham_home.php";
       
              allbaiviet();
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

