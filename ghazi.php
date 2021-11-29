<?php ob_start();?>
<style>
    
      section {
        margin-top: 90px;
        margin-bottom: 60px;
    }

</style>
    <div class="container">
        <section>
            <div class="row">
                <div class= "col-sm-12 col-md-12 col-lg-8 col-xl-6">
                    <h2>Ghazi System on a Chip</h2>
                    <p>
                        An SoC (System on a Chip) design for Google sponsored Open MPW shuttles for SKY130. The processor
core is the 3-stage version of the Buraq Core RV32IMC. The hardware implementation incorporates options
such as IRQ, Multiply, Divide and the compressed (16 bit) ISA for embedded applications. The SoC has
peripherals such as GPIO, UART, a platform level interrupt controller (PLIC) as well as a timer and a debug
module all connected using the Tilelink Interconnect and is going to be fabricated using a 130nm process in
collaboration with Efabless and SkyWater which will be funded by Google.
<h4>FEATURES:</h4>
<ul class="list-group">
<li class="list-group-item">Support for M extension with a single cycle "Fast" multiplier</li>
<li class="list-group-item">Separate instruction and data memories</li>
<li class="list-group-item">TileLink Un-Cached Lightweight (TL-UL) Bus Protocol</li>
<li class="list-group-item">32 GPIO with configurable interrupts and option for masked writing</li>
<li class="list-group-item">2 pin full duplex UART • RISC-V compliant interrupt controller</li>
<li class="list-group-item">64-bit timer with 12-bit prescaler and 8-bit step register</li>
<li class="list-group-item">JTAG Test Access Port (TAP) for debug</li>
</ul>
                    </p>
                    <!--<h3>Team Members</h3>
                    <ul>
                        <li><a href="/member.php?id=3">Hamza Shabbir</a></li>
                        <li><a href="/member.php?id=12">Wajeh ul Hasan</a></li>
                        <li><a href="/member.php?id=16">Zain Rizwan Khan</a></li>
                        <li><a href="/member.php?id=4">Zeeshan Rafique</a></li>
                    </ul>-->
                </div>
                <div class= "col-sm-12 col-md-12 col-lg-4 col-xl-6">
                    <img src="img/projects/ghz_design.jpg" />
                </div>
        </div>
     </section>
</div>
	
	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'GHAZI غازی';
   @include('master-with-short-banner.php');   
?>
   