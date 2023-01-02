<?php  
  include('backend/config.php');
  session_start();
?>
<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>About Us | Student Help Portal</title>

    <?php include "inc/head.php";?>
  
  
</head>

<body>
   

    
    <!--====== HEADER PART START ======-->

        <?php include "inc/header.php";?> 

    <!--====== HEADER PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Student Help Portal</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                    <p>Welcome to DSHP.It's a help portal of University Student.It create for only the CSE students to make their varsity life easily.<br><br>You can ensure many facilities in this website. You can create your own cv easily and save your project by link.Easily solve your varsity daily life problem.</p>

                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="images/about/about-2.jpg" alt="About">
                    </div>  <!-- about imag -->
                </div> 
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Automated Cv</h4>
                            <p>You can create a cv for your job sector. And you also use for your life to craete a bright future.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Skill Development Courses</h4>
                            <p>You easily see any kind of skill development course for our university. Skill job's provide high level course only for you.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Student Prefect</h4>
                            <p>If you good any academic course and you can teach other student, so this is for you. Create a profile and do it now.</p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>

    
   
   
  <div class="container">
    <h2 style="text-align: center;padding-bottom: 40px;font-size: 40px;">Our Technical Team </h2>
        <div class="row">
            
     
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/team/saad.jpg">
                    </div>
                    <h3 class="title">Md Saad Quamer</h3>
                    <span class="post">Web Developer</span>
                    <p>Meet our team leader. If face any problem just contact with him.</p>
                    <ul class="social">
                        <li><a href="#" class="fab fa-twitter"></a></li>
                         <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/team/meharaz.jpg">
                    </div>
                    <h3 class="title">Meharaz Hossain</h3>
                    <span class="post">Web Developer</span>
                    <p>Meet our team leader. If face any problem just contact with him.</p>
                    <ul class="social">
                       <li><a href="#" class="fab fa-twitter"></a></li>
                         <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/team/mishu.jpg">
                    </div>
                    <h3 class="title">Fatema Tuj Johora</h3>
                    <span class="post">Web Designer</span>
                    <p>If anyone face any spacific UI problem. So just share your opinion to our designer.</p>
                    <ul class="social">
                       
                         <li><a href="#" class="fab fa-twitter"></a></li>
                         <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
        </div>
    </div>

    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
