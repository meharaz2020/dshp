<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>
<div class="content-wrapper">

 <!--====== COURSES SINGEl PART START ======-->
     <?php
                 if (isset($_GET['view'])) {

                     $thePost = $_GET['view'];
                      $sql = "SELECT * FROM supervisor WHERE supervisor_id ='$thePost'";
                      $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $supervisor_id     = $row['supervisor_id'];
                $name              = $row['name'];
                $designation       = $row['designation'];
                $faculty_name      = $row['faculty_name'];
                $initial           = $row['initial'];
                $email             = $row['email'];
                $phone             = $row['phone'];
                $description       = $row['description'];
                $gender            = $row['gender'];
                $campus            = $row['campus'];
                $personal_website  = $row['personal_website'];
                           
                $area_research     = $row['area_research'];

                $image             = $row['image'];
                           
                $status            = $row['status'];

                     ?>
    
    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3><?php echo $name;?></h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <span>Designation :</span>
                                            <h6><?php echo  $designation ; ?></h6>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Faculty : </span>


                                          <?php
                                    $sql = "SELECT * FROM faculty WHERE faculty_id = '$faculty_name'";
                                    $readShift = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_assoc($readShift)) {

                                        // $program_id     = $row['program_id '];
                                        $name  = $row['name'];
                                        ?>
                                         <h5><?php echo $name; ?></h5>
                                      
                                        
                                <?php   }


                                    ?>

                                     
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>initial :</span>
                                        <h5><?php echo $initial; ?></h5>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->
                        
                        <div class="corses-singel-image pt-50">
                            <img src="../admin/img/supervisor/<?php echo $image; ?>" alt="Courses">
                        </div> <!-- corses singel image -->
                        
                       
                    </div> 
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Supervisor Features </h4>
                                <ul>
                                    <li><i class="fa fa-clone"></i>Email : <span><?php echo $email; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Phone: <span></span><?php echo $phone; ?></span></li>
                                      <li><i class="fa fa-clone"></i>Gender : <span><?php if($gender == 0){
                                        echo "Male";
                                    }
                                    else{
                                        echo "Female";
                                    } ?></span></li>

                                        <li><i class="fa fa-clone"></i>Campus : <span><?php echo $campus; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Website: <span></span><?php echo $personal_website; ?></span></li>
                                      

                                      <li>
                                    
                                       


                                          <?php
                                    $sql = "SELECT * FROM research_area WHERE id = '$area_research'";
                                   

                                    $readResearch = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_assoc($readResearch)) {

                                         // $id     = $row['id '];
                                        $research_field  = $row['research_field'];

                                        ?>
                                        <i class="fa fa-clone"></i>Research Area: <span></span><?php echo $research_field; ?></span>

                                        
                                      
                                        
                                <?php   }


                                    ?>
   
                                  
                                </li>
                                
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