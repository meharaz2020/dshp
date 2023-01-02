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


    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Learn basic javascript</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Learn basic javasript</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== COURSES SINGEl PART START ======-->
     <?php
                 if (isset($_GET['view'])) {

                     $thePost = $_GET['view'];
                      $sql = "SELECT * FROM faculty WHERE faculty_id ='$thePost'";
                      $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $name              = $row['name'];
                            $designation       = $row['designation'];
                            $image             = $row['image'];
                            $faculty_id        = $row['faculty_id'];
                            $initial           = $row['initial'];
                            $email             = $row['email'];
                            $phone             = $row['phone'];
                            $description       = $row['description'];
                            $gender            = $row['gender'];
                            $campus            = $row['campus'];
                            $teaching_area     = $row['teaching_area'];

                            $website           = $row['website'];
                            $status            = $row['status'];
                           

                     ?>
    
    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            
                                        </div>
                                        <div class="name">
                                            <span>Teacher :</span>
                                            <h6><?php echo  $name ; ?></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Designation : </span>

                                           <h6><?php echo  $designation ; ?></h6>
                                      
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Initial:</span>
                                        <h5><?php echo $initial; ?></h5>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->
                        
                        <div class="corses-singel-image pt-50">
                            <img src="admin/img/users/<?php echo $image; ?>" alt="Courses">
                        </div> <!-- corses singel image -->
                        
                       
                    </div> 
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Faculty Information</h4>
                                <ul>
                                    <li><i class="fa fa-clone"></i>Email : <span><?php echo $email; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Phone : <span></span><?php echo $phone; ?></span></li>
                                    <li><i class="fa fa-clock-o"></i>Gender : <span><?php if($gender == 0){
                                        echo "Male";
                                    }
                                    else{
                                        echo "Female";
                                    } ?></span></li>
                                    <li><i class="fa fa-clone"></i>Campus : <span></span><?php echo $campus; ?></span></li>

                                    <li><i class="fa fa-clock-o"></i>Website : <span><?php echo $website; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Teaching Area : <span></span><?php echo $teaching_area; ?></span></li>


                                        
                                    
                         
                                
                                </ul>
                                
                            </div> 
                        </div>
                       
                    </div>
                </div>
            </div> 
            
        </div> 
    </section>

    
    <!--====== COURSES SINGEl PART ENDS ======-->
    
     <?php
}}
?>


    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
