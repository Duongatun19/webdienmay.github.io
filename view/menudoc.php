<div class="box_menu mb">
       <div class="box_title">Danh sách loại sản phẩm</div>
       <div class="box_content menudoc">
       <link rel="stylesheet" href="./css/reposive.css">
           <ul>
         
            <?php 
        
            foreach($danhmuc as $dm){
                extract($dm);
                $linkdm="index.php?act=dmsanpham&iddm=".$id;
        echo '      <li><a href="'.$linkdm.'">'.$namedm.'</a></li>';
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