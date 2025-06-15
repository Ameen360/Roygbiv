<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

$mail_status = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yourgmail@gmail.com'; // Your Gmail address
        $mail->Password   = 'your_app_password';   // Gmail App Password (not your Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('yourgmail@gmail.com', 'ROYGBIV Website');
        $mail->addAddress('techengineguy@gmail.com'); // Your receiving email

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Contact Form Submission from ' . htmlspecialchars($_POST['name']);
        $mail->Body    = "Name: " . htmlspecialchars($_POST['name']) . "\r\n"
                       . "Email: " . htmlspecialchars($_POST['email']) . "\r\n"
                       . "Phone: " . htmlspecialchars($_POST['phone']) . "\r\n"
                       . "Message:\r\n" . htmlspecialchars($_POST['message']);

        $mail->send();
        $mail_status = '<div class="alert alert-success">Thank you for contacting us. We will get back to you soon.</div>';
    } catch (Exception $e) {
        $mail_status = '<div class="alert alert-danger">Sorry, your message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Coco onepage themeforest" />
    <meta name="description" content="Coco - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Roygbiv</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/ROYGBIV 1 favico.ico" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />

    <script src="https://kit.fontawesome.com/cece0f93fd.js" crossorigin="anonymous"></script>

    <style>
        .gal {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }
        .item-img {
            width: 100%;
            height: 260px; /* Set your desired height */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #f8f8f8;
        }

        .item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }
    </style>

</head>

