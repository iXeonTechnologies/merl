<?php ob_start();?>
<img src = "img/bg-img/404pagenotfound.jpg" width="70%" style="margin: 50px auto ; display: block;">


<?php 
    $pagesection = ob_get_contents();
   ob_end_clean();
   @include('master-without-banner.php');   
?>
