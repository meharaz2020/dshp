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
    <title>Student Help Portal</title>

    <?php include "inc/head.php";?>
  
  
</head>

<body>
   

    
    <!--====== HEADER PART START ======-->

        <?php include "inc/header.php";?> 

    <!--====== HEADER PART ENDS ======-->


    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-50 pb-50 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Forget Password</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    <div class="pt-70 pb-110">
        <div class="container">
            <div class="signin">
                <div class="row">
                    <div class="col-sm-6">
                        <img style="height:100%;" src="images/forget-password.jpg">
                        
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
                        <br>
                        <center><h5>Forget your password?</h5></center>
                        <br>
                        <center><p>Don't worry, Kindly enter your registered email address. We will send you a reset link to the email address.</p></center>
                        <br>

                        <form method="POST" action="backend/forget-password.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Registered Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required>
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary" name="submit">Send</button>
                        </form>
                        <br>
                        <p>Back to <a href="sign-in.php">Sign-In</a></p>
                        <!-- <p><a href="forget-password.php">Forget Password?</a></p> -->
                        
                    </div>
                    
                </div>
                
            </div>

        </div>
        
    </div>

    


    
   


    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
