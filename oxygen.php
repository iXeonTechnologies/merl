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
            <div class= "col-12">
            

                <p>Oxygen is a student-focused, open-source, educational, and web-based RISC-V Instruction Set
Simulator. Oxygen supports I-Extension, IM-Extension and IMC-Extension together. Oxygen was
mainly built for education purposes so that the students who want to learn about the RISC-V
Instruction Set Architecture can benefit from it. A user can write the RISC-V instructions in the
editor interface and can simulate these instructions by observing the changes in Register and
Memory tabs. <br/>There are a variety of display settings for Register and Memory tabs. Oxygen
provides an intelligent editor for the user to write their code using RISC-V assembly which is
helpful in a way such that if the user enters a wrong instruction, it can detect the error and inform
it to the user even before it is sent for interpretation. It also includes another interesting feature
that decodes the instruction into binary, breaks those binary bits according to the instruction
architecture, and shows its distribution on the screen. This feature can greatly help the students
who are new to RISC-V and are trying to get familiar with its architecture. <br/>The UI/UX of the
Oxygen simulator is flexible for the novice learner which provides great user experience due to its
user-friendly GUI design. Oxygen can also be used for the counter verification of instruction’s
decoding and execution of assembled code.</p>
            <div id="overlay"></div>
            <div id="overlayContent" align="center">
                <img id="imgBig" src="" alt="" style="max-width:1200px; width:100%;"/>
            </div>
            <div>
              <img class="imgSmall col-2"  style="width:100%; height:100%;"  src="/img/projects/ox1.png?q=4" />
              <img class="imgSmall col-2"  style="width:100%; height:100%;" src="/img/projects/ox2.png?q=4" />
             
              
                
            </div>
     </div>
   
    </div>
    </section>
    <div id="myModal" class="modal">
      <span class="close" id='mclose'>&times;</span>
        <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>
</div>


<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/bg-1.jpg';
   $bannerheading = 'Oxygen Simulator';
   @include('master-with-short-banner.php');   
?>
   