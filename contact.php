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
    <title>Contact | Student Help Portal</title>

    <?php include "inc/head.php";?>
  
  
</head>

<body>
   

    
    <!--====== HEADER PART START ======-->

        <?php include "inc/header.php";?> 

    <!--====== HEADER PART ENDS ======-->
       <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>

                        </div> <!-- section title -->
                         <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
                        <div class="main-form pt-45">
                                <form action="message.php" method="POST">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name" required>
        <!--   <i class='fas fa-user'></i> -->
        </div>
        <div class="field">
          <input type="email" name="email" placeholder="Enter your email" required>
          <!-- <i class='fas fa-envelope'></i> -->
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="phone" name="phone" placeholder="Enter your phone" required>
          <!-- <i class='fas fa-phone-alt'></i> -->
        </div>
        <div class="field">
          <input type="text" name="subject" placeholder="Enter your Subject" required>
          <!-- <i class='fas fa-globe'></i> -->
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="body" required></textarea>
        <!-- <i class="material-icons">message</i> -->
      </div>
      <div class="button-area">
        <button type="submit" name="message">Send Message</button>
        <span></span>
      </div>
    </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Daffodil Road, Ashulia, Dhaka.</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>01833102806</p>
                                        <p>01833102806</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>counselor@daffodilvarsity.edu.bd</p>
                                        <p>admission@daffodilvarsity.edu.bd</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                       
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8516569754074!2d90.37554581453374!3d23.752668784588312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sDaffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1637821571064!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                       
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->


    
   


    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
