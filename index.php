<?php ob_start();?>

    <link rel="stylesheet" href="OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\assets\owl.carousel.css">
	<link rel="stylesheet" href="OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css">
	<style>
		.news{
			padding: 10px;
            border: 1px solid #e0e0e0;
            height:400px;
		}
		.news-text{
			padding: 10px;
			padding-top: 20px;			
		}
		.news-img img{
		    border: 1px solid #e0e0e0;
            width: 343px;
            height: 200px;
		}
		.news-text p {
            font-size: 12.9px;
        }
        section.home-news {

            margin-bottom: 75px;
        }
       .divider{
            width: 5rem;
            height: .3rem;
            background-color: #152f4f;
            margin-bottom: 0.5rem;
            display:block;
            
       }
       h3.header-title{
           color:#0081d0;
       }
      
	</style>
	
    
    	<section class="home-news mt-10">
        &nbsp;
        &nbsp;
		<div class="container">
		    <div class="header-left-components">
				<div class="divider"></div>
				<h3 class="header-title">Our Projects</h3>
			</div>
			<div class="newsSlider  owl-carousel owl-theme">
			    <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    			<a href="/ibtida.php"><img src="img/projects/ghazi_prj_home.jpg"></a>
			    		</div>
			    		<div class="news-text">
			    			<h5>IBTIDA(ابتدا):</h5>
			    			<p>
		    			       <a style="color:#2d9ed9;" href="/ibtida.php">Ibtida (ابتدا)</a> is the first CHISEL based chip to be taped out from Pakistan.It is a simple SoC with GPIO as a peripheral and external Instruction, Data memories, connected with the Tilelink interconnect. It is based on a RISC-V based 5 stage pipelined core Buraq-Mini all developed from scratch using CHISEL HCL.
                            <a  href="/ibtida.php">read more</a></p>
			    			
			    		</div>
			    	</div>
			    </div>
	    	     <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    			<a href="/ghazi.php"><img src="img/projects/ghazi_prj_home.jpg"></a>
			    		</div>
			    		<div class="news-text">
			    			<h5>GHAZI(غازی):</h5>
			    			<p>
		    			       <a style="color:#2d9ed9;" href="/ghazi.php">GHAZI (غازی)</a>, a SoC (System on a Chip) design for Google sponsored Open MPW shuttles for SKY130. The processor core is the 3-stage version of the Buraq Core RV32IMC. The hardware implementation incorporates options such as IRQ, Multiply, Divide and the compressed (16 bit) ISA for embedded applications. <a  href="/ghazi.php">read more</a>
                            </p>
			    			
			    		</div>
			    	</div>
			    </div>
			     <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    			 <a  href="llvm.php"><img src="img/projects/ghazi_prj_home.jpg"></a>
			    		</div>
			    		<div class="news-text">
			    			<h5>LLVM & FIRRTL/ BURQ:</h5>
			    			<p>
		    			       <a style="color:#2d9ed9;" href="llvm.php">LLVM</a> (Low level Virtual Machine) a compiler which reinforces vector support. <a href="llvm.php">FIRRTL</a>, a hardware compiler framework that performs optimization of Chisel-generated circuits and supports user-defined circuit transformation. <a  href="/llvm.php">read more</a>
                            </p>
			    			
			    		</div>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    		 <a  href="re-rocketchip.php"><img src="img/projects/ghazi_prj_home.jpg"></a>
			    		</div>
			    		<div class="news-text">
			    			<h5>Rocket Chip Reverse Engineering:</h5>
			    			<p>
		    			       We created Micro Architecture Software Specification (MASS) document by taking understanding of <a style="color:#2d9ed9;" href="re-rocketchip.php">Rocket Chip</a> code and Decode each module by using Scala and Chisel expertise.We creates Class Diagrams of each module of Rocket Chip and make hardware block Diagrams of Each Module of Rocket Chip. <a  href="/re-rocketchip.php">read more</a>
                            </p>
			    			
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>	
	</section>
	<section class="home-news mt-10">
        &nbsp;
        &nbsp;
		<div class="container">
		     <div class="header-left-components">
				<div class="divider"></div>
				<h3 class="header-title">Latest News</h3>
		    </div>
			<div class="owl-two owl-carousel owl-theme">
			    <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    			<img src="/img/news/ibtida_home.jpg" alt="Ibtida Launched">
			    		</div>
			    		<div class="news-text">
			    		    <h6>Ibtida (ابتدا) Project Launch:</h6>
                            <p class="card-text"  style="font-size:0.75rem;">We started our journey from scratch with RISC-v, an opensource ISA and opensource tools and technology to
