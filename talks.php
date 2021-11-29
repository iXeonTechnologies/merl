<?php ob_start();?>
<style>
    
.section-heading {
    position: relative;
    z-index: 1;
    margin-bottom: 80px !important;
    max-width: 801px !important;
}

</style>
<section class="about-us-area mt-50 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h1 class="mx-auto">Invited Talks & Mentions</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        RISC-V at OSFP LIVE event with Dr. Naveed Sherwani, Dr. Ali Ahmed
                    </div>
                      <div class="card-body">
                        <p class="card-text">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/XH2x8uYLIAU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
                        </p>
                      </div>
                    </div>
                    
                </div>
               
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        MERL is discussed in SiFive Symposium held at NED Karachi
                    </div>
                      <div class="card-body">
                        <p class="card-text">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/O_negvK1OkE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </p>
                      </div>
                    </div>
                    
                </div>
               
            </div>
            
             <div class="row mt-30">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        Dr. Yunsup Lee was talking about MERL at RISC V Summit 2019
                    </div>
                      <div class="card-body">
                        <p class="card-text">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/HRdw202Fneg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </p>
                      </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/gallery2.jpg';
   $bannerheading = 'Invited Talks & Mentions';
   @include('master-without-banner.php');   
?>
   