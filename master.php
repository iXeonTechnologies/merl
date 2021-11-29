<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head-links.php");?>
</head>

<body>
	<?php include("include/common.php");?>
    <!-- ##### Preloader ##### -->

   <div id="preloader">
        <i class="circle-preloader"></i>
    </div>
    <!-- ##### Header Area Start ##### -->
    <?php
     include("include/header.php");
    
     include("include/header-banner.php");
    
    if(isset($pagesection))
        echo $pagesection;
    
     include("include/footer.php");

     include("include/footer-script.php");
     ?>
</body>

</html>