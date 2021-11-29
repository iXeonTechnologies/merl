<?php ob_start();?>
<style>
    
.section-heading {
    position: relative;
    z-index: 1;
    margin-bottom: 80px !important;
    max-width: 801px !important;
}

</style>
<section class="about-us-area mt-30 section-padding-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>OpenLane Tool Workshop</h3>
                    </div>
                    <p>
                       OpenLane is an automated RTL to GDSII flow for design exploration and optimization that uses OpenROAD, Yosys, Magic, Netgen, Fault, OpenPhySyn, CVC, SPEF-Extractor, CU-GR, Klayout, and custom methodology scripts. The flow covers the entire ASIC implementation process, from RTL to GDSII. Micro Electronics Research Lab conducting a workshop on OpenLane Tools in collaboration with the <a href="https://osfpga.org/" target="_blank">Open-Source FPGA Foundation</a> and support of <a href="https://Paklaunch.com" target="_blank">Paklaunch.com</a>. This workshop is specifically aligned for Pakistani Engineering undergrad and graduate students and faculty who have an Electrical/Electronics background. It will enable you to design your own chip using the open-source tool "OpenLane" so that you can participate in Tapeout Pakistan. The workshop is entirely free of charge. 
                    </p>
                    <ul>
                    <li>Day 1: Introduction to APR, OpenLane, and Sky130 process design kit (PDK)</li>
                    <li>Day 2: Getting started with OpenLane and CMOS</li>
                    <li>Day 3: Register Transfer Level(RTL) Synthesis and Static Timing Analysis(STA)</li>
                    <li>Day 4: Floorplan+PDN</li>
                    <li>Day 5: Placement</li>
                    <li>Day 6: Clock Tree Synthesis(CTS)</li>
                    <li>Day 7: Routing</li>
                    <li>Day 8: Final steps towards GDS</li>
                    </ul>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                   
                </div>
            </div>
         
        </div>
    </section>

	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/gallery2.jpg';
   $bannerheading = 'About Us';
   @include('../master-without-banner.php');   
?>
   