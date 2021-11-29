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
     include("include/header.php");?>
    
    <?php if(isset($bannerimgurl) && isset($bannerheading))
        echo '<div class="breadcumb-area bg-img" style="background-image: url('.$bannerimgurl.');">
        <img src='.$bannerimgurl.' class="breadcumb-area bg-img"  />
        
        <div class="bradcumbContent">
            <h2>'.$bannerheading.'</h2>
        </div>
    </div>';

    ?>
    <?php
    if(isset($pagesection))
        echo $pagesection;
    
    include("include/footer.php");

     include("include/footer-script.php");
     ?>
</body>

</html>