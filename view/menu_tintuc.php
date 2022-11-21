<div class="box_menu mb">
       <div class="box_title">Thông Tin Các Loại Sản Phẩm</div>
       <div class="box_content menudoc">
       <link rel="stylesheet" href="./css/reposive.css">
           <ul>
         
            <?php 
        
        foreach($danhmucbaiviet as $dmbv){
            extract($dmbv);
            $linkdmbv="index.php?act=danhmucbv&iddmbv=".$id;
          
        echo '      <li><a href="'.$linkdmbv.'">'.$dmbaiviet.'</a></li>';
        }
              ?>  
              <style>
                  a{
                      display: block;
                  }
              </style>
           </ul>
       </div>
   </div>
   <!-- <div class="box_menu mb" >
   <div class="box_title">Top 10 yêu thích</div>
  
       <div class="box_content"></div>
   </div> -->

        </div>