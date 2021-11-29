<?php ob_start();?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<style>
<?php
 $json = 
    '[
        {
            "Timestamp": "12/18/2020 22:25:40",
            "Name": "Muhammad Hadir Khan",
            "Designation": "Research Associate",
            "Picture": "/img/team/hadir_khan.jpg?q=1",
            "About": "Bachelor\'s in Electrical Engineering (Computer Systems) with keen interest in developing the open-source ecosystem of processor designing in Pakistan.",
            "Skills": "Chisel, FPGA, Git, GitHub, C, Linux, Bash Scripting",
            "Projects": "Buraq-mini processor, Ibtida System on a Chip, TileLink",
            "Interests": "Hardware-Software Co-Development, Operating Systems, VLSI design.",
            "Github": "hadirkhan10",
            "Lnkedin": "https://www.linkedin.com/in/muhammad-hadir-khan-771941162/",
            "Email": "hadirkhan10@gmail.com"
        },
        {
            "Timestamp": "12/18/2020 22:52:37",
            "Name": "Hamza Shabbir",
            "Designation": "Research Associate",
            "Picture": "/img/team/hamza_shabbir.jpg?q=1",
            "About": "I am the Research Associate with 1+ year of experience in chip designing and verification.",
            "Skills": "Hardware Description Language:\nVerilog\nSystem-Verilog",
            "Projects": "None",
            "Interests": "RISC-V Architecture Technology",
            "Github": "hamzashabbir517",
            "Lnkedin": "https://www.linkedin.com/in/hamza-shabbir-527824196/",
            "Email": "shabbirhamza517@gmail.com"
        },
        {
            "Timestamp": "12/18/2020 22:54:25",
            "Name": "Uzair Khan",
            "Designation": "Research Associate ",
            "Picture": "/img/team/uzair_khan.jpg?q=1",
            "About": "I am Research Associate and currently working on Reverse engineering of Rocket chip at Micro Electronic Research Lab (MERL).As a Computer Engineer I find myself interested in technologies like the evolution of Big Data, Data Science, AI, Deep learning and Machine Learning.",
            "Skills": "Specialties: Newbie in Data Science/Machine Learning/Big Data\nLanguages: Scala, CHISEL, HTML,  CSS, Java, Python and SQL.\nPlatforms: Git, Bootstrap\nHobbies: Writing articles related to new technologies",
            "Projects": "Reverse Engineering of Rocket Chip",
            "Interests": "Rocket Chip SoC Generator \nProcessor Development\nArtificial Intelligence \nDeep Learning and Machine Learning Algorithms\n",
            "Github": "Uzair540",
            "Lnkedin": "https://www.linkedin.com/in/uzair-khan-60b5b2191/",
            "Email": "uzair@uit.edu"
        },
        {
            "Timestamp": "12/18/2020 23:18:39",
            "Name": "Zeeshan Rafique",
            "Designation": "Research Intern",
            "Picture": "/img/team/zeeshan_rafique.jpg?q=1",
            "About": "Bachelors in Computer System Engineering form Usman Institute of Technology, working in the field of RISC-V since Sept-2019.",
            "Skills": "RISC-V Architecture, SystemVerilog/Verilog, FPGA, Git, Linux",
            "Projects": "Buraq processor, Shaheen SoC",
            "Interests": "Low power computing, Parallel computing, Computer Architecture",
            "Github": "zeeshanrafique23",
            "Lnkedin": "https://www.linkedin.com/in/zeeshanrafique23/",
            "Email": "zrafique@uit.edu"
        },
        {
            "Timestamp": "12/18/2020 23:16:59",
            "Name": "Muhammad Waleed Waseem",
            "Designation": "Research Intern",
            "Picture": "/img/team/walid_waseem.jpg?q=1",
            "About": "I am an undergraduate Computer System Engineering student working as an intern at MERL for over an year. Most of my experience has been in GCC (GNU C Compiler) or more precisely towards compiler side i had work on the Reverse Engineering of Rocket chip as well. I wanted to be a good Embedded System Developer. Apart from my professional pursuits, I like travelling, designing and being aware about socio-political situations.",
            "Skills": "A good command on CHISEL and C language. Furthermore, i have good command on GCC",
            "Projects": "Burq Backend , Reverse Engineering of Rocket Chip",
            "Interests": "My interest is more towards the compiler and operating system side want to explore LLVM. I’m highly intrested in writing drivers for devices.",
            "Github": "Muhammadwaleed99",
            "Lnkedin": "https://www.linkedin.com/in/waleed-waseem-a374051aa/",
            "Email": "mwwaseem@uit.edu"
        },
        {
            "Timestamp": "12/18/2020 23:32:10",
            "Name": "Sajjad Ahmed",
            "Designation": "Research Intern",
            "Picture": "/img/team/sajjad_ahmed.jpg?q=1",
            "About": "I sajjad Ahmed, am a self motivated and hard-working person with flexible nature. I love to do work in cooperative groups or environment and can adjust myself in any field of my interest very easily. Right now I am studying computer systems engineering from Usman institute of technology. My field of interest is open source hardware development using RISCV ISA.",
            "Skills": "Chisel, RISCV ISA, logisim, digital logic designs, verilog",
            "Projects": "Ibtida system on chip",
            "Interests": "Embedded systems, RISCV ISA",
            "Github": "sajjadahmed677",
            "Lnkedin": "https://www.linkedin.com/in/sajjad-ahmed-b43bb8165",
            "Email": "SAHMED@UIT.EDU"
        },
        {
            "Timestamp": "12/19/2020 13:58:29",
            "Name": "Aireen Amir Jalal",
            "Designation": "Research Assistant",
            "Picture": "/img/team/aireen.jpg?q=1",
            "About": "I am an Electrical Engineering graduate from DHA Suffa University, Karachi, Pakistan and a Gold Medalist in my batch. Having a keen interest in research oriented studies specifically in the field of VLSI design and deep learning based applications, has led me to begin my professional career as an APR Engineer at MERL-UIT.",
            "Skills": "Physical Design-APR Engineer",
            "Projects": "Ibtida system on chip",
            "Interests": "Artificial Intelligence, APR, SoC design, Deep Learning",
            "Github": "AireenAmirJalal",
            "Lnkedin": "https://www.linkedin.com/in/aireen-amir-jalal-b123141a3/",
            "Email": "aireenamirjalal98@gmail.com"
        },
        {
            "Timestamp": "12/20/2020 23:30:40",
            "Name": "Muhammad Asad Hussain",
            "Designation": "Hardware Team Lead",
            "Picture": "/img/team/asad_hussain.jpg?q=1",
            "About": "Engr. Muhammad Asad Hussain has 7+ years of experience in field of Academia and Industry.\nEngr. Hussain is currently serving as Senior lecturer in the Department of Electrical Engineering, UIT, Karachi.\nAlso he is co-founder of a startup named Brandmefy that provides Digital signage solutions. He is also serving as Hardware Team Lead in Micro Electronics Research Lab (MERL) the first research lab that aims to design first digital processor of Pakistan that is based on open source RISC-V technology.\nEngr. Hussain has also contributed the community with his technical skills that include projects like Blind Stick, Vertical Farming, etc.\nEngr. Hussain is an IoT certified from University of California, Irvine. He has done various projects in IoT as well.\nEngr. Hussain has research interest in the field of Embedded Systems and Deep tech. He has served as visiting faculty in many Institutes. Also conducted various workshops and Seminars on Technology. ",
            "Skills": "Verilog, System Verilog (SV), FPGA, Verilator, UVM",
            "Projects": "Initialization of Verilator, Setup of MERL-Servers",
            "Interests": "Computer Architecture, Designing and Verification of Cores/SoC",
            "Github": "mahussain",
            "Lnkedin": "https://www.linkedin.com/in/asadjaffri/",
            "Email": "mahussain@uit.edu"
        },
        {
            "Timestamp": "12/20/2020 23:38:21",
            "Name": "Muhammad Shahzaib",
            "Designation": "Research Intern",
            "Picture": "/img/team/m_shahzaib.jpg?q=1",
            "About": "Muhammad Shahzaib is an undergraduate student of software engineering. Currently working on Pakistan\'s first open-source processor based on RISC-V architecture at Micro Electronics Research Lab UIT (MERL UIT).\nReally a passionate programmer with great command on Python programming Language, web designing, web development, desktop Applications.\n\nVootls Coordinator at IEEE UIT Student Branch.\nInternee at MERL UIT.",
            "Skills": "Command on python language\nWoking on scala\nChisel\nWeb designing\nWeb development\n",
            "Projects": "Single cycle \n5 stage pipe line \nReverse Engineering of rocket chip",
            "Interests": "Programming \nSoftwares",
            "Github": "Shahzaib2028",
            "Lnkedin": "https://www.linkedin.com/in/mohammad-shahzaib-8325b3178/",
            "Email": "mohammadshahzaib2028@gmail.com"
        },
        {
            "Timestamp": "12/20/2020 23:47:10",
            "Name": "Usman Zain ul Abedin",
            "Designation": "Research Intern",
            "Picture": "/img/team/usman_zain.jpg?q=1",
            "About": "I am a computer science student, a technology enthusiast and a research intern at MERL where I\'m developing a software platform for our open source system or chips along with my team members. \nI am also a web and mobile developer and have worked mostly as freelancer. \nMy goal is to make develop and be part of an open source processor designing ecosystem in Pakistan.",
            "Skills": "Languages i know: c++, c#, java, python\nI am also a web and mobile developer. At merl, I\'ve done hardware design in chisel. I am also a linux enthusiast and have good command over it.",
            "Projects": "Contribution in Ibtida SoC. Created testbenchs in c++ and verilog for simulation of Ibtida SoC. Management and setup of merl uit servers.",
            "Interests": "Embedded systems software development.",
            "Github": "usmnzain",
            "Lnkedin": "https://www.linkedin.com/in/usman-zain-ul-abedin-17779894",
            "Email": "uszain@gmail.com"
        },
        {
            "Timestamp": "12/21/2020 0:08:08",
            "Name": "Raheel Siddiqui",
            "Designation": "Research Intern",
            "Picture": "img/team/raheel_sid.jpg?q=1",
            "About": "Raheel Siddiqui is an undergraduate 5th-semester software engineering student. Currently working and experiencing on Pakistan’s first open-source processor based on RISC-V architecture at MERL UIT.\nReally passionate programmer with expertise in Data Science, Desktop Applications, Automation, Flutter Development.\n\nDSC Lead at Google Developers.\nGeneral Secretary at IEEE UIT SB.\nCore Team Lead at PyTroops community.\n\nSeems satisfied by being diligent and thinking out of the box. ",
            "Skills": "Data Analysis, desktop app development, backend development, automation engineering, Web Scrapping/ Data Mining, Flutter app development, Chisel, Project management, Git/ Github, Graphic designing Adobe tools.",
            "Projects": "Single Cycle, 5 stage pipeline, BURQ, Social media team",
            "Interests": "Software Development",
            "Github": "rawheel",
            "Lnkedin": "https://www.linkedin.com/in/raheel-siddiqui-6055b5178/",
            "Email": "rsiddiqui@students.uit.edu"
        },
        {
            "Timestamp": "12/21/2020 0:19:16",
            "Name": "Hafiz Wajeh Ul Hasan",
            "Designation": "Physical Design Engineer",
            "Picture": "img/team/wajeh_hasan.jpg?q=1",
            "About": "I completed my bachelors in Electrical Engineering with majors in Electronics. I have been part of MERL for 6 months working as an APR Engineer.",
            "Skills": "APR skills with opensource tools like YOSYS, TRITON, OPENSTA, MAGIC etc",
            "Projects": "Ghazi system on chip tape-out using sky130nm technology",
            "Interests": "My primary interest lies in Integrated Circuits, chiefly Digital Design ",
            "Github": "wajehulhasan",
            "Lnkedin": "https://www.linkedin.com/in/wajeh-ul-hasan-48a206178",
            "Email": "whassan@uit.edu"
        },
        {
            "Timestamp": "12/21/2020 0:19:22",
            "Name": "Shahzaib Kashif",
            "Designation": "Research Intern",
            "Picture": "/img/team/shahzaib.jpg?q=1",
            "About": "A passionate nerd, who likes exploring new adventures,  who does things in his own unique way, and is focused towards his goals. ",
            "Skills": "Python\nDjango\nCHISEL\nScala\nHTML & CSS\nJavascript\nFlutter",
            "Projects": "Project Azm-e-Nau\nRISC-V Compressed Assembler\nReverse Engineering of Rocket-Chip",
            "Interests": "Design\nDecoding (Reverse Engineering)\nDevelopment\nAutomation\n/Everything else that have code n adventure.",
            "Github": "shahzaibk23",
            "Lnkedin": "https://www.linkedin.com/in/shahzaib-kashif-2655a1178/",
            "Email": "shazaib@students.uit.edu"
        },
        {
            "Timestamp": "12/21/2020 1:12:16",
            "Name": "Waleed Muhammad Sohail",
            "Designation": "Research Intern",
            "Picture": "img/team/waleed_sohail.jpg?q=1",
            "About": "I am a Software Engineering student driven by my passion of learning the working behind softwares and computing components.",
            "Skills": "Python\nChisel\nQT",
            "Projects": "Risc-V single cycle core\nRISC-V 5-stage pipeline core\nBurq IDE",
            "Interests": "Machine learning\nSoftware developement ",
            "Github": "waleeds1",
            "Lnkedin": "https://www.linkedin.com/in/waleed-sohail-6805a1178/",
            "Email": "waleedsohail32@gmail.com"
        },
        {
            "Timestamp": "12/22/2020 10:42:42",
            "Name": "Syed Muhammad Ibad ur Rahman",
            "Designation": "Physical Design and Analog Layout Engineer",
            "Picture": "img/team/ibad_ur_rehman.jpg?q=1",
            "About": "I am interested in IC design and Multicore Architectures",
            "Skills": "Physical Design, Analog Layout Design, Verilog, UNIX",
            "Projects": "Tapeout of MERL Analog Chip",
            "Interests": "Reading books",
            "Github": "ibad1112",
            "Lnkedin": "https://www.linkedin.com/in/ibad-ur-rahman-bukhari-88941aa4/",
            "Email": "ibadurrahman@iiee.edu.pk"
        },
        {
            "Timestamp": "12/22/2020 15:43:50",
            "Name": "Zain Rizwan Khan",
            "Designation": "Research Associate",
            "Picture": "img/team/zain_rizwan.jpg?q=1",
            "About": "Seek it out and ye shall find.",
            "Skills": "Verilog HDL/SystemVerilog, UVM, Python for system programming, C, C++",
            "Projects": "RTL for Ghazi System on a Chip",
            "Interests": "RISC-V based AI accelerators, super computing, advanced prosthetics",
            "Github": "zainrizwankhan",
            "Lnkedin": "https://www.linkedin.com/in/zain-khan-a45b221a7/",
            "Email": "zainrizwankhan@gmail.com"
        },
        {
            "Timestamp": "12/23/2020 19:35:10",
            "Name": "Syeda Fizza Jaffey",
            "Designation": "Research Intern",
            "Picture": "/img/team/fiza_jf.jpg?q=1",
            "About": "Syeda Fizza Jaffery is a student of BS Software Engineering from Usman Institute of Technology (UIT-NED). She is currently serving as Research Intern in Micro Electronics Research Lab (MERL-UIT), the first Research Lab that aims to design First Digital Processor of Pakistan that is based on open-source RISC-V Technology. She is also a team memeber of MERL Socail Media Cell. \nShe is fuelled by her passion for understanding the nuances of multi-language software development. She considers herself a ‘forever student,’ eager to build on both perusing professional degree along with learning new skills. Her eagerness for knowledge and determination to turn information into action has contributed to most recent success of Group in MERL that presented their research work about “Reverse Engineering of Rocket Chip” at RISC-V Summit (8th Dec,2020).\n",
            "Skills": "Python, Scala, Chisel",
            "Projects": "1) RISC-V Single Cycle Core (ZARRAR) \n2) RISC-V 5-Stage Pipeline Core \n3) Compressed Assembler for RISC-V (C Extension), Integrated in BURQ Simulator\n4) Reverse Engineering of Rocket Chip",
            "Interests": "Public Speaking, Content Writing, Designing and Developing ",
            "Github": "syedafizza1",
            "Lnkedin": "https://www.linkedin.com/in/fizza-jaffery-9765b4178/",
            "Email": "sjaffery@students.uit.edu"
        },
        {
            "Timestamp": "12/24/2020 0:18:36",
            "Name": "Talha Ahmed",
            "Designation": "Research Intern",
            "Picture": "img/team/talha_ahmed.jpg?q=1",
            "About": "Talha Ahmed is a student of BS Software Engineering in Usman Institute of Technology (UIT-NED). He is currently working as Research Intern in Micro Electronics Research Lab (MERL-UIT) and Graphic Designer in MERL Social Media Cell.\nHe is mindful with competitive approach towards learning new things and stay in tune with the latest working technologies and professional development. He believes mindfulness in the workplace is key to success. Meanwhile, he vastly improved the productivity of his team by implementing his knowledge and skills for the recent project of REVERSE ENGINEERING OF ROCKET CHIP which is presented in International SUMMIT of RISCV 2020.",
            "Skills": "Python, SCALA, CHISEL",
            "Projects": "Single Cycle Core named Shaheen Core, 5-Stage Processing Core, RISCV Compressed Assembler for C Extension, Reverse Engineering of Rocket Chip",
            "Interests": "Programming",
            "Github": "Talha-Ahmed-1",
            "Lnkedin": "talha-a-316a68113",
            "Email": "tahmed@students.uit.edu"
        }
    ]';

    $list = json_decode($json);
    
