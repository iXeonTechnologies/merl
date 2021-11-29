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
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>MERL - Micro Electronics Research Labs</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <!--<h2>GOAL</h2>
                         <p>To train/educate Pakistani youth in the semiconductor technologies, enable System-on-Chip
                        (SoC) design in Pakistan</p>-->
                    <h2>VISION</h2>
                     <p>To enable Pakistan to become a recognised global player in the microelectronics industry. 
                    </p>
                    <h2>MISSION</h2>
                     <p>To establish Microelectronics Research Laboratories chapters in the universities of Pakistan where research and development can be carried out on RISC-V based ASICs, FPGAs, and SoCs.   
                    </p>
                    <h2>PHILOSOPHY</h2>
                    <p>Microelectronics Research Laboratories (MERL) has an ambitious plan to lead the microelectronics research and development in Pakistan. Although it is an engineering enterprise providing cutting-edge exposure to the people working for it, MERL administration also strongly motivates them, not by example of its power but by power of its example, to exhibit the highest codes of personal and professional development.</p>
                </div>
            </div>
            <div class="row">
                <div class ="col-md-9 mx-auto">
                    <h2>Multi Project Wafer (MPW) Service</h2>
                        <ul class="styled-ul">
                            <li>Deals with foundries like Global foundries, TSMC and SMC etc.</li>
                            <li>Offers a cost competitive service for aggregating blocks/IPs from within Pakistan.</li>
                            <li>Minimum area MPW block Size would be bought from foundries and offered in smaller sub-blocks to academic institutions.</li>
                        </ul>
                    
                    <h2>Design Tools and Training</h2>
                        <ul class="styled-ul">
                            <li>Acquire academic EDA licenses for SoC design.</li>
                            <li>Offers training in the use of the design tools.</li>
                </div>
            </div>
            <div class="row">
                
                <div class="col-8 mx-auto">
                    <br>
                    <br>
                    <center><h3>MERL System-on-Chip Services</h3></center>
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/struct.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/gallery2.jpg';
   $bannerheading = 'About Us';
   @include('master-with-short-banner.php');   
?>
   