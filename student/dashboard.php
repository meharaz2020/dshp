<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0">Dashboard</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- icon add -->
    <section class="content">
       

                <div class="d-flex flex-wrap" id="icons-container">

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                     <a href=""><img src="img/cpc.jpg" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold ; font-weight:400; color:black;">CPC</p></a>
                  </div>
                </div>

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                    <a href=""><img src="img/gcpc.jpg" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold ; font-weight:400;color:black;">GCPC</p></a>
                  </div>
                </div>

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                    <a href="modern-cv.php"><img src="img/mcv.png" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold ; font-weight:400;color:black;">Modern CV</p></a>
                  </div>
                </div>

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                    <a href="classic-cv.php"><img src="img/ccv.png" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold ; font-weight:400;color:black;">Classic CV</p></a>
                  </div>
                </div>

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                    <a href="view-projects.php"><img src="img/pp.svg" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold ; font-weight:400;color:black;">Project</p></a>
                  </div>
                </div>

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                    <a href="faculty.php"><img src="img/ss.svg" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold ;font-weight:400;color:black;">Faculty</p></a>
                  </div>
                </div>

                <div class="card icon-card cursor-pointer text-center mb-4 mx-2 shadow rounded">
                  <div class="card-body">
                    <a href="notice.php"><img src="img/nc.svg" style="height:60px ; width:60px";alt="">
                  
                  <p class="icon-name text-capitalize text-truncate mb-0" style="font-style:bold; font-weight:400;color:black;">Notice</p></a>
                  </div>
                </div>

                </div>             
 
    </section>
    
                           
                           
         


    <!-- icon add end -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
        
          <!-- Small boxes (Stat box) -->
          
          
          <a style="float:right" class="btn btn-outline-info btn-sm" href="courses.php">View all</a>
          <p>Recent Cources</p>
          
          <div class="row">
            <div class="col-md-12">
               <div class="row justify-content-left mx-auto">

                 <?php
                       $sql = "SELECT * FROM course_details WHERE status=1 ORDER BY course_title ASC limit 4";
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
                 <div class="col-lg-3 col-md-6 col-sm-8">
                     <div  class="singel-publication mt-30 shadow p-3 mb-5 bg-white rounded" style="height:320px;">
                         <div class="image">
                             <img style="height: 180px;" src="../admin/img/outline/<?php echo $course_question; ?>">
                         </div>
                         <div class="cont">
                             <div class="name">
                                 <a href=""><h6><?php echo $course_title?></h6></a>
                                 <span>By <?php echo $faculty?></span>
                             </div>
                             <div class="button text-right">
                                 <a href="" class="main-btn">Code:<?php echo $course_code ?></a>
                             </div>
                         </div>
                     </div> 
                 </div>
                
                <?php

             }
            ?>
                 
             </div>

             
