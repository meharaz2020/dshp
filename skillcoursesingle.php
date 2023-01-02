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
   
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== COURSES SINGEl PART START ======-->
     <?php
                 if (isset($_GET['view'])) {

                     $thePost = $_GET['view'];
                      $sql = "SELECT * FROM course WHERE id ='$thePost'";
                      $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $id                     = $row['id'];
                            $course_name            = $row['course_name'];
                            $course_time            = $row['course_time'];
                            $course_by              = $row['course_by'];
                            $description            = $row['description'];
                            $total_seat             = $row['total_seat'];
                            $image                  = $row['image'];
                           
                           
                            $status                 = $row['status'];

                     ?>
    
    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3>Course Name : <?php echo $course_name;?></h3>
                        </div> <!-- title -->
                     
                        
                        <div class="corses-singel-image pt-50">
                            <img src="admin/img/course/<?php echo $image; ?>" alt="Courses">
                        </div> <!-- corses singel image -->
                        
                       
                    </div> 
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Course Time : <span><?php echo $course_time; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Course By : <span></span><?php echo $course_by; ?></span></li>
                                      <li><i class="fa fa-clone"></i>Total Seat : <span></span><?php echo $total_seat; ?></span></li>
                                       <li><i class="fa fa-clone"></i>Description : <span></span><?php echo $description; ?></span></li>


                                   

                                
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
