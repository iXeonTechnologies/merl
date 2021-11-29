<?php ob_start();?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<style>

    p{
    font-size: 15px !important;
    }
    
    .col-12.mx-auto.wow.fadeInUp {
        POSITION: relative;
        left: 102px;
    }
        
    .box-wrapper-1{
        background-color: #4284f4;
        padding: 20px;
        width: 300px;
        border-radius: 20px;
        height: 329px;
    }
    
    .box-wrapper-2{
        background-color: #ea4335;
        padding: 20px;
        width: 300px;
        border-radius: 20px;
    	height: 329px;  
    	position: relative;
    	right: 20px;  
    }
    
    .box-wrapper-3{
        background-color: #34a852;
        padding: 20px;
        width: 300px;
        border-radius: 20px;
        position: relative;
        right: 40px;
    }
    
    .box-heading {
    	    text-align: center;
    	    color: white;
    	    padding-top: 5px;
    }
    
    .box-content {
        background-color: white;
        text-align: center;
        font-size: 18px;
        border-radius: 20px 20px 0px 0px;
        padding: 10px;
        height: 230px;
    }
    
     @media only screen and (max-device-width: 480px) {
    .box-wrapper-2{
        background-color: #ea4335;
        padding: 20px;
        width: 300px;
        border-radius: 20px;
    	height: 329px;  
    	position: relative;
    	right: 0px;
    }
    
    .box-wrapper-3{
        background-color: #34a852;
        padding: 20px;
        width: 300px;
        border-radius: 20px;
    	position: relative;
    	right: 0px;    
    }
.col-12.mx-auto.wow.fadeInUp {
    POSITION: relative;
    left: 0px;
} 
    }
   


</style>
	<section class="about-us-area mt-50">
        <div class="container">
            <div class="row">
                    
                        
        <div class="col-12 mx-auto wow fadeInUp" data-wow-delay="100ms">   

            <div class="container">
		        <div class="row">

				<div class="box-wrapper-1">
					<div class="box-content">
						<p>Our Vision is to grow and build the research and development of semiconductor technologies in Pakistan by training undergraduate and graduate students in the various areas of micro-electronics.</p>
					</div>
					<div class="box-heading">
						<h1>VISION</h1>
					</div>
				</div>



				<div class="box-wrapper-2">
					<div class="box-content">
						<p>	Invest in developing IC design skills with local universities and enabling this infrastructure in cloud which will allow building an IC design & development platform.</p>
					</div>
					<div class="box-heading">
						<h1>STRATEGY</h1>
					</div>
				</div>

	
				<div class="box-wrapper-3">
					<div class="box-content">
						<p>Work with local Universities in Pakistan to establish MERL and develop a core team of researchers focused on the development of new core architecture based on RISC-V ISA for AI and machine learning.</p>
					</div>
					<div class="box-heading">
						<h1>GOAL</h1>
					</div>
				</div>
			
		</div>
	</div>
                        
                       <!-- <center><h3>Vision</h3></center></br>
                            <p>Our Vision is to grow and build  the semiconductor  business and industry in Pakistan by training undergraduate and graduate students in the various areas of micro-electronics.</p>
                        <center><h3>Strategy</h3></center></br>
                            <ul class="site-block-check">
                                  <li>Invest in developing IC design skills with local universities.</li>
                                  <li>Enable the IC design infrastructure in cloud, in addition to locally.</li>
                                  <li>Build a design services/ IP development business model.</li>
                            </ul>
                            <center><h3>Goal</h3></center></br>

                                  <ul class="site-block-check">
            <li>Work with local Universities in Pakistan to establish MERL.</li> 
<li>Develop a core team of researchers focused on the development of new core architecture based on RISC –V  ISA  for AI and machine learning.</li>


            </ul>-->
                </div>
            </div>
            </div>
        </section>


<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/gallery5.jpg';
   $bannerheading = 'Vision & Strategy';
   @include('master-with-short-banner.php');   
?>
   