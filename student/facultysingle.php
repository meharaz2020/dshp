<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper1">
    
      <div class="container">
        <div class="row"> -->
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
    <div class="content-wrapper">
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
                            <img src="../admin/img/users/<?php echo $image; ?>" alt="Courses">
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
                                    <li><i class="fa fa-clone"></i>Gender : <span><?php if($gender == 0){
                                        echo "Male";
                                    }
                                    else{
                                        echo "Female";
                                    } ?></span></li>
                                    <li><i class="fa fa-clone"></i>Campus : <span></span><?php echo $campus; ?></span></li>

                                    <li><i class="fa fa-clone"></i>Website : <span><?php echo $website; ?></span></li>
                                    <li><i class="fa fa-clone"></i>Teaching Area : <span></span><?php echo $teaching_area; ?></span></li>


                                        
                                    
                         
                                
                                </ul>
                                
                            </div> 
                        </div>
                       
                    </div>
                </div>
            </div> 
            
        </div> 
    </section>
</div>

    
    <!--====== COURSES SINGEl PART ENDS ======-->
    
     <?php
}}
?>
        <!--   
        </div>
      
      </div>
    </div> -->
 
   

  
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