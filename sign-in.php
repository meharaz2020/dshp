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
                        <h2>Sign-In</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
                        <img style="height:90%;" src="images/sign-in.jpg">
                        
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
                        <br>
                        <form method="POST" action="backend/sign-in.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email / Student ID</label>
                            <input type="text" name="emailOrId" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email / student id" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email/ID with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" id="myInput" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            <input type="checkbox" class="mt-3" onclick="myFunction()">&nbsp;Show Password

                        </div>
                          <br>
                          <button type="submit" class="btn btn-primary" name="login">Submit</button>
                        </form>
                        <br>
                        <p>Don't have account?</p>
                        <p>Click here to <a href="sign-up.php">Sign-Up</a></p>
                        <p><a href="forget-password.php">Forget Password?</a></p>
                        
                    </div>
                    
                </div>
                
            </div>

        </div>
        
    </div>

    <script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
   


    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