<!--               <div class="col-lg-3 col-6">

                
              <?php
                  $sql = "SELECT * FROM prefects";
                  $allUser = mysqli_query($db, $sql);
                  $totalUser = mysqli_num_rows($allUser);

                            ?>
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?php echo $totalUser; ?></h3>

                    <p>Total Prefects</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  
                </div>
              </div>
             
              <div class="col-lg-3 col-6">

                 <?php
                  $sql = "SELECT * FROM faculty";
                  $allFaculty = mysqli_query($db, $sql);
                  $totalFaculty = mysqli_num_rows($allFaculty);

                            ?>
                
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3><?php echo $totalFaculty; ?></sup></h3>

                    <p>Total Faculty</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                 
                </div>
              </div>
             
              <div class="col-lg-3 col-6">

                 <?php
                  $sql = "SELECT * FROM course_details";
                  $allCourse = mysqli_query($db, $sql);
                  $totalCourse = mysqli_num_rows($allCourse);

                            ?>
                
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><?php echo $totalCourse; ?></h3>

                    <p>Total Course</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                
                </div>
              </div>
             
              <div class="col-lg-3 col-6">
                 <?php
                  $sql = "SELECT * FROM supervisor";
                  $allSupervisor = mysqli_query($db, $sql);
                  $totalSupervisor = mysqli_num_rows($allSupervisor);

                            ?>
                
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3><?php echo $totalSupervisor; ?></h3>

                    <p>Total Supervisor</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  
                </div>
              </div> -->
             
               
             </div>
             </div>

          </div>
          <!-- /.row -->
          

      
    </section>
        <section class="content">
          <div class="container-fluid">
            <a style="float:right" class="btn btn-outline-info btn-sm" href="view-prefect.php">View all</a>
            <p>Recent Prefects</p>
         
           <div class="row">
            <div class="col-md-12">
               <div class="row justify-content-left mx-auto">

                   <?php
                         
                         // session_start();
                         $user_id = $_SESSION['user_id'];

                        $sql = "SELECT u.user_id,u.name,u.student_id,u.email,u.phone,u.photo,p.id,p.user_id,p.course_code,p.batch,p.course_title,p.avaliable_time,p.description FROM users u,prefects p WHERE u.user_id=p.user_id and u.user_id != $user_id and p.status='1' limit 4";
                            
                         // $sql = "SELECT * FROM prefects WHERE status=1 and user_id != $user_id ORDER BY course_title ASC";
                           $allCourse = mysqli_query($db, $sql);
                           
                           if (mysqli_num_rows($allCourse)>0) {
                             
                             while( $row = mysqli_fetch_assoc($allCourse) ){

                                $prefect_id              = $row['id'];
                                $user_id              = $row['user_id'];
                                $batch              = $row['batch'];
                                $course_code       = $row['course_code'];
                                $course_title             = $row['course_title'];
                                $avaliable_time     = $row['avaliable_time'];
                                $description           = $row['description'];
                               
                                // $status            = $row['status'];

                                $name            = $row['name'];
                                $student_id            = $row['student_id'];
                                $email            = $row['email'];
                                $phone            = $row['phone'];
                                $photo            = $row['photo'];





                   ?>

                   <div class="col-lg-3 col-md-6 col-sm-8" >
                    
                       <div class="singel-publication mt-30 shadow p-3 mb-5 bg-white rounded">
                           <div class="image">
                               <?php
                                  if ($photo != NULL) {
                                   echo "<img src='".$photo."' alt='Admin' width='150'>";
                                  }else{
                                    echo "<img src='../images/student-avatar.png' alt='prefect' width='150'>";
                                    
                                  }
                                ?>
    <!--                            <div class="add-cart">
                                   <ul>
                                       <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                       <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                   </ul>
                               </div> -->
                           </div>
                           <div class="">
                               <div class="text-left">
                                    
                                   <a href=""><h5><?php echo $course_title; ?></h5></a>

                                   <span><!-- <i class="fa fa-user"></i> --><b>Offered By</b> <?php echo $name?></span><br>
                                   
                                   <span><!-- <i class="fa fa-clock"></i> --> <b>Avaliable at</b>  <?php echo $avaliable_time ?></span><br>
                                   <span style="float: right;">Code: <?php echo $course_code; ?></span>
                                   <span><b>Batch </b>  <?php echo $batch ?></span><br>
                               </div>
    <!--                            <div style="float:right;" class="text-right">
                                   
                               </div> -->
                           </div>
                           <?php
                           $my_user_id = $_SESSION['user_id'];
                           $sql1 = "SELECT * FROM prefect_request WHERE student_id = $my_user_id";
                              $prefect_requestd = mysqli_query($db, $sql1);
                              $found =0;
                              $accepted =0;
                              while( $row = mysqli_fetch_assoc($prefect_requestd) ){
                                $new_prefect_id = $row['prefect_id'];
                                $new_prefect_status = $row['status'];
                                
                                // echo "Error: " . $sql . "<br>" . $db->error;
                                if ($new_prefect_id == $prefect_id) {
                                    $found =1; 
                                    break;
                    
                                }
                                 
                                
                            }
                            ?>
                            <?php 
              $my_user_id = $_SESSION['user_id'];

            $sql133 = "SELECT * FROM prefect_request WHERE student_id = $my_user_id AND   status='1' AND prefect_id='$new_prefect_id'";
            $prefect_requestd1221 = mysqli_query($db, $sql133);
              if(mysqli_num_rows($prefect_requestd1221)==1){
                if ($found ==1) {
                  echo"<a style='float:right;' href='../backend/cancel-prefect-request.php?id=".$prefect_id."'><button type='button' class='btn btn-outline-success btn-sm' >Accepted</button></a>";
               }
                
               else{
                    echo"<a style='float:right;' href='../backend/send-prefect-request.php?id=".$prefect_id."'><button type='button' class='btn btn-outline-info btn-sm' >Send Request</button></a>";

                
               }

              }else{
                if ($found ==1) {
                  echo"<a style='float:right;' href='../backend/cancel-prefect-request.php?id=".$prefect_id."'><button type='button' class='btn btn-outline-danger btn-sm' >Cancel Request</button></a>";
               }
                
               else{
                    echo"<a style='float:right;' href='../backend/send-prefect-request.php?id=".$prefect_id."'><button type='button' class='btn btn-outline-info btn-sm' >Send Request</button></a>";

                
               }

              }                
                        
                        
                                   
                                    
                            
                            ?>

                            <!-- <a href="../backend/send-prefect-request.php?id=$prefect_id"><button type="button" class="btn btn-outline-info btn-sm" >Profile</button></a> -->
                          
                           <button type="button" class="btn btn-outline-info btn-sm" onclick="location.href='prefect-profile-details.php?id=<?php echo $user_id; ?>';">Profile</button>
                           
                       </div> <!-- singel publication -->
                     </div>
                
                  
                  <?php



               }
               } else {
                  echo "<center><h5 class='justify-content-center'>No data found</h5></center>";
                }
              ?>

                   
               </div> <!-- row -->
              
            </div>
             
           </div>
          </div>
        </section>
   
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