<?php

session_start();
require_once("includes/functions.php");
require_once("includes/login_check.php");


?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Abdullah Al Noman - Web Developer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend_assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/frontend_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/slick.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/aos.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/default.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/style.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img src="assets/frontend_assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.php" class="navbar-brand s-logo-none"><img src="assets/frontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard.php">
                                                <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard 
                                            </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                        <i class="far fa-window-close"></i>
                    </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="assets/frontend_assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p></p>abdullahalnomanme@gmail.com
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <?php  if(isset($_SESSION['login_user_name'])):?>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$_SESSION['login_user_name'];?></h2>
                            <?php endif;?>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo substr($_SESSION['users_bio'],0,100);?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="assets/frontend_assets/img/banner/nomanbanner.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="assets/frontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/frontend_assets/img/banner/nomanpro.png" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <?php if(isset($_SESSION['users_bio'])):?>
                            <p><?=$_SESSION['users_bio'];?></p>
                            <?php endif;?>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit.
                                Numquam!
                            </p> -->
                            <?php  if(isset($_SESSION['skills_title'])):?>
                                <h3><?php echo $_SESSION['skills_title'];?></h3>
                            <?php endif;?>
                        </div>
                        <!-- Education Item -->
                        <?php 
                            $skill_select_query = "SELECT * FROM skills";
                            $data_from_skills_db = mysqli_query(db(),$skill_select_query);
                        ?>
                        <?php foreach($data_from_skills_db as $skliss):?>
                        <div class="education">
                            <div class="year"><?= $skliss['skills_years'];?></div>
                            <div class="line"></div>
                            <div class="location">
                                <span><?= $skliss['skills_progress_text'];?></span>
                                <div class="progressWrapper">
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skliss['skills_progress_count'];?>%;" aria-valuenow="<?= $skliss['skills_progress_count'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <!-- End Education Item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $select_service_query = "SELECT * FROM services ORDER BY id DESC LIMIT 6";
                        $service_from_db = mysqli_query(db(), $select_service_query);
                        // print_r($service_from_db);
                        
                    ?>
                     
                    <?php foreach($service_from_db as $service):?>
                        <?php if($service['services_status']==2):?>
                            <div class="col-lg-4 col-md-6">
                                <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$service['service_icon']; ?>"></i>
                                    <h3><?=$service['service_title'];?></h3>
                                    <p><?=substr($service['service_desc'],0,-1); ?> <a href="#">see more</a></p>
                                </div>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                    
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/1.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Design</span>
                                <h4><a href="portfolio-single.html">FASHION                                </a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/2.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Development</span>
                                <h4><a href="portfolio-single.html">MANPOWER NURSES                                </a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/3.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Development</span>
                                <h4><a href="portfolio-single.html">KAREKREST</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/4.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Development</span>
                                <h4><a href="portfolio-single.html">Vaimar Suites</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/5.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Design</span>
                                <h4><a href="portfolio-single.html">PERFECT CUISINE                                </a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/6.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>UX/UI</span>
                                <h4><a href="portfolio-single.html">Explicit Staffing</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php
                            $select_query = "SELECT * FROM experiences LIMIT 4";
                            $data_from_db = mysqli_query(db(), $select_query);
                        ?>
                         <?php foreach($data_from_db as $experience):?>
                            <div class="col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$experience['experience_icon']; ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$experience['experience_count']; ?></span></h2>
                                        <span><?=$experience['experience_text'];?></span>
                                        <!-- <span>Feature Item</span> -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="assets/frontend_assets/img/images/testi_avatar.png" alt="img">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5>tonoy jakson</h5>
                                        <span>head of idea</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="assets/frontend_assets/img/images/testi_avatar.png" alt="img">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5>tonoy jakson</h5>
                                        <span>head of idea</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="assets/frontend_assets/img/brand/brand_img01.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="assets/frontend_assets/img/brand/brand_img02.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="assets/frontend_assets/img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="assets/frontend_assets/img/brand/brand_img04.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="assets/frontend_assets/img/brand/brand_img05.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="assets/frontend_assets/img/brand/brand_img03.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                            <h5>OFFICE IN <span>Cox's Bazar</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span>Kolatoli Cox's Bazar</li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span>+880 1714 163 962</li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>abdullahalnomanme@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php if(isset($_SESSION['contact_success'])):  ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php 
                                echo $_SESSION['contact_success'];
                                unset($_SESSION['contact_success']);
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        <?php endif;?>
                        <div class="contact-form">
                            <form action="contact_post.php" method="POST">
                                <input type="text" placeholder="your name *" name="guest_name" value="<?php
                                if(isset($_SESSION['guest_name'])){
                                    echo $_SESSION['guest_name'];
                                    unset ($_SESSION['guest_name']);
                                }

                                ?>">
                                    <small class="text-danger text-uppercase">
                                    <?php 
                                    if(isset($_SESSION['guest_name_error'])){
                                        echo $_SESSION['guest_name_error'];
                                        unset($_SESSION['guest_name_error']);
                                    }
                                    ?>
                               </small>
                                
                        
                                <input type="email" placeholder="your email *" name="guest_email" value="<?php
                                if(isset($_SESSION['guest_email'])){
                                    echo $_SESSION['guest_email'];
                                    unset ($_SESSION['guest_email']);
                                }

                                ?>">
                                    <small class="text-danger text-uppercase">
                                        <?php
                                            if(isset( $_SESSION['guest_email_error'])){
                                                echo  $_SESSION['guest_email_error'];
                                                unset( $_SESSION['guest_email_error']);
                                            }

                                        ?>
                                    </small>

                                <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                                <small class="text-danger text-uppercase">
                                        <?php
                                            if(isset( $_SESSION['guest_message_error'])){
                                                echo  $_SESSION['guest_message_error'];
                                                unset( $_SESSION['guest_message_error']);
                                            }

                                        ?>
                                    </small>
                                    <br/>
                                <button class="btn d-inline-block" type="submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->   
    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright © <span>Nomansoft</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="assets/frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/frontend_assets/js/popper.min.js"></script>
    <script src="assets/frontend_assets/js/bootstrap.min.js"></script>
    <script src="assets/frontend_assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/frontend_assets/js/one-page-nav-min.js"></script>
    <script src="assets/frontend_assets/js/slick.min.js"></script>
    <script src="assets/frontend_assets/js/ajax-form.js"></script>
    <script src="assets/frontend_assets/js/wow.min.js"></script>
    <script src="assets/frontend_assets/js/aos.js"></script>
    <script src="assets/frontend_assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/frontend_assets/js/jquery.counterup.min.js"></script>
    <script src="assets/frontend_assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/frontend_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/frontend_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/frontend_assets/js/plugins.js"></script>
    <script src="assets/frontend_assets/js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>