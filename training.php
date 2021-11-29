<?php ob_start();?>
<style>
    
.section-heading {
    position: relative;
    z-index: 1;
    margin-bottom: 80px !important;
    max-width: 801px !important;
}

</style>
<section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            
      <!-- Grid row Ibtida-->
      <div class="row  news-item">
    
       
    
        <!-- Grid column -->
        <div class="col-lg-10">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-microchip" aria-hidden="true"></i> Hardware Training</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>OpenLane Tools Workshop</strong></h3>
          <!-- Excerpt -->
          <p  id="newsCollapse-1" aria-expanded="true">
                    <strong><span  class="blue">Do you want to design your own chip using an open-source tool "OpenLane"</span></strong>. Here it is, MERL is conducting a workshop on OpenLane Tools in collaboration with the 
                    <a href="https://osfpga.org/" target="_blank">Open-Source FPGA Foundation</a> and support of <a href="https://Paklaunch.com" target="_blank">Paklaunch.com</a>.
                    <br/>
                    -<a href="training/openlane.php">learn more </a>
          </p>
        </div>
        <!-- Grid column -->
         <!-- Grid column -->
        <div class="col-lg-2">
    
          <!-- Featured image 
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>-->
    
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row end Ibtida-->
    
      
            
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <!--<h1>Register at Our Bootcamp Program</h1>-->
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>

	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/gallery2.jpg';
   $bannerheading = 'Trainings';
   @include('master-with-short-banner.php');   
?>
   