?>
/*PEN STYLES*/
* {
  box-sizing: border-box;
}

section {
    margin-top: 60px;
}

.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.28);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  height: 200px;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}
.blog-card .photo {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  width: 177px
}
.blog-card .details,
.blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  transition: left .2s;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: .9rem;
}
.blog-card .details a {
  -webkit-text-decoration: dotted underline;
          text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f007";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f133";
}
.blog-card .details .tags ul:before {
  font-family: FontAwesome;
  content: "\f02b";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: #fff;
  position: relative;
  z-index: 1;
}
.blog-card .description h1,
.blog-card .description h2 {
  font-family: Poppins, sans-serif;
}
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #a2a2a2;
  margin-top: 5px;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}
@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 34%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 99%;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    -webkit-transform: skew(3deg);
            transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}


@media (max-width: 425px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    -webkit-transform: skew(3deg);
            transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}

@media (max-width: 375px) {
.blog-card {
    display: flex;
    flex-direction: column;
    margin: 1rem auto;
    box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.6%;
    background: #fff;
    line-height: 1.4;
    font-family: sans-serif;
    border-radius: 5px;
    overflow: hidden;
    height: auto;
    z-index: 0;
}

.blog-card .photo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0px;
    background-size: cover;
    background-position: center;
    width: 177px;
}
.blog-card {
    flex-direction: row-reverse;
}
}

