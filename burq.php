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
            <div class= "col-sm-12 col-md-12 col-lg-6 col-xl-7">
           

                <p>BURQ (برق) IDE is a RISCV core simulator. It simulates the working and testing of any 32,
64-bit RISC V core on I, M, C and V extension support. The idea is that a core (either
written in chisel or Verilog) could be tested via the ide automatically without setting up
custom compilers or setting paths to the text file and writing scripts, making the entire process automated. Furthermore essential features of the ide like error correction find and
replace and more are added for ease of use for the end-user. It supports regression testing
for RISC V processors so that the user can verify if their core is working optimally.</p>
            
     </div>
     <div class= "col-sm-12 col-md-12 col-lg-6 col-xl-5">
         <div id="overlay"></div>
            <div id="overlayContent" align="center">
                <img id="imgBig" src="" alt="" />
            </div>
            <div class="row">
                <div class="col-12">
                    <img class="imgSmall col-12"  style="width:100%; height:100%;"  src="/img/projects/buq_logo.png" />
                </div>
            </div>
            <div class="row mt-15">
               <div class="col-12">
                    <img class="imgSmall col-12"  style="width:100%; height:100%;"  src="/img/projects/burq_ide.png" />
                </div>
            </div>
     </div>
    </div>
    </section>
</div>
	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'BURQ IDE';
   @include('master-with-short-banner.php');   
?>
   