<body>

    <!-- =====================================
    	==== Start Loading -->

    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- End Loading ====
    	======================================= -->


    <!-- =====================================
    	==== Start Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/editedROYGBIV 1.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="1">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="4">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    	======================================= -->


    <!-- =====================================
    	==== Start Header -->

    <header class="header pos-re slider-fade" data-scroll-index="0">

        <div class="owl-carousel owl-theme">
            <div class="item bg-img" data-overlay-dark="5" data-background="img/lab2.jpg">
                <div class="text-center v-middle caption mt-30">
                    <h4>Welcome to</h4>
                    <h1>ROYGBIV ANALYTICAL AND ENVIRONMENTAL SERVICES LIMITED</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>We are a dedicated analytical and environmental services company, specializing in precise
                                and reliable laboratory testing,
                                environmental consulting, and innovative solutions that protect and enhance the health
                                of people and the environment.</p>
                        </div>
                    </div>
                    <a href="#0" class="butn butn-light mt-30">
                        <span>Get Started</span>
                    </a>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="img/lab1.webp">
                <div class="text-center v-middle caption mt-30">
                    <h4>Welcome to</h4>
                    <h1>ROYGBIV ANALYTICAL AND ENVIRONMENTAL SERVICES LIMITED</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>We are a dedicated analytical and environmental services company, specializing in precise
                                and reliable laboratory testing,
                                environmental consulting, and innovative solutions that protect and enhance the health
                                of people and the environment.</p>
                        </div>
                    </div>
                    <a href="#0" class="butn butn-light mt-30">
                        <span>Get Started</span>
                    </a>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="img/lab4.jpg">
                <div class="text-center v-middle caption mt-30">
                    <h4>Welcome to</h4>
                    <h1>ROYGBIV ANALYTICAL AND ENVIRONMENTAL SERVICES LIMITED</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>We are a dedicated analytical and environmental services company, specializing in precise
                                and reliable laboratory testing,
                                environmental consulting, and innovative solutions that protect and enhance the health
                                of people and the environment.</p>
                        </div>
                    </div>
                    <a href="#0" class="butn butn-light mt-30">
                        <span>Get Started</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- End Header ====
    	======================================= -->



    <!-- =====================================
        ==== Start Hero -->

    <section class="hero" data-scroll-index="1">
        <div class="section-padding pos-re">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 text-center mb-80">
                        <h4 class="extra-title">About Our <span>Company</span> </h4>
                        <p style="color: #000;">ROYGBIV Analytical and Environmental Services Limited specializes in providing comprehensive
                            laboratory analysis and
                            environmental consulting services. We utilize advanced scientific techniques and
                            cutting-edge technology to deliver
                            accurate testing, monitoring, and advisory solutions. Our services include chemical
                            analysis, environmental impact
                            assessments, air and water quality testing, and waste management. Committed to safeguarding
                            public health and the
                            environment, we offer tailored solutions to meet regulatory compliance and promote
                            sustainable practices across various
                            industries.The company was incorporated in Sepxxx, 19xx with registration number [RC....].
                        </p>
                        <p style="color: #000;">Roygbiv is accredited by the Institute of Public Analysts of Nigeria (IPAN) for the analysis
                            and certification of consumer
                            products, raw materials, environmental samples, and general chemicals. We also collaborate
                            closely with the National Agency
                            for Food and Drug Administration and Control (NAFDAC) for laboratory services and product
                            registration.
                        </p>
                    </div>



                    <div class="curve curve-gray-b curve-bottom"></div>
                </div>

                <div class="tabs-section section-padding bg-gray">
                    <div class="container">
                        <div class="row">

                            <ul class="col-md-12 nav nav-pills tabs" id="pills-tab" role="tablist">
                                <li class="nav-item one active">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#tab1"
                                        role="tab" aria-controls="tab1" aria-selected="true">About Us</a>
                                </li>
                                <li class="nav-item two">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tab2"
                                        role="tab" aria-controls="tab2" aria-selected="false">Our Mission</a>
                                </li>
                                <li class="nav-item three">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tab3"
                                        role="tab" aria-controls="tab3" aria-selected="false">Why Us?</a>
                                </li>
                            </ul>

                            <div class="tab-content col-lg-12" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="left col-lg-6">
                                            <div class="about box-white">
                                                <h5 class="title">About Us</h5>
                                                <h6 class="sub-title">Public analyst laboratory and environmental
                                                    consultant</h6>
                                                <p>We are a dedicated analytical and environmental services company,
                                                    specializing in precise
                                                    and reliable laboratory testing, environmental consulting, and
                                                    innovative solutions that
                                                    protect and enhance the health of people and the environment.</p>

                                                <!-- Skills -->

                                                <div class="skills mt-40">
                                                    <div class="skill-item mb-20">
                                                        <h6>Laboratory Service</h6>
                                                        <div class="skill-progress">
                                                            <div class="progres" data-value="90%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-item mb-20">
                                                        <h6>Environmental Services</h6>
                                                        <div class="skill-progress">
                                                            <div class="progres" data-value="75%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-item">
                                                        <h6>Training</h6>
                                                        <div class="skill-progress">
                                                            <div class="progres" data-value="80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 image">
                                            <div class="img">
                                                <img src="img/lab4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="left col-lg-6">
                                            <div class="mission box-white">
                                                <h5 class="title">Our Mission</h5>
                                                <h6 class="sub-title">Public analyst laboratory and environmental
                                                    consultant</h6>
                                                <p class="mb-10"> To establish ourselves as a premier public analyst
                                                    laboratory and environmental consultancy by delivering exceptional,
                                                    accurate, and rapid testing services, coupled with effective
                                                    environmental management solutions that fully comply with
                                                    current laws, regulations, and global best practices.</p>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 image">
                                            <div class="img">
                                                <img src="img/image6.jpg" alt="">
                                                <a class="vid" href="https://vimeo.com/127203262">
                                                    <span class="vid-butn">
                                                        <i class="fas fa-play-circle"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="left col-lg-6">
                                            <div class="why-us box-white">
                                                <h5 class="title">Why Choose Us?</h5>
                                                <h6 class="sub-title">Public analyst laboratory and environmental
                                                    consultant</h6>
                                                <p> ROYGBIV offers expert laboratory analysis and environmental
                                                    consulting. Our skilled team,
                                                    cutting-edge technology, and comprehensive services ensure accurate,
                                                    reliable, and compliant results.
                                                    We prioritize client satisfaction and environmental stewardship.
                                                    With a proven track record, we are your
                                                    trusted partner for all analytical and environmental needs.</p>
                                                <ul class="feat mt-30 row">
                                                    <li class="col-sm-4">
                                                        <i class="fas fa-tablet-alt" style="margin-bottom: 20px;"></i>
                                                        <h6>Accurate Analysis</h6>
                                                    </li>
                                                    <li class="col-sm-4">
                                                        <i class="fas fa-map-marker-alt" style="margin-bottom: 20px;"></i>
                                                        <h6>Environmental Focus</h6>
                                                    </li>
                                                    <li class="col-sm-4">
                                                        <i class="fas fa-globe" style="margin-bottom: 20px;"></i>
                                                        <h6>Certified Expertise</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 image">
                                            <div class="img owl-carousel owl-theme carousel-single">
                                                <img src="img/image1.jpg" alt="">
                                                <img src="img/image2.jpg" alt="">
                                                <img src="img/image3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    </section>

    <!-- End Hero ====
        ======================================= -->


    <!-- =====================================
        ==== Start Process -->
    <section class="Process" data-scroll-index="2">
        <div class="process section-padding bg-img bg-fixed pos-re text-center" data-overlay-dark="7"
            data-background="img/bg6.jpg">
            <div class="container">
                <div class="row">

                    <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                        <h4> What We Do</h4>
                        <h6> Analysis and certification of consumer products, raw materials & more</h6>
                        <p>
                            ROYGBIV Analytical and Environmental Services Limited is registered by the Institute
                            of Public Analysts of Nigeria (IPAN) for the analysis and certification of consumer products,
                            raw materials, environmental samples, sales of laboratory equipment and general chemicals.
                            Our services include:
                        </p>
                    </div>
                    <div class="full-width clearfix"></div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item first mb-md50">
                            <img src="img/arrow.png" class="tobotm" alt="">
                            <span class="icon icon-basic-lightbulb"></span>
                            <div class="cont">
                                <h3>01</h3>
                                <h6>Laboratory Service</h6>
                                <p>Our laboratory specializes in physicochemical and microbiological analysis. We offer
                                    testing
                                    services for diverse samples such as raw materials, food, beverages, water, wastewater,
                                    soil,
                                    chemicals, cosmetics, and swabs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item odd mb-md50">
                            <img src="img/arrow.png" alt="">
                            <span class="icon icon-basic-book-pencil"></span>
                            <div class="cont">
                                <h3>02</h3>
                                <h6>Product registration/ Industrial consultancy</h6>
                                <p>Provide regulatory support for product registration with NAFDAC and approval with SON
                                    under the Nigerian Industrial Standard (NIS) process, adhering to international
                                    standards
                                    for Good Manufacturing Practices (GMP) and Good Laboratory Practices (GLP).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item mb-sm50">
                            <img src="img/arrow.png" class="tobotm" alt="">
                            <span class="icon icon-basic-pencil-ruler"></span>
                            <div class="cont">
                                <h3>03</h3>
                                <h6>Environmental Services</h6>
                                <p>Environmental services, including:
                                    Impact Assessments (EIA, EA, EAR),
                                    Environmental Management Plans (EMP),
                                    Pollution Impact Assessments (PIA, PIS).
                                    Specializing in air and water quality management, noise reduction, and dust emission
                                    control.
                                    Mitigating heat stress and oil spill risks with contingency planning.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item odd">
                            <span class="icon icon-basic-server-upload"></span>
                            <div class="cont">
                                <h3>04</h3>
                                <h6>Sales of Laboratory Equipment/ Training</h6>
                                <p>we specialize in providing top-quality laboratory equipment to support your scientific
                                    endeavors.
                                    Our extensive range of products includes:||
                                </p>
                                <p>Unlock your team's potential with our professional development services, including IPAN
                                    mentorship,
                                    graduate training, and personnel training programs. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="curve curve-gray-t curve-top"></div>
            <div class="curve curve-bottom"></div>
        </div>
    </section>
    <!-- End Process ====
        ======================================= -->


    <!-- =====================================
        ==== Start Works -->

    <section class="works section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Product</span> Portfolio</h4>
                    <p> Explore our extensive selection of instruments, carefully curated to deliver exceptional
                        performance.
                        From sterilization to advanced analysis, we have everything you need to equip your lab.</p>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center mb-30 col-sm-12">
                    <div class="filter">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Water</span>
                        <span data-filter='.web'>Environmental</span>
                        <span data-filter='.graphic'>Agricultural</span>
                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- gallery -->
                <div class="gallery full-width gal">

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand ">
                        <div class="item-img">
                            <img src="img/portfolio/HM2000.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Metalyser Metalometer HM2000 (Portable)</h6>
                                    <p>Portable system combining electrochemical and photometric methods for detecting
                                        cadmium, lead,
                                        mercury, and more, including low/high-range metals.</p>
                                    <a href="img/portfolio/HM2000.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/HM3000.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Metalyser Field Pro HM3000 (Portable)</h6>
                                    <p> Portable heavy metals analyzer combines Metalyser® with a waterproof tablet for
                                        precise,
                                        multi-point analysis, detecting levels as low as 1ppb. </p>
                                    <a href="img/portfolio/HM3000.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/imag4.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Weather Monitor System, Handheld Type(BAWM-4, BAWM-13)</h6>
                                    <p>The Handheld Agricultural Weather Monitor measures real-time air/soil parameters (temperature, humidity, light,
                                        wind, rainfall, CO₂, pH, salinity, etc.) for precision agriculture, forestry, horticulture, and livestock
                                        management. </p>
                                    <a href="img/portfolio/imag4.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/env1.webp" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>COMPARATOR WHEEL</h6>
                                    <p>The wheel comparator method is ideal when a wider variety of chemical tests could be necessary, or when future
                                        test additions need to be accommodated.</p>
                                    <a href="img/portfolio/env1.webp" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/imag2.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Portable Area Meter (PAM-T2)</h6>
                                    <p> The PAM-T2 is a high-precision wild area measurement instrument designed with a positioning system,
                                        an embedded microcontroller, and advanced algorithms. It efficiently measures the area and perimeter
                                        of land or lakes with ease. </p>
                                    <a href="img/portfolio/imag2.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/imag3.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Multi-Rice, Wheat Thresher (BTSH-150)</h6>
                                    <p> The PAM-T2 is a high-precision wild area measurement instrument designed with a positioning system,
                                        an embedded microcontroller, and advanced algorithms. It efficiently measures the area and perimeter
                                        of land or lakes with ease. </p>
                                    <a href="img/portfolio/imag3.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/imag5.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>latest Soil Nutrient Tester (BSN-6A, BSN-7PC)</h6>
                                    <p>Tests N, P, K, pH, salinity, organic matter, and soil moisture. Includes storage, printing, and fertilizer guidance
                                        for 73 crops. Enhanced model of BSN-6PC with added features.</p>
                                    <a href="img/portfolio/imag5.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/imag6.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Seed Counter( BSCT-1)</h6>
                                    <p>Compatible with corn, rice, wheat, rape, vegetables, and more. Features automatic sample separation, 7-inch touch
                                        screen for guided use, stepless speed adjustment, and three turntable modes. Records time, total grain count, and
                                        number of samples.</p>
                                    <a href="img/portfolio/imag6.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items graphic">
                        <div class="item-img">
                            <img src="img/portfolio/imag9.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Soil pH-Moisture Meter</h6>
                                    <p>Model BSPH-60 is a simple, easy-to-use soil tester that directly inserts into soil to measure pH and moisture—key
                                        factors affecting crop yield and quality. pH range: 3–8 (±0.2), moisture range: 1–8% (±1%). </p>
                                    <a href="img/portfolio/imag9.JPG" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/Mobile Labs.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Mobile Laboratories</h6>
                                    <p>Wagtech has years of expertise designing custom mobile laboratories for remote or challenging environments.
                                        We use versatile vehicles—from Land Rovers to Toyota Hiluxes—ensuring a solution tailored to your budget,
                                        space, and operational requirements with reliable, field-ready performance.</p>
                                    <a href="img/portfolio/Mobile Labs.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/sea-buoy1.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Hydromet Solutions </h6>
                                    <p>Wagtech Projects & Trace2o develops innovative solutions to strengthen community resilience against hydromet
                                        hazards and enhance government monitoring networks.</p>
                                    <a href="img/portfolio/sea-buoy1.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/imag7.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Tracemet Automatic Weather Stations</h6>
                                    <p>TraceMet's six AWS models deliver reliable atmospheric, soil, and water data. Entry-level to premium agrometeorological
                                        options all include TraceLogger, 18Ah battery with heat shield, and 30W solar for autonomous operation with minimal
                                        maintenance.</p>
                                    <a href="img/portfolio/imag7.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/HM4000.JPG" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>Metalyser HM4000 (Portable)</h6>
                                    <p> Lightweight portable system for heavy metals analysis with dual waterproof
                                        cases,
                                        supporting six parameters. Offers single-point calculation for efficient field
                                        screening. </p>
                                    <a href="img/portfolio/6.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/HydroKit HK5000 Image 3_JPG.jpg" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>HYDROKIT HK5000</h6>
                                    <p> A rapid and highly accurate trace heavy metals analyser measuring to ppb levels
                                        in the field is
                                        added to the HydroKit Pro 3000 to create this complete kit. </p>
                                    <a href="img/portfolio/6.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items brand">
                        <div class="item-img">
                            <img src="img/portfolio/Aquacheck png.jpg " alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>Equipment | Features</p>
                                    <h6>AquaCheck AC2000</h6>
                                    <p> The AquaCheck Multiparameter meter evaluates key water quality parameters (pH,
                                        conductivity, TDS, dissolved oxygen, ORP) on-site,
                                        ensuring rapid, accurate results comparable to lab testing. Fully portable,
                                        versatile, and intuitive, it supports diverse sensors
                                        for reliable assessments in environmental engineering. </p>
                                    <a href="img/portfolio/7.jpg" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <!-- End Works ====
        ======================================= -->


    <!-- =====================================
        ==== Start Why-us -->
    <section class="why-us" data-scroll-index="4">
        <div class="why-us section-padding bg-gray pos-re">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="img mb-md50">
                            <img src="img/image5.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content pt-10">
                            <div class="item mb-40">
                                <span class="icon icon-basic-display"></span>
                                <div class="cont">
                                    <h5>Laboratory Service</h5>
                                    <p>We offer ISO-accredited precision testing - from chemical analysis to environmental monitoring and quality
                                        certification - powered by certified analysts and advanced lab technology.</p>
                                </div>
                            </div>
                            <div class="item mb-40">
                                <span class="icon icon-basic-bolt"></span>
                                <div class="cont">
                                    <h5>Environmental Services</h5>
                                    <p>We provide ISO-certified environmental analysis: pollution monitoring, EIA studies, remediation planning, and
                                        compliance reporting—supporting ecological health and regulatory requirements with precision.</p>
                                </div>
                            </div>
                            <div class="item">
                                <span class="icon icon-basic-headset"></span>
                                <div class="cont">
                                    <h5>Training</h5>
                                    <p>IPAN-recognized training in chemical analysis, environmental monitoring, and quality management systems for
                                        laboratory technicians, EHS professionals, and regulatory officers.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="curve curve-top"></div>
            <div class="curve curve-bottom"></div>
        </div>
    </section>

    <!-- End Why-us ====
        ======================================= -->


    <!-- =====================================
        ==== Start Teams -->
    <!-- 
    <section class="team section-padding" data-scroll-index="#">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Talent</span> Team</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/1.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/2.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/3.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/4.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-img">
                            <img src="img/team/3.jpg" alt="">
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info">
                            <h6>Alex Smith</h6>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <!-- End Teams ====
        ======================================= -->



    <!-- =====================================
        ==== Start Testimonials -->

    <section class="testimonials section-padding bg-img bg-fixed pos-re" data-overlay-dark="7"
        data-background="img/bg4.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>What's <span>Clients</span> Says?</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="owl-carousel owl-theme text-center col-lg-10 offset-lg-1">
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/1.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/2.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/3.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/4.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="curve curve-top"></div>
    </section>

    <!-- End Testimonials ====
        ======================================= -->





    <!-- =====================================
        ==== Start Blog -->

    <!-- <section class="blog section-padding" data-scroll-index="#">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Latest</span> News</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>
                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <!-- End Blog ====
        ======================================= -->


    <!-- =====================================
        ==== Start Call-Action -->

    <section class="call-action section-padding bg-img bg-fixed" data-overlay-dark="5" data-background="img/bg2.jpg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Want to work with us?</h2>
                        <h5>Tell us about your project</h5>
                        <a href="#0" class="butn butn-bg">
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Call-Action ====
        ======================================= -->


    <!-- =====================================
        ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6" style="color: #000;">
                    <h4 style="color: #000;">Get <span>In</span> Touch</h4>
                    <p style="color: #000;">For professional analytical and environmental service solutions, please contact ROYGBIV Analytical and
                        Environmental Services Limited. Our team of accredited experts is prepared to address your technical requirements
                        with precision and compliance.</p>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info mb-md50">
                        <h5>Contact ROYGBIV Analytical and Environmental Services:</h5>
                        <p>As accredited leaders in laboratory analysis and environmental consulting, we welcome inquiries from industries, 
                            regulatory bodies, and partners seeking precise, compliant solutions.</p>
                        <div class="item">
                            <i class="fas fa-tablet-alt"></i>
                            <div class="cont">
                                <h6>Phone : </h6>
                                <p>+234 8088147793 / 08154155841</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="fas fa-envelope"></i>
                            <div class="cont">
                                <h6>Email : </h6>
                                <p>roygbivservices@protonmail.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cont">
                                <h6>Address : </h6>
                                <p>Suite No.5, Abdulsalam Shopping Complex, off Hajj Camp, Ilorin, Kwara State, Nigeria.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form class="form" id="contact-form" method="post" action="index.php">
                        <div class="messages">
                            <?php if (isset($mail_status)) echo $mail_status; ?>
                        </div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Your Message" rows="4" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- End Contact ====
        ======================================= -->


    <!-- ================= Start Footer -->

    <footer class="footer-content">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between; 
        max-width: 1100px; margin: 0 auto; padding: 10px;">
            <!-- Logo on the left -->
            <a class="logo" href="#" style="text-decoration: none;">
                <img src="img/ROYGBIV 1.png" alt="logo" style="height: 80px; width: auto;">
            </a>

            <!-- Social icons and text centered together -->
            <div style="display: flex; flex-direction: column; align-items: center; flex: 1;">
                <div class="social" style="display: flex; gap: 15px; margin-bottom: 10px;">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                </div>

                <p style="margin: 0;">
                    <a target="_blank" href="#" style="color: #fff; text-decoration: none;">
                        © 2025 ROYGBIV ANALYTICAL AND ENVIRONMENTAL SERVICES LIMITED. All Rights Reserved
                    </a>
                </p>
            </div>
        </div>
    </footer>

    <!-- End Footer ====
        ======================================= -->





    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- popper.min -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- scrollIt -->
    <script src="js/scrollIt.min.js"></script>

    <!-- jquery.waypoints.min -->
    <script src="js/jquery.waypoints.min.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- YouTubePopUp.jquery -->
    <script src="js/YouTubePopUp.jquery.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>