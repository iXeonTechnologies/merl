<?php ob_start();?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php
  $json = 
    '[
        {
            "Timestamp": "12/18/2020 22:25:40",
            "Name": "Muhammad Hadir Khan",
            "Designation": "Research Associate",
            "Picture": "/img/team/hadir_khan.jpg",
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
            "Picture": "/img/team/hamza_shabbir.jpg",
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
            "Picture": "/img/team/uzair_khan.jpg",
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
            "Picture": "/img/team/zeeshan_rafique.jpg",
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
            "Picture": "/img/team/walid_waseem.jpg",
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
            "Picture": "/img/team/sajjad_ahmed.jpg",
            "About": "I sajjad Ahmed, am a self motivated and hard-working person with flexible nature. I love to do work in cooperative groups or environment and can adjust myself in any field of my interest very easily. Right now I am studying computer systems engineering from Usman institute of technology. My field of interest is open source hardware development using RISCV ISA.",
            "Skills": "Chisel, RISCV ISA, logisim, digital logic designs, verilog",
            "Projects": "Ibtida Soc",
            "Interests": "Embedded systems, RISCV ISA",
            "Github": "sajjadahmed677",
            "Lnkedin": "https://www.linkedin.com/in/sajjad-ahmed-b43bb8165",
            "Email": "SAHMED@UIT.EDU"
        },
        {
            "Timestamp": "12/19/2020 13:58:29",
            "Name": "Aireen Amir Jalal",
            "Designation": "Research Assistant",
            "Picture": "/img/team/aireen.jpg",
            "About": "I am an Electrical Engineering graduate from DHA Suffa University, Karachi, Pakistan and a Gold Medalist in my batch. Having a keen interest in research oriented studies specifically in the field of VLSI design and deep learning based applications, has led me to begin my professional career as an APR Engineer at MERL-UIT.",
            "Skills": "Physical Design-APR Engineer",
            "Projects": "Ibtida_SoC",
            "Interests": "Artificial Intelligence, APR, SoC design, Deep Learning",
            "Github": "AireenAmirJalal",
            "Lnkedin": "https://www.linkedin.com/in/aireen-amir-jalal-b123141a3/",
            "Email": "aireenamirjalal98@gmail.com"
        },
        {
            "Timestamp": "12/20/2020 23:30:40",
            "Name": "Muhammad Asad Hussain",
            "Designation": "Hardware Team Lead",
            "Picture": "/img/team/asad_hussain.jpg",
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
            "Picture": "/img/team/m_shahzaib.jpg",
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
            "Picture": "/img/team/usman_zain.jpg",
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
            "Picture": "img/team/raheel_sid.jpg",
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
            "Picture": "img/team/wajeh_hasan.jpg",
            "About": "I completed my bachelors in Electrical Engineering with majors in Electronics. I have been part of MERL for 6 months working as an APR Engineer.",
            "Skills": "APR skills with opensource tools like YOSYS, TRITON, OPENSTA, MAGIC etc",
            "Projects": "Ghazi_SoC tape-out using sky130nm technology",
            "Interests": "My primary interest lies in Integrated Circuits, chiefly Digital Design ",
            "Github": "wajehulhasan",
            "Lnkedin": "https://www.linkedin.com/in/wajeh-ul-hasan-48a206178",
            "Email": "whassan@uit.edu"
        },
        {
            "Timestamp": "12/21/2020 0:19:22",
            "Name": "Shahzaib Kashif",
            "Designation": "Research Intern",
            "Picture": "/img/team/shahzaib.jpg",
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
            "Picture": "img/team/waleed_sohail.jpg",
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
            "Picture": "img/team/ibad_ur_rehman.jpg",
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
            "Picture": "img/team/zain_rizwan.jpg",
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
            "Picture": "/img/team/fiza_jf.jpg",
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
            "Picture": "img/team/talha_ahmed.jpg",
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
     $Members = array(
        'hadir' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Bachelor\'s in Electrical Engineering (Computer Systems) with keen interest in developing the open-source ecosystem of processor designing in Pakistan',
            'Skills' => 'Chisel, FPGA, Git, GitHub, C, Linux, Bash Scripting',
            'Projects' => 'Buraq-mini processor, Ibtida System on a Chip, TileLink',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'hamza' => array(
            'Name' => 'Hamza Shabbir',
            'Designation' => 'Research Associate',
            'About' => 'I am the Research Associate with 1+ year of experience in chip designing and verification.',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'uzair' => array(
            'Name' => 'Uzair Khan',
            'Designation' => 'Research Associate',
            'About' => 'I am Research Associate and currently working on Reverse engineering of Rocket chip at Micro Electronic Research Lab (MERL).As a Computer Engineer I find myself interested in technologies like the evolution of Big Data, Data Science, AI, Deep learning and Machine Learning.',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'zeeshan' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'waleed' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'sajjad' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'aireen' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'asad' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'shahzaib' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'usman' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'raheel' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'hwajeh' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'shahzaib' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'waleedm' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'ibad' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'zain' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
            'waleedM' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'fizza' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            ),
        'talha' => array(
            'Name' => 'Muhammad Hadir Khan',
            'Designation' => 'Research Associate',
            'About' => 'Myriel',
            'Skills' => 'Myriel',
            'Projects' => 'Myriel',
            'Interest' => 'Myriel',
            'fb' => 'Myriel',
            'linkedin' => 'Myriel',
            'email' => 'Myriel'
            )
        );
        
        $id = $_GET['id'];
        $id-=1;
        $obj = $list[$id];
        //print_r($obj->Name);
        if($obj == null) header('location:index.php');
  ?>
<Style>
    .btn-social{
        background-color:#aaa;
        color:#152F4F!important;
    }
    a.btn-social:hover{
        background-color:#152F4F;
        color: #fff!important;
    }
    .fa {
      font-size: 30px;
      width: 30px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
.fa-social-icon{
    color:#2e9dd8; 
    font-size:30px;
}
</Style>
  <section class="team mt-50">
  <div class="container">
      
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="media">
 <img class="align-self-start mr-3" src="<?php echo $obj->Picture; ?>" alt="MERL family member">
  <div class="media-body">
    <h2 class="mt-0"><?php echo $obj->Name; ?></h2>
    <h5><?php echo $obj->Designation; ?></h5>
    <p><?php echo $obj->About; ?></p>
    <h6>Skills</h6>
        <p><?php echo $obj->Skills; ?></p>
    <h6>Projects</h6>
        <p><?php echo $obj->Projects; ?></p>
    <h6>Interest</h6>
        <p><?php echo $obj->Interests; ?></p>
    <h6>Contact</h6>
   
        <a href="https://github.com/<?php echo $obj->Github; ?>" target="_blank"><i  class="fa fa-github-square fa-social-icon mr-1"></i></a>
        <a href="<?php echo $obj->Lnkedin; ?>" target="_blank"><i  class="fa fa-linkedin-square fa-social-icon mr-1"></i></a>
        <a href="mailto:<?php echo $obj->Email; ?>"><i  class="fa fa-envelope-square fa-social-icon mr-1"></i></a>

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
   $bannerheading = '';
   @include('master-without-banner.php');   
?>
   
   