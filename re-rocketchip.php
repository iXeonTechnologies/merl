<?php ob_start();?>
<style>
    
      section {
        margin-top: 90px;
        margin-bottom: 60px;
    }

</style>
    <div class="container">  <section>
        <div class="row">
            <div class= "col-sm-12 col-md-12 col-l-9 col-xl-7">
          
                    <h2>Overview</h2>
<ul>
<li>
    Create Micro-Architecture and Software Specification (MASS) Document
    designed through our methodology that would enable developers or
    enthusiasts to modify Rocket-Chip’s modules and create an Intellectual
    Property (IP) using it.
</li>
</ul>
<h3>Software Methodology</h3>
<ul class="styled-ul">
        <li>Object Oriented Programming (OOP) principles and high-level Functional
        Programming concepts were used to better understand the structure of the
        Rocket-Chip code.
        </li>
        <li>Flowcharts, UML Class Diagrams and Block Diagrams were made to
        understand the in-depth functionality of each module inside the Rocket-Chip.</li>
</ul>
<h3>Complexity of Task</h3>
<ul class="styled-ul">
    <li>Rocket-Chip contains 328 source files of Scala in 23 directories, and 33,427
    total lines of Scala code.</li>
    <li>To the best of our knowledge there is no previous MASS Document of
    Rocket-Chip available for micro-architecture as well as software level
    understanding.</li>
</ul>
<h3>Future Research</h3>
<ul class="styled-ul">
    <li>Integrate peripherals with the Rocket-Chip SoC that are not available in the
        Rocket-Chip repository which includes GPIO, I2C, JTAG etc.</li>
    <li>Creates parameterizable Micro-Architecture.</li>
    <li>Extend to include the any Extensions.</li>
</ul>

            
     </div>
       <div class= "col-sm-12 col-md-12 col-l-3 col-xl-5">
           <img src="img/projects/rocket.jpg" />
       </div>
    </div>
    </section>
</div>
	
	

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'Rocket Chip';
   @include('master-with-short-banner.php');   
?>
   