<?php ob_start();?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<Style>
.news-item {
  font-size: 1rem;
  line-height: 1.5;
}


.news-item [id^=newsCollapse].collapse:not(.show) {
  display: block;
  height: 15.5rem;
  overflow: hidden;
}

.news-item [id^=newsCollapse].collapsing {
  height: 15.5rem;
}

.news-item a.newsAnchor.collapsed::after {
  content: '+ Show More';
}

.news-item a.newsAnchor:not(.collapsed)::after {
  content: '- Show Less';
}
h3{color:#00a9ec;}
</Style>
&nbsp;
&nbsp;

<center>
    <div class="NewsTop">
      <p>News & Events</p>
    </div>
</center>

<section class="my-5">
<div class="container">

      <!-- Grid row Ibtida-->
      <div class="row  news-item">
    
        <!-- Grid column -->
        <div class="col-lg-5">
    
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="/img/news/ibtida.jpg" alt="Itida">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-7">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Tech News</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>Ibtida (ابتدا) Project Launch</strong></h3>
          <!-- Excerpt -->
          <p class="collapse" id="newsCollapse-1" aria-expanded="false">
                Another good news, another tapeout, but this time for 𝐂𝐇𝐈𝐒𝐄𝐋 community.
                <br>We started our journey from scratch with RISC-V, an opensource ISA and opensource tools and technology to
tape out Pakistan’s first <a href="/ibtida.php">Ibtida-(ابتد)</a> SoC written in CHISEL. The journey has gone through micro-architecture, verification and finally the GDS generation, all by using open source
                tools.
                <br>Thanks to <a href="https://www.linkedin.com/company/google/" target="_blank">Google</a> and <a href="https://www.linkedin.com/company/fossi-foundation/" target="_blank">Free and Open Source Silicon (FOSSi) Foundation</a> 
                for free tapeouts, <a href="https://www.linkedin.com/company/skywater-technology-foundry" target_"_blank">Skywater</a>, <a href="https://www.linkedin.com/company/efabless-com/" target_"_blank">Efabless Corporation</a> for free 130nm PDKs, 
                University of California, Berkeley for RISC-V and  <a href="https://www.uit.edu" target="_blank">UIT Usman Institute of Technology</a>  for believing in us.
                <br>The Constructing Hardware in a Scala Embedded Language (CHISEL) is an open-source Hardware Construction language (HCL) that inherits the object-oriented functional aspects of Scala 
                for describing digital hardware, developed by <a href="https://www.linkedin.com/company/uc-berkeley/" target="_blank">University of California, Berkeley</a>.
          </p>
          <a role="button" class="btn btn-pink btn-md mb-lg-0 mb-4 newsAnchor collapsed" data-toggle="collapse" href="#newsCollapse-1" aria-expanded="false" aria-controls="newsCollapse-1"></a>
          <!-- Post data -->
          <p>by <a><strong>MERL UIT</strong></a>, Jan 01, 2021</p>
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row end Ibtida-->
    
      <hr class="my-5">
    
      <!-- Grid row Ghazi -->
      <div class="row  news-item">
    
        <!-- Grid column -->
        <div class="col-lg-7">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-space-shuttle" aria-hidden="true"></i> Tech News</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>Ghazi (غازی) Project Launch</strong></h3>
          <!-- Excerpt -->
          <p class="collapse" id="newsCollapse-2" aria-expanded="false">
              Through continuous perseverance, devotion and
selfless efforts of the entire team, we are pleased to announce a milestone achievement check:
              <br><br>
              "First ever RISC-V based SOC tape out"<br>Ghazi -SoC, written in Verilog, fabricated on 130nm SkyWater PDK.
              <br>This will be first ever RISC-V Processor tapeout from Pakistan. <br>Thanks to 
              <a href="https://www.linkedin.com/company/google/" target="_blank">Google</a>, <a href="https://www.linkedin.com/company/efabless-com/" target="_blank">Efabless Corporation</a>, <a href="https://www.linkedin.com/company/fossi-foundation/" target="_blank">Free and Open Source Silicon (FOSSi) Foundation</a> and <a href="https://www.uit.edu" target="_blank">Usman Institute of Technology</a> for this wonderful opportunity and platform. 
              <br><br>Let's embark to achieve new milestones in year 2021. <br><br>Happy New Year 2021!  
          </p>
          <a role="button" class="btn btn-pink btn-md mb-lg-0 mb-4 newsAnchor collapsed" data-toggle="collapse" href="#newsCollapse-2" aria-expanded="false" aria-controls="newsCollapse-2"></a>
          <!-- Post data -->
          <p>by <a><strong>MERL UIT</strong></a>, Dec 15, 2020</p>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-5">
    
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2" style="text-align:center">
         <img class="img-fluid" src="/img/news/ghazi.jpg" alt="Sample image" >
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
    
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row end Ghazi-->
    
      <hr class="my-5">
      
      <!-- Grid row TMSC-->
      <div class="row  news-item">
    
        <!-- Grid column -->
        <div class="col-lg-5">
    
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="/img/news/tmsc.jpg" alt="Itida">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-7">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></i> Event</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>TSMC Collabration</strong></h3>
          <!-- Excerpt -->
          <p class="collapse" id="newsCollapse-3" aria-expanded="false">
                <a href="https://www.uit.edu" target="_blank">UIT Usman Institute of Technology</a>, is the one of Universities in Pakistan to have signed an NDA with Taiwan Semiconductor Manufacturing Company (TSMC) in Collaboration with MERL-UIT.
                <br/>
                <a href="https://www.tsmc.com/english" target="_blank">TSMC</a> is the world's largest Semiconductor Foundry. TSMC provides an industry-leading specialty technologies portfolio that complements its advanced technology leadership. The company supports a thriving ecosystem of global customers and partners with the industry’s leading process technologies and portfolio of design enablement solutions to unleash innovation for the global semiconductor industry.
          </p>
          <!--<a role="button" class="btn btn-pink btn-md mb-lg-0 mb-4 newsAnchor collapsed" data-toggle="collapse" href="#newsCollapse-3" aria-expanded="false" aria-controls="newsCollapse-3"></a>-->
          <!-- Post data -->
          <p>by <a><strong>MERL UIT</strong></a>, Dec 20, 2021</p>
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row end TMSC--------------->
    
    <hr class="my-5">
     <!-- Grid row RISCV Presentation -->
      <div class="row  news-item">
    
        <!-- Grid column -->
        <div class="col-lg-7">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Event</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>MERL-UIT joins RISC-V International Summit</strong></h3>
          <!-- Excerpt -->
          <p class="collapse" id="newsCollapse-4" aria-expanded="false">
		    	MERL-UIT, has successfully presented tutorial on Reverse Engineering of Rocket Chip in the 3<sup>rd</sup> annual <a href="https://www.linkedin.com/company/risc-v-international/"target="_blank">RISC-V International</a> summit, San Jose, California, USA. The program featured three days of talks around architectures, hardware, software, tools, verification and security, and case studies from the global RISC-V community.
                <br>
                 Technology companies and research institutions shared notable product updates, projects, and implementations, and discussed the role of the RISC-V instruction set architecture (ISA) in driving next generation of hardware, software, and intellectual property (IP). The event also featured an online exhibition hall and networking opportunities. 
                <br>
          </p>
          <a role="button" class="btn btn-pink btn-md mb-lg-0 mb-4 newsAnchor collapsed" data-toggle="collapse" href="#newsCollapse-4" aria-expanded="false" aria-controls="newsCollapse-4"></a>
          <!-- Post data -->
          <p>by <a><strong>MERL UIT</strong></a>, Dec 10, 2020</p>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-5">
    
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2" style="text-align:center">
         <img class="img-fluid" src="/img/riscv/modal.jpg" alt="Sample image" >
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
    
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row end RISCV Presentation------------------------>
    
    <hr class="my-5">
    <!-- Grid row Alliance-->
      <div class="row  news-item">
    
        <!-- Grid column -->
        <div class="col-lg-5">
    
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="/img/bg-img/news-3.png" alt="Itida">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-7">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></i> Event</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>MERL Becomes member of CHIPS Alliance</strong></h3>
          <!-- Excerpt -->
          <p class="no-collapse" id="newsCollapse-alliance" aria-expanded="false">
            MERL has now become a part of Chips Alliance.</br>
            For futher details please visit the link below:</br>
            <a href="https://chipsalliance.org/" target="_blank">https://chipsalliance.org/</a>
          
          </p>
          <!-- Post data -->
          <p>by <a><strong>MERL UIT</strong></a>, Feb 05, 2020</p>
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row end Alliance-->
      
    <hr class="my-5">
    <!-- Grid row Alliance-->
      <div class="row  news-item">
        <!-- Grid column -->
        <div class="col-lg-10">
    
          <!-- Category-->
            <small class="mb-3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></i> Event</small>
          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>RISC-V Tech Symposium</strong></h3>
          <!-- Excerpt -->
          <p class="no-collapse" id="newsCollapse-5" aria-expanded="false">
            Dr. Syed Roomi Naqvi visited the 2 day RISC-V Tech Symposium which was held on Dec 10,11, 2019. Yunsup Lee, CTO of SiFive did specifically mentioned the MERL-UIT Lab and how much he was impressed by the passion of the students there. 
              The key takeaways from the Symposium are: <br>
                1. RISC-V is a movement which has garnered a lot of momentum and passion, the energy was palpable  and it is paradigm is open source  EVERYTHING. As such it is very well suited for MERL research.<br>
                2. RISC-V has got multiple high level backers like Western Digital, Samsung, Ali Baba etc.<br>
                3. RISC-V is all about open source hardware and co-optimization of hardware and software.
            
            <div>
              <span id="text">
                4. The opportunities for innovations and collaboration are numerous literally on all the fronts compute from Iot, to Cloud to intelligence computing. Everything is open.<br>
                5. RISC-V as such presents a unique opportunity for MERL UIT, specifically and in general for Pakistan, their is a "SEISMIC SHIFT" happening in the compute eco system and we can be part of it.<br>
                6. The spirit of collaboration is rampant since the key theme is open source , people are ready to share, the learning opportunities are huge.<br>
            </span>
            </div>
          </p>
          <!--<a role="button" class="btn btn-pink btn-md mb-lg-0 mb-4 newsAnchor collapsed" data-toggle="collapse" href="#newsCollapse-5" aria-expanded="false" aria-controls="newsCollapse-5"></a>-->
          <!-- Post data -->
          <p>by <a><strong>MERL UIT</strong></a>, Dec 10, 2019</p>
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-5">
    
          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
           
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
    
        </div>
        <!-- Grid column -->
    
    
      </div>
      <!-- Grid row end Alliance-->
    
    
</div>
</section>
<!-- Section: Blog v.1 -->
<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerheading = 'News & Events';
   @include('master-with-short-banner.php');   
?>
   