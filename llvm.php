<?php ob_start();?>
<style>
    
      section {
        margin-top: 90px;
        margin-bottom: 60px;
    }
   

</style>
    <div class="container">
        <div class="row">
            <div class= "col-12">
            <section>
<p>
    We are working on the development of a GNU C compiler, which is capable of
reinforcing vector support. As a GCC compiler does not support vector support currently,
switching to LLVM (Low-level virtual machine) is a possible solution. Two groups of researchers
have been allocated; one is dedicated to exploring the development of LLVM compiler, while the
other is using their expertise of Verilog, system Verilog and chisel for the development for FIRRTL
(Flexible Intermediate Representation for RTL); a hardware compiler framework that performs
optimization of Chisel-generated circuits and supports user-defined circuit transformation.</p>
            </section>
     </div>
    </div>
</div>
	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'LLVM Compiler Research';
   @include('master-with-short-banner.php');   
?>
   