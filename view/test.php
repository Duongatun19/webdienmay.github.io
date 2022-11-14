

//khung mẫu 
<?php
if(isset($_SESSION['user'])){
   ?>
    
         Xin chào :  <?php echo $_SESSION['name']?>&nbsp;&nbsp;&nbsp;   
   <?php

}else{
?> 
    
       <?php } ?>
