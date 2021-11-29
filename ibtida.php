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
                <div class= "col-sm-12 col-md-12 col-l-8 col-xl-6">
                
                    <h3>Ibtida System on a Chip</h3>
                    <p>
                        Ibtida - ابتدا means "The Beginning", this System on a Chip (SoC) is the start of many RISC-V based
SoCs to come. It is the first CHISEL-based chip to be taped out from Pakistan, and has been designed
by Muhammad Hadir Khan, Sajjad Ahmed, and Usman Zain; engineering graduate and
undergraduate students respectively. The physical layout of the design is achieved by Aireen Amir Jalal, who is also an engineering graduate. Ibtida is a simple SoC, with GPIO as a peripheral,
external instruction and data memories, connected with the TileLink interconnect. It is built
around RISC-V based 5 stage pipelined core Buraq-Mini, all developed from scratch using
CHISEL HCL.</p>
<h4>FEATURES:</h4>
<ul class="list-group">
<li class="list-group-item">RV32IM extension support.</li>
<li class="list-group-item">5 stage pipelined core.</li>
<li class="list-group-item">Separate instruction and data memories (each 256 Bytes).</li>
<li class="list-group-item">TileLink Un-Cached Lightweight (TL-UL) Bus Protocol.</li>
<li class="list-group-item">GPIO peripheral with 30 I/Os connected to the I/O pads.</li>
</ul>
                    
                     <!--<h3>Team Members</h3>
                    <ul>
                        <li><a href="/member.php?id=3">Hamza Shabbir</a></li>
                        <li><a href="/member.php?id=12">Wajeh ul Hasan</a></li>
                        <li><a href="/member.php?id=16">Zain Rizwan Khan</a></li>
                        <li><a href="/member.php?id=4">Zeeshan Rafique</a></li>
                    </ul>-->
    
                </div>
             <div class= "col-sm-12 col-md-12 col-l-4 col-xl-6">
                 <img src="/img/projects/ibt_design.jpg" />
             </div>
        </div>
    </section>
</div>
	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'IBTIDA (ابتدا)';
   @include('master-with-short-banner.php');   
?>
   