@media (max-width: 320px) {
.blog-card {
    display: flex;
    flex-direction: column;
    margin: 1rem auto;
    box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.6%;
    background: #fff;
    line-height: 1.4;
    font-family: sans-serif;
    border-radius: 5px;
    overflow: hidden;
    height: auto;
    z-index: 0;
}

.blog-card .photo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0px;
    background-size: cover;
    background-position: center;
    width: 177px;
}
.blog-card {
    flex-direction: row-reverse;
}
}
</style>


<style>
    .profile{
	margin-top: 25px;
}
.profile h1{
	font-weight: normal;
	font-size: 20px;
	margin:10px 0 0 0;
}
.profile h2{
	font-size: 14px;
	font-weight: lighter;
	margin-top: 5px;
}
.profile .img-box{
	opacity: 1;
	display: block;
	position: relative;
}
.profile .img-box:after{
	content:"";
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
}
.img-box ul{
	position: absolute;
	z-index: 2;
	bottom: 50px;
	text-align: center;
	width: 100%;
	padding-left: 0px;
	height: 0px;
	margin:0px;
	opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
	-webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.img-box ul i{
	font-size: 20px;
	letter-spacing: 10px;
}
.img-box ul li{
	width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #585755;
    margin: 2px;
    padding: 5px;
	display: inline-block;
}
.img-box a{
	color:#fff;
}
.img-box:hover:after{
	opacity: 1;
}
.img-box:hover ul{
	opacity: 1;
}
.img-box ul a{
	-webkit-transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
	border-color: #fff;
	color: #1470B6;
}
a{
    color:#1470B6;
}
a:hover{
    text-decoration:none;
    color:#1470B6;
}
i.red{
    color:#BC0213;
}
p.short-details{
    font-size:0.8rem;
    line-height:1.25rem;
}
</style>
&nbsp;
&nbsp;


  <section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description">OUR TEAM</h6>
          <div class="row pt-md">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/dr-room.png" class="img-responsive">
                    <ul class="text-center">
                      <a href="#"><li><i class="fa fa-envelope-o"></i></li></a>
                      <a href="https://www.linkedin.com/in/dr-syed-roomi-naqvi-22b7882/"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                  </div>
                  <h1>Dr. Syed Roomi Naqvi</h1>
                  <h2>Director/ Head MERL</h2>
                  <p class="short-details">PhD (Electrical Engineering), Professor of Practice at UIT</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/dr-ali.png" class="img-responsive">
                    <ul class="text-center">
                      <a href="#"><li><i class="fa fa-envelope-o"></i></li></a>
                      <a href="https://www.linkedin.com/in/ali-ahmed-ph-d-128b9325/"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                  </div>
                  <h1>Dr. Ali Ahmed</h1>
                  <h2>Team Lead MERL</h2>
                  <p class="short-details">PhD (Integrated Electronics & Communication Engineering),<br/>Assistant Professor,
                    Department of Electrical Engineering, UIT</p>
                </div>
                
                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/engr_farhan.png" class="img-responsive">
                    <ul class="text-center">
                      <a href="#"><li><i class="fa fa-envelope-o"></i></li></a>
                      <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                  </div>
                  <h1>Engr. Farhan Ahmed</h1>
                  <h2>Software Lead MERL</h2>
                  <p class="short-details">ME (Telecommunication) Lecturer,<br/>dept. of Computer Science, UIT</p>
                </div>
                
                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/engr_asad.png" class="img-responsive">
                    <ul class="text-center">
                      <a href="#"><li><i class="fa fa-envelope-o"></i></li></a>
                      <a href="https://www.linkedin.com/in/asadjaffri/"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                  </div>
                  <h1>Engr. M. Asad Hussain</h1>
                  <h2>Hardware Lead MERL</h2>
                  <p class="short-details">MS (Computer Networks & Communication)<br/>
					dept. Electrical Engineering, UIT</p>
                </div>
               
            </div>
              <hr/>
             <div class="row pt-md">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="/img/team/hadir_khan.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[0]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[0]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=1"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=1"><h1>Muhammad Hadir Khan</h1></a>
                  <h2>Research Associate</h2>
                </div>
                
			  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/hamza_shabbir.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[1]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[1]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=2"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=2"><h1>Hamza Shabbir</h1></a>
                  <h2>Research Associate</h2>
                </div>
                
                
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/uzair_khan.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[2]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[2]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=3"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=3"><h1>Uzair Khan</h1></a>
                  <h2>Research Associate</h2>
                </div>
				
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/wajeh_hasan.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[11]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[11]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=12"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=12"><h1>Hafiz Wajeh Ul Hasan</h1></a>
                  <h2>Research Associate</h2>
                </div>
                
            </div>
             <div class="row pt-md">
                 
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/ibad_ur_rehman.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[14]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[14]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=15"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=15"><h1>Syed Muhammad Ibad ur Rahman</h1></a>
                  <h2>Research Associate</h2>
                </div>
				
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/zain_rizwan.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[15]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[15]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=16"><li><i class="fa fa-info"></i></li></a
                    </ul>
                  </div>
                  <a href="/member.php?id=16"><h1>Zain Rizwan Khan</h1></a>
                  <h2>Research Associate</h2>
                </div>
                
                
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/aireen.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[6]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[6]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=7"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=7"><h1>Aireen Amir Jalal</h1></a>
                  <h2>Research Assisstant</h2>
                </div>
                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="/img/team/m_shahzaib.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[8]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[8]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=9"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=9"><h1>Muhammad Shahzaib</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
            </div>
              <div class="row pt-md">
             
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/zeeshan_rafique.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="https://github.com/<?php echo $list[3]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a target="_blank" href="<?php echo $list[3]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a href="/member.php?id=4"><li><i class="fa fa-info"></i></li></a
                    </ul>
                  </div>
                  <a href="/member.php?id=4"><h1>Zeeshan Rafique</h1></a>
                  <h2>Research Intern</h2>
                </div>
              
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="/img/team/walid_waseem.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[4]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[4]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=5"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=5"><h1>Muhammad Waleed Waseem</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
			  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/sajjad_ahmed.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[5]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[5]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=6"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=6"><h1>Sajjad Ahmed</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
			  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/usman_zain.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[9]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[9]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=10"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=10"><h1>Usman Zain ul Abedin</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
                
                
            </div>
            
            
              <div class="row pt-md">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="/img/team/shahzaib.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[12]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[12]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=13"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=13"><h1>Shahzaib Kashif</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
			  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/waleed_sohail.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[13]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[13]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=14"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=14"><h1>Waleed Muhammad Sohail</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
                
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/raheel_sid.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[10]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[10]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=11"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=11"><h1>Raheel Siddiqui</h1></a>
                  <h2>Research Intern</h2>
                </div>
				
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="/img/team/fiza_jf.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[16]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[16]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=17"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=17"><h1>Syeda Fizza Jaffey</h1></a>
                  <h2>Research Intern</h2>
                </div>
              
                
            </div>
            <div class="row pt-md">
               
                
			  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                  <div class="img-box">
                    <img src="img/team/talha_ahmed.jpg?q=1" class="img-responsive">
                    <ul class="text-center">
                      <a target="_blank" href="<?php echo $list[17]->Lnkedin?>"><li><i class="fa fa-linkedin"></i></li></a>
                      <a target="_blank" href="https://github.com/<?php echo $list[17]->Github?>"><li><i class="fa fa-github"></i></li></a>
                      <a href="/member.php?id=18"><li><i class="fa fa-info"></i></li></a>
                    </ul>
                  </div>
                  <a href="/member.php?id=18"><h1>Talha Ahmed</h1></a>
                  <h2>Research Intern</h2>
                </div>
                
                
                
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
  

<?php 
   $pagesection = ob_get_contents();
   ob_end_clean();
   $bannerimgurl = 'img/bg-img/gallery5.jpg';
   $bannerheading = 'MERL Team';
   @include('master-with-short-banner.php');   
?>
   
   