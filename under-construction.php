<?php ob_start();?>
<img src = "img/bg-img/under-construction.jpg" width="100%">


<?php 
    $pagesection = ob_get_contents();
   ob_end_clean();
   @include('master-without-banner.php');   
?>
