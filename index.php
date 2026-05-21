<?php
    if(isset($_POST['btnsubmit'])) {
    
    	$username = trim($_POST['txtname']);
    	$useremail = trim($_POST['txtemail']);
    	$contact = trim($_POST['txtcontact']);
    	$message = trim($_POST['txtmessage']);
    
        $To = "attaatariq@gmail.com";
        $Subject = 'Visitor Response From Attaa Tariq';
    
        $Message = '<html><body style="margin-top:15px;"><h4>Hi Attaa Tariq,</h4><p style="font-size:16px;">'.$message.'<br><br>Thanks!</p><br><br><h4>'.$username.'<br>'.$contact.'</h4></body></html>';
    
        $Headers = "MIME-Version: 1.0" . "\r\n";
        $Headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $Headers .= 'From: '.$useremail. "\r\n";
        $Result = mail($To, $Subject, $Message, $Headers);
	    if ($Result) {
	    	header("location:index.php?res=1#contact");
	    } else {
	    	header("location:index.php?res=0#contact");
	    }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Attaullah Tariq - Software Developer, CEO of Bookscent</title>
        <link rel="shortcut icon" href="resources/images/favicon.png">
        <link rel="apple-touch-icon" href="resources/images/favicon.png">
        <link href="resources/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="resources/assets/js/jquery.min.js"></script>
        <link href="resources/assets/css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="title" content="Attaullah Tariq - Software Developer, CEO of Bookscent">
        <meta name="keywords" content="Attaa Tariq, Attaullah Tariq, Attaullah, Programmer, Web Developer, Software Developer, Software Engineer, CEO, Bookscent, Inixio, Inixio World, Inixio Technologies, Business Man, Developers In Pakistan, Pakistan IT Industry, People of Pakistan, Developers in Islamabad" />
        <meta name="description" content="I'm Attaullah Tariq, Software Developer, CEO of Bookscent and Inixio Technologies. I did Bachelor in Information Technology from The Islamia University of Bahawalpur, Pakistan. I'm doing Masters in Information Technology from National University of Science and Technology, Islamabad. I'm experienced software developer committed to maintaining cutting edge technical skills and up-to-date industry knowledge. I'm motivated developer with solid experience managing all levels of large & small scale projects.">
        <meta property="og:site_name" content="Attaullah Tariq"/>
        <meta property="og:title" content="ATTAULLAH TARIQ - THE C.E.O OF BOOKSCENT"/>
        <meta property="og:description" content="Software Developer, Let's Start Scrolling and Learn More About Me"/>
        <meta property="og:image" content="resources/images/attaa-preview.jpg">
        <meta property="og:url" content="http://ceo.bookscent.store">
        <meta name="google-site-verification" content="wQ7dHrfEOifxFei3LyR95HXi672G0S7KdC1UZ4ldmnw" />
        <link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="resources/assets/js/move-top.js"></script>
        <script type="text/javascript" src="resources/assets/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
            	$(".scroll").click(function(event){		
            		event.preventDefault();
            		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            	});
            });
        </script>
    </head>
    <body>
        <div id="home" class="header">
            <div class="container">
                <div class="top-header">
                    <div class="top-nav">
                        <div class="navigation">
                            <div class="logo">
                                <h1><a href="http://ceo.bookscent.store"><span>A</span> Attaullah Tariq</a></h1>
                            </div>
                            <div class="navigation-right">
                                <span class="menu"><img src="resources/images/menu.png" alt="Menus"/></span>
                                <nav class="link-effect-3" id="link-effect-3">
                                    <ul class="nav1 nav nav-wil">
                                        <li class="active"><a data-hover="Home" href="index.php">Home</a></li>
                                        <li><a class="scroll" data-hover="About" href="#about">About</a></li>
                                        <li><a class="scroll" data-hover="Skills" href="#services" >Skills</a></li>
                                        <li><a class="scroll" data-hover="Experience" href="#work">Experience</a></li>
                                        <li><a class="scroll" data-hover="Portfolio" href="#port">Portfolio</a></li>
                                        <li><a class="scroll" data-hover="Blog" href="#blogs">Blog</a></li>
                                        <li><a class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                                <script>
                                    $("span.menu").click(function() { $("ul.nav1").slideToggle(300, function() {}); });
                                </script>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="banner-info">
                        <div class="col-md-7 header-right">
                            <h1>Hi, I'm a</h1>
                            <h6>Software Developer</h6>
                            <ul class="address">
                                <li>
                                    <ul class="address-text">
                                        <li><b>Lives in</b></li>
                                        <li>Islamabad, Pakistan</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="address-text">
                                        <li><b>From</b></li>
                                        <li>Alipur, Muzaffargarh</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="address-text">
                                        <li><b>D.O.B </b></li>
                                        <li>September 06, 1993</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="address-text">
                                        <li><b>Phone </b></li>
                                        <li>+92 (333) 665 8622</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="address-text">
                                        <li><b>E-mail </b></li>
                                        <li><a href="mailto:attaatariq@gmail.com">attaatariq@gmail.com</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="address-text">
                                        <li><b>Website </b></li>
                                        <li><a href="https://ceo.bookscent.store">ceo.bookscent.store</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 header-left">
                            <img src="resources/images/attaa-profile.jpg" alt="Image">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="about">
            <div class="col-md-6 about-left">
                <div id="owl-demo1" class="owl-carousel owl-carousel2">
                    <div class="item">
                        <div class="about-left-grid">
                            <h2>Career <span>Objective</span></h2>
                            <p class="text-justify">I started programming because programming is my passion. I love to learn new programming stuff and always ready to take new challenges. My key quality is my honesty, devotion and dedication towards my work. My objective is to gain knowledge and experience as a key to improve my current skills and knowledge, while utilizing my existing skill set. I am fully devoted and honest in my profession and want to serve the society in a well manner.</p>
                            <ul>
                                <li><a class="a-btn-a scroll" href="#port">My Work</a></li>
                                <li><a class="a-btn-h scroll" href="#contact">Hire Me</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="about-left-grid">
                            <h2>A Short <span>Introduction</span></h2>
                            <p class="text-justify">Hi, I'm <b>Attaullah Tariq</b>, Senior Web Developer at Ahbab Solutions (Pvt) Ltd Islamabad. I did <b>Bachelor in Information Technology</b> from The Islamia University of Bahawalpur, Pakistan. I'm doing <b>Masters in Information Technology</b> from National University of Science and Technology, Islamabad. I'm experienced software developer committed to maintaining cutting edge technical skills and up-to-date industry knowledge. I'm motivated developer with solid experience managing all levels of large & small scale projects.</p>
                            <ul>
                                <li><a class="a-btn-a scroll" href="#port">My Projects</a></li>
                                <li><a class="a-btn-h" download href="resources/resume/Attaa-Tariq-Cv.pdf">Export Resume</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="about-left-grid">
                            <h2>Educational <span>Detail</span></h2>
                            <p class="m-t-10 b-b"><i class="glyphicon glyphicon-circle-arrow-right"></i> MASTERS [MSIT - Continued] [2019-2021]<br><b>SEECS, National University of Science and Technology, Islamabad</b></p>
                            <p class="m-t-10 b-b"><i class="glyphicon glyphicon-circle-arrow-right"></i> BACHELOR [BSIT - 3.13/4.00] [2013-2017]<br><b>Department of CS & IT, The Islamia University of Bahawalpur</b></p>
                            <p class="m-t-10 b-b"><i class="glyphicon glyphicon-circle-arrow-right"></i> INTERMEDIATE [ICS - 794/1100] [2011-2013]<br><b>Board of Intermediate and Secondary Education, DG Khan</b></p>
                            <p class="m-t-10"><i class="glyphicon glyphicon-circle-arrow-right"></i> MATRICULATION [Science - 884/1050] [2009-2011]<br><b>Board of Intermediate and Secondary Education, DG Khan</b></p>
                            <ul class="m-t-30">
                                <li><a class="a-btn-a scroll" href="#port">My Projects</a></li>
                                <li><a class="a-btn-h" download href="resources/resume/Attaa-Tariq-Cv.pdf">Export Resume</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 about-right text-white p-20">CHIEF EXECUTIVE OFFICER OF <b>BOOKSCENT</b> AND <b>INIXIO TECHNOLOGIES</b></div>
            <div class="clearfix"> </div>
            <link href="resources/assets/css/owl.carousel.css" rel="stylesheet">
            <script src="resources/assets/js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                	$("#owl-demo1").owlCarousel({
                		items : 1,
                		lazyLoad : false,
                		autoPlay : true,
                		navigation : false,
                		navigationText :  false,
                		pagination : true,
                	});
                });
            </script>
            <script>
                $(document).ready(function() {
                	$("#owl-demo3").owlCarousel({
                		items : 1,
                		lazyLoad : false,
                		autoPlay : true,
                		navigation : false,
                		navigationText :  true,
                		pagination :true,
                	});
                });
            </script>
        </div>
        <div id="services" class="services">
            <div class="container">
                <div class="service-head one text-center ">
                    <h4>WHAT I DO</h4>
                    <h3>PROFESSIONAL <span>SKILLS</span></h3>
                    <span class="border two"></span>
                </div>
                <div class="wthree_about_right_grids w3l-agile">
                    <div class="col-md-6 wthree_about_right_grid m-b-0">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Languages & Tools</h4>
                            <p>HTML, CSS, Bootstrap, jQuery, Ajax, PHP Language <br/> VCS Repository: GitHub & BitBucket</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 wthree_about_right_grid m-b-0">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>PHP Framework</h4>
                            <p>WordPress (Content Management System) <br/> MVC Framework: CodeIgniter, Laravel, CakePHP</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Databases</h4>
                            <p>MySQL or MariaDB, Microsoft SQL Server, Oracle <br/> Firebase Realtime Database (NoSQL)</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Web Services</h4>
                            <p>PHP APIs (Postman Collections) <br/> CodeIgniter RESTful APIs, Laravel RESTful APIs</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Messaging Solution</h4>
                            <p>One Signal, Firebase Messaging Service <br/> Mail Service Integration (SMTP)</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Payment Solution</h4>
                            <p>JazzCash Online Payment Gateway <br/> Telenor Corporate SMS & Call (APIs)</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Optimization</h4>
                            <p>Website Speed and Performance Optimization <br/> SEO (On-Page, Off-Page)</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Graphic Design</h4>
                            <p>Photo Editing, Letterhead, Business Cards, Logos, Posters, Postcards (Adobe Photoshop & Illustrator)</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Operating Systems</h4>
                            <p>Windows Operating System (8 & 10) <br/> Linux Distributions: Ubuntu, Kali Linux, CentOS</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 wthree_about_right_grid">
                        <div class="col-xs-4 wthree_about_right_grid_left">
                            <div class="hvr-rectangle-in">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-xs-8 wthree_about_right_grid_right">
                            <h4>Development Tools</h4>
                            <p>Adobe Dreamweaver, Visual Studio <br/> Notepad++, Atom, Sublime Text</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div id="work" class="work">
            <div class="container">
                <div class="service-head text-center">
                    <h4>WHAT I DID</h4>
                    <h3>PROFESSIONAL <span>EXPERIENCE</span></h3>
                    <span class="border one"></span>
                </div>
                <div class="time-main w3l-agile">
                    <div class="col-md-6 year-info">
                        <ul class="year">
                            <li>06-2019 - Present</li>
                            <li>05-2018 - 05-2019</li>
                            <li>02-2018 - 04-2018</li>
                            <li>10-2017 - 02-2018</li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <ul class="col-md-6 timeline">
                        <li>
                            <div class="timeline-badge success"><i class="glyphicon glyphicon-briefcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Senior Web Developer</h4>
                                </div>
                                <div class="timeline-body">
                                    <h5><b>Ahbab Solutions Pvt Ltd</b> Islamabad, Pakistan</h5>
                                    <p><b>Responsibilities:</b> Requirement Specifications, Problem & Solution Domain, Project Management, Database Designing, Writing Code.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Senior Web Developer</h4>
                                </div>
                                <div class="timeline-body">
                                    <h5><b>Bootrait Consultants</b> Lahore, Pakistan</h5>
                                    <p><b>Responsibilities:</b> Requirement Specifications, Problem & Solution Domain, Project Management, Database Designing, Writing Code.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Junior Web Developer</h4>
                                </div>
                                <div class="timeline-body">
                                    <h5><b>Notitia Tech Consultants</b> Islamabad, Pakistan</h5>
                                    <p><b>Responsibilities:</b> Aassisting with Websites Creation, Updating Existing Applications, Coding, Testing, Design Adjustments, and Client Reviews.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Junior Web Developer</h4>
                                </div>
                                <div class="timeline-body">
                                    <h5><b>Creatrixe</b> Islamabad, Pakistan</h5>
                                    <p><b>Responsibilities:</b> Aassisting with Websites Creation, Updating Existing Applications, Coding, Testing, Design Adjustments, and Client Reviews.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="portfolio" id="port">
            <div class="service-head text-center">
                <h4>MY WORKS</h4>
                <h3>PROFESSIONAL <span>PORTFOLIO</span></h3>
                <span class="border"></span>
            </div>
            <div class="portfolio-grids">
                <script src="resources/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                    	$('#horizontalTab').easyResponsiveTabs({ type: 'default', width: 'auto', fit: true });
                    });
                </script>
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ALL</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>JAVASCRIPT</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>CORE PHP</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>WORDPRESS</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>CODEIGNITER</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-5" role="tab"><span>LARAVEL</span></li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal25" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/25.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal22" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/22.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal23" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/23.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal24" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/24.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal21" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/21.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal20" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/20.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal19" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/19.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal18" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/18.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal17" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/17.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal16" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/16.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal15" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/15.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal14" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/14.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal13" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/13.jpg" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/1.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/2.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/3.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <a href="#workModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/4.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/5.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/6.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/7.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/8.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal9" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/9.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal10" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/10.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal11" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/11.png" alt="Image"></a>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <a href="#workModal12" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/12.png" alt="Image"></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/8.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal19" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/19.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal21" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/21.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal23" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/23.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal24" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/24.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal25" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/25.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal20" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/20.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal14" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/14.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal18" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/18.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal17" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/17.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal16" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/16.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>


                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/1.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/2.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/4.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/6.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/7.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal10" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/10.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal11" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/11.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-3">
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal9" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/9.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal12" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/12.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal15" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/15.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-4 resp-tab-content" aria-labelledby="tab_item-4">
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal21" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/21.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal19" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/19.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal25" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/25.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModa24" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/24.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModa23" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/23.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModa22" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/22.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/3.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-5 resp-tab-content" aria-labelledby="tab_item-5">
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/5.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd">
                                    <div class="thumb">
                                        <a href="#workModal15" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="resources/images/15.jpg" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog" id="blogs">
            <div class="container">
                <div class="service-head text-center">
                    <h4>BLOGS</h4>
                    <h3>INFORMATION TECHNOLOGY <span>ARTICLES</span></h3>
                    <span class="border one"></span>
                </div>
                <div class="news-grid w3l-agile">
                    <div class="col-md-6 news-img">
                        <a href="#" data-toggle="modal" data-target="#postModal1"> <img src="resources/images/blog-1.jpg" alt="Blog" class="img-responsive" style="height: 368px;"></a>
                    </div>
                    <div class="col-md-6 news-text">
                        <h3> <a href="#" data-toggle="modal" data-target="#postModal1">WHO WILL MEASURE UP TO THESE TWO REMARKABLE LEADERS?</a></h3>
                        <ul class="news">
                            <li><i class="glyphicon glyphicon-user"></i> <a href="javascript:0;">Admin</a></li>
                            <li><i class="glyphicon glyphicon-comment"></i> <a href="javascript:0;">5 Comments</a></li>
                            <li><i class="glyphicon glyphicon-heart"></i> <a href="javascript:0;">15 Likes</a></li>
                            <li><i class="glyphicon glyphicon-tags"></i> <a href="javascript:0;">3 Tags</a></li>
                        </ul>
                        <p>We lost two great company leaders this month: John Bogle of Vanguard Group and Herb Kelleher of Southwest Airlines. James Heskett discusses what made them so extraordinary and asks which other CEOs are in the same league.</p>
                        <a href="#" data-toggle="modal" data-target="#postModal1" class="read hvr-shutter-in-horizontal">Read More</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="news-grid">
                    <div class="col-md-6 news-text two">
                        <h3> <a href="#" data-toggle="modal" data-target="#postModal2">ARE WE STILL IN THE ERA OF UNCONSCIOUS GENDER BIAS?</a></h3>
                        <ul class="news">
                            <li><i class="glyphicon glyphicon-user"></i> <a href="javascript:0;">Admin</a></li>
                            <li><i class="glyphicon glyphicon-comment"></i> <a href="javascript:0;">3 Comments</a></li>
                            <li><i class="glyphicon glyphicon-heart"></i> <a href="javascript:0;">12 Likes</a></li>
                            <li><i class="glyphicon glyphicon-tags"></i> <a href="javascript:0;">2 Tags</a></li>
                        </ul>
                        <p>In recent years, we have seen a significant shift in gender imbalance, particularly in science, technology, engineering and maths (Stem) sectors. In fact, according to WISE, over 900,000 women are in core Stem roles today, meaning we are on track to take that figure to 1 million by 2020.</p>
                        <a href="#" data-toggle="modal" data-target="#postModal2" class="read hvr-shutter-in-horizontal">Read More</a>
                    </div>
                    <div class="col-md-6 news-img two">
                        <a href="#" data-toggle="modal" data-target="#postModal2"> <img src="resources/images/blog-2.jpg" alt="Blog" class="img-responsive" style="height: 395px;"></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="news-grid">
                    <div class="col-md-6 news-img">
                        <a href="#" data-toggle="modal" data-target="#postModal3"> <img src="resources/images/blog-3.jpg" alt="Blog" class="img-responsive" style="height: 394px;"></a>
                    </div>
                    <div class="col-md-6 news-text">
                        <h3> <a href="#" data-toggle="modal" data-target="#postModal3">WIDENING THE DISCUSSION ABOUT TECH CAREERS</a></h3>
                        <ul class="news">
                            <li><i class="glyphicon glyphicon-user"></i> <a href="javascript:0;">Admin</a></li>
                            <li><i class="glyphicon glyphicon-comment"></i> <a href="javascript:0;">2 Comments</a></li>
                            <li><i class="glyphicon glyphicon-heart"></i> <a href="javascript:0;">10 Likes</a></li>
                            <li><i class="glyphicon glyphicon-tags"></i> <a href="javascript:0;">5 Tags</a></li>
                        </ul>
                        <p>Organisations continue to wrestle with the challenge of how to attract more women into technical and engineering roles. One of the reasons having a diverse team matters to us – and by that I mean diversity in its widest sense, in terms of a mix of voices and backgrounds.</p>
                        <a href="#" data-toggle="modal" data-target="#postModal3" class="read hvr-shutter-in-horizontal">Read More</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="footer" id="contact">
            <div class="container">
                <div class="service-head one text-center">
                    <?php if(isset($_REQUEST['res']) && $_REQUEST['res'] == "0") {
                        $style = "background-color: red;";
                    } else { $style = ""; } ?>

                    <h4 style="<?php echo $style; ?>">
                        <?php
                            if (isset($_REQUEST['res']) && $_REQUEST['res'] == "1") {
                            	echo "Your Message Has Been Sent Successfully.";
                            } else if(isset($_REQUEST['res']) && $_REQUEST['res'] == "0") {
                            	echo "Something Went Wrong, Please Try Again!";
                            } else {
                                echo "CONTACT ME";
                            }
                        ?>
                    </h4>
                    <h3>GET <span>IN TOUCH WITH ME</span></h3>
                    <span class="border two"></span>
                </div>
                <div class="mail_us">
                    <div class="col-md-6 mail_left">
                        <div class="contact-grid1-left">
                            <div class="contact-grid1-left1">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                <h4>Contact By Email</h4>
                                <ul>
                                    <li>E-mail: <a href="mailto:ceo@bookscent.store">ceo@bookscent.store</a></li>
                                    <li>E-mail: <a href="mailto:attaatariq@gmail.com">attaatariq@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-grid1-left">
                            <div class="contact-grid1-left1">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                <h4>Contact By Phone</h4>
                                <ul>
                                    <li>Phone: +92 (333) 665 8622</li>
                                    <li>Phone: +92 (304) 665 8622</li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-grid1-left">
                            <div class="contact-grid1-left1">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                <h4>Looking For Address</h4>
                                <ul>
                                    <li>Office No: 01, Ghaus-E-Aazam Plaza, Malik Market, Sector F-12</li>
                                    <li>Islamabad, Pakistan</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 mail_right">
                        <form method="POST" name="btnsubmit" id="btnsubmit" autocomplete="off">
                            <input type="text" name="txtname" placeholder="Your Name" required="">
                            <input type="email" name="txtemail" placeholder="Your Email" required="">
                            <input type="text" name="txtcontact" placeholder="Phone Number" required="">
                            <textarea name="txtmessage" placeholder="Your Message" required=""></textarea>
                            <input type="submit" name="btnsubmit" value="Send Message">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="copy_right text-center">
                    <p>Copyrights &copy; 2018 - <?php echo date('Y'); ?> Attaullah Tariq - All rights reserved</p>
                    <ul class="social-icons two">
                        <li><a target="_blank" href="https://twitter.com/AttaaTariq"> </a></li>
                        <li><a target="_blank" href="https://www.facebook.com/aullah.msit19seecs" class="fb"> </a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/attaatariq" class="in"> </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Blog & Portfolio Modals: Included -->
        <?php require_once('resources/modals.php'); ?>

        <a href="#home" id="toTop"><span id="toTopHover"></span></a>
        <script type="text/javascript">
            $(document).ready(function() {
            	var defaults = {
             		containerID: 'toTop',
            		containerHoverID: 'toTopHover',
            		scrollSpeed: 1200,
            		easingType: 'linear' 
            	};
            	$().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
        <script src="resources/assets/js/bootstrap.js"></script>
    </body>
</html>