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
                        <h2>Sign-Up</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
                        <img style="height:90%;" src="images/sign-up.png">
                        
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
                        <br>
                        <form method="POST" action="backend/sign-up.php">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Name *</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter your full name" maxlength="200" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email *</label>
                             <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your academic email address"   required><!--pattern=".+@diu.edu.bd" -->
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Student ID *</label>
                            <input type="text" name="student_id" class="form-control" id="exampleInputEmail1" placeholder="Enter your student id" minlength="10" maxlength="13" required>
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Phone *</label>
                            <input class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter your phone number" type="phone" pattern="[0]+[1]+[7/8/9/6/5/3]+[0-9]{8}" required>
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password *</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" minlength="6" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password *</label>
                            <input type="password" name="re_password" class="form-control" id="exampleInputPassword1" placeholder="Re-type Password" required>
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary" name="registration">Sign-Up</button>
                        </form>
                        <br>
                        <p>Already have account?</p>
                        <p>Click here to <a href="sign-in.php">Sign-In</a></p>
                        
                    </div>
                    
                </div>
                
            </div>

        </div>
        
    </div>



    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
