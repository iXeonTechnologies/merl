<?php ob_start();?>
<style>
    
      section {
        margin-top: 90px;
        margin-bottom: 60px;
    }
    h3{
        text-align: center;
    }

</style>
    <section>
        <h3>COMING SOON..</h3>
    </section>

	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'BURAQ PROCESSOR';
   @include('master-with-short-banner.php');   
?>
   