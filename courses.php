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
    <title>Courses | Student Help Portal</title>

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
                        <h2>Our Courses</h2>
                       
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== COURSES PART START ======-->
    
    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                            </li>
                            
                        </ul> 
                        
                       <!--  <div class="courses-search float-right">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>  -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">

                        <?php
                        $per_page =9;
                        $start =0;
                        $current_page=1;

                        if (isset($_GET['start'])) {

                            $start =$_GET['start'];

                            $current_page=$start;

                            $start--;

                            $start=$start*$per_page;
                        }
                        
                        $record = mysqli_num_rows(mysqli_query($db, "SELECT * FROM course_details where status=1"));

                        $pagi =ceil($record/$per_page);

                        $sql = "SELECT * FROM course_details where status=1 ORDER BY id DESC limit $start, $per_page";
                        $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $id                     = $row['id'];
                            $course_title           = $row['course_title'];
                            $course_code            = $row['course_code'];
                            $credit                 = $row['credit'];
                            $credit_cost            = $row['credit_cost'];
                            $faculty                = $row['faculty'];
                            $shift                  = $row['shift'];
                            $total_payment          = $row['total_payment'];
                            $course_level           = $row['course_level'];
                            $course_outline         = $row['course_outline'];
                            $course_question        = $row['course_question'];
                           
                            $status                  = $row['status'];

                            ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                      <a href="coursesingle.php?view=<?php echo $id?>">  <img src="admin/img/outline/<?php echo $course_question; ?>" alt="Course"></a>
                                    </div>
                                    <!-- <div class="price">
                                        <span>Free</span>
                                    </div> -->
                                </div>
                                <div class="cont">
                                   <!--  <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> -->
                                    
                                    <a href="coursesingle.php?view=<?php echo $id?>"><h4><?php echo $course_title;?></h4></a>
                                    <div class="course-teacher">
                                       <!--  <div class="thum">
                                            <a href="#"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                        </div> -->
                                        <div class="name">
                                            <h5>Faculty:<?php echo $faculty; ?></h5>
                                            <!-- <a href="#"><h6><?php echo $faculty; ?></h6></a> -->
                                        </div>
                                        <div class="admin">
                                            <ul>
  <?php
                                    $sql = "SELECT * FROM program WHERE program_id = '$shift'";
                                    $readShift = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_assoc($readShift)) {

                                        // $program_id     = $row['program_id '];
                                        $program_list  = $row['program_list'];
                                        ?>
                                       <li><a href=""><h6> Program :<?php echo $program_list; ?></h6></a></li>
                                        
                                <?php   }



                                    ?>

                          

                       
                                                


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>

                        <?php

                    }
                    ?>
                        
                    </div> <!-- row -->
                </div>
                <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                    <div class="row">

                        <?php
                        $sql = "SELECT * FROM course_details where status=1 ORDER BY id DESC limit $start, $per_page ";
                        $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $id                     = $row['id'];
                            $course_title           = $row['course_title'];
                            $course_code            = $row['course_code'];
                            $credit                 = $row['credit'];
                            $credit_cost            = $row['credit_cost'];
                            $faculty                = $row['faculty'];
                            $shift                  = $row['shift'];
                            $total_payment          = $row['total_payment'];
                            $course_level           = $row['course_level'];
                            $course_outline         = $row['course_outline'];
                            $course_question        = $row['course_question'];
                           
                            $status                  = $row['status'];

                            ?>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <a href="coursesingle.php?view=<?php echo $id?>">  <img src="admin/img/outline/<?php echo $course_question; ?>" alt="Course"></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                           
                                            
                                            <a href="#"><h4><?php echo $course_title;?></h4></a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href=""><h6><?php echo $faculty;?></h6></a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                       <?php

                         $sql = "SELECT * FROM course_level_area WHERE level_id =  $course_level  ";
                        $allLevel = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allLevel) ){

                            $level_id              = $row['level_id'];
                            $level_name            = $row['level_name'];
                           ?>

                           <li><a href=""><span> Course Level :<?php echo $level_name; ?></span></a></li>

                        <?php  }
                                                ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                          <?php

                    }
                    ?>
                    </div> <!-- row -->
                </div>
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                          <!--   <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li> -->
                            <?php
                            for ($i=1; $i <= $pagi ; $i++) { 
                               $class='';
                               if ($current_page == $i) {
                                   $class='active';
                               }?>
<li class="page-item <?php echo $class?>"><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i ?></a></li>
                               <?php
                            }



                            ?>
                        </ul>
                    </nav>  
                </div>
            </div>  
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->


    
    <?php include "inc/footer.php"; ?>

    <?php include "inc/extra-js.php"; ?> 

</body>
</html>