tape out Pakistan’s first <a style="color:#2d9ed9;" href="/ibtida.php">Ibtida- (ابتدا)</a> SoC written in CHISEL.
                                <small><a href="/news.php">READ MORE</a></small>
                            </p>
                                
                            <p class="card-text"><small class="text-muted">- January 2021</small></p>
			    		</div>
			    	</div>
			    </div>
	    	      <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    			<img src="/img/news/ghazi_home.jpg" alt="Ghazi Launched">
			    		</div>
			    		<div class="news-text">
                          <h6>Ghazi (غازی) Project Launch:</h6>
                            <p class="card-text" style="font-size:0.75rem;">First ever RISC-V based tape out <a href="/ghazi.php" style="color:#2d9ed9;">GHAZI (غازی)</a> -SoC, written in Verilog, fabricated on 130nm SkyWater PDK.
                                <small><a href="/news.php">READ MORE</a></small>
                            </p>
                             <p class="card-text"><small class="text-muted">- December 2020</small></p>
			    		</div>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="news">
			    		<div class="news-img">
			    			<img src="/img/news/tmsc.jpg">
			    		</div>
			    		<div class="news-text">
			    			<h5>TSMC Collabration:</h5>
			    			<p>Usman Institute of Technology is the one of universities in Pakistan to have signed an NDA with <a href="https://www.tsmc.com/english" target="_blank">TSMC</a>.&nbsp;
			    			  <small><a href="/news.php">READ MORE</a></small>
                            </p>
                            <p class="card-text"><small class="text-muted">- December 2020</small></p>
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>	
	</section>
    <!-- ##### Top Feature Area Start ##### -->
    <!--<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-map"></i>
                                    <h5>Core and GPU Architecture</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-responsive"></i>
                                    <h5>Hardware Architectures for<br> Deep/Machine Learning</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center ">
                                    <i class="icon-message"></i>
                                    <h5>SoC designs based on open<br> source RISC-V</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!--<script src="OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\docs\assets\vendors\jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.js"></script>-->


<div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Good News!</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <a href="training.php"><img src="/img/news/home_modal.jpg?q=3" /></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    
<script>
    $(document).ready(function(){
       
        //setTimeout(showpanel, 2000);
    });
     function showpanel() {     
         $('#myModal').modal('show');
     }

    $(document).ready(function(){
       
        $('.newsSlider').owlCarousel({
    	    loop:true,
    	    margin:10,
    	    items:2,
            autoplay: true,
    	    autoplayTimeout:5000,
            autoplayHoverPause:true,
            dots : true,
              
              mouseDrag: true,
              singleItem: true,
              animateIn: 'fadeIn', 
              animateOut: 'fadeOut' 
    	});
    	$('.owl-two').owlCarousel({
    	    loop:true,
    	    margin:10,
    	    responsiveClass:true,
    	    responsive:{
    	         0:{
    	            items:1,
    	        },
    	        400:{
    	            items:1,
    	        },
    	        700:{
    	            items:2,
    	        },
    	        1000:{
    	            items:3,
    	        }
    	    }
    	});
    });
</script>
<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   @include('master.php');   
?>
   