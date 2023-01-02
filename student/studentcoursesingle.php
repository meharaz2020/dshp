<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>
<div class="content-wrapper">

 <!--====== COURSES SINGEl PART START ======-->
     <?php
                 if (isset($_GET['view'])) {

                     $thePost = $_GET['view'];
                      $sql = "SELECT * FROM course_details WHERE id ='$thePost'";
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
                             $final_question        = $row['final_question'];
                              $mid_question        = $row['mid_question'];
                           
                            $status                  = $row['status'];

                     ?>
    
    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3><?php echo $course_title;?></h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <span>Teacher :</span>
                                            <h6><?php echo  $faculty ; ?></h6>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Program : </span>


                                          <?php
                                    $sql = "SELECT * FROM program WHERE program_id = '$shift'";
                                    $readShift = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_assoc($readShift)) {

                                        // $program_id     = $row['program_id '];
                                        $program_list  = $row['program_list'];
                                        ?>
                                        <h5><?php echo $program_list; ?></h5>
                                        
                                <?php   }



                                    ?>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Course Code :</span>
                                        <h5><?php echo $course_code; ?></h5>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->
                        
                        <div class="corses-singel-image pt-50">
                            <img src="../admin/img/outline/<?php echo $course_question; ?>" alt="Courses">
                        </div> <!-- corses singel image -->
                        
                       
                    </div> 
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clone"></i>Course Credit : <span><?php echo $credit; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Credit Cost : <span></span><?php echo $credit_cost; ?>Tk</span></li>
                                      <li><i class="fa fa-clone"></i>Total Cost : <span></span><?php echo $total_payment; ?>Tk</span></li>


                                        <?php
                                    $sql = "SELECT * FROM course_level_area WHERE level_id  = '$course_level'";
                                    $readLevel = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_assoc($readLevel)) {

                                        // $program_id     = $row['program_id '];
                                        $level_name  = $row['level_name'];
                                        ?>
                                        <li><i class="fa fa-clone"></i>Course Level :  <span><?php echo $level_name; ?></span></li>
                                        
                                <?php   }



                                    ?>
                                     <li><i class="fa fa-clone"></i>Mid Question : <span><a href="../admin/img/outline/<?php echo $mid_question; ?>">Download Now</a></span></li>
                                    
                         <li><i class="fa fa-clone"></i>Final Question : <span><a href="../admin/img/outline/<?php echo $final_question; ?>">Download Now</a></span></li>
                          <li><i class="fa fa-clone"></i>Course Outline : <span><a href="../admin/img/outline/<?php echo $course_outline; ?>">Download Now</a></span></li>

                                
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
</div>
  
  <?php

  include "inc/footer.php";

?>
  <!-- Control Sidebar -->
  <?php

  include "inc/sidebar.php";

?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <?php

  include "inc/script.php";

?>