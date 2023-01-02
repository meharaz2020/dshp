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
            <h1 class="m-0">View Prefects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6" >
                <form action="" method="post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-md form-control-borderless" type="search" placeholder="Search with course title or course code" name="search_text">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-md btn-outline-success" type="submit" name="search">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">
           <div class="row justify-content-left mx-auto">

               <?php
                     
                     if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
}
                     $user_id = $_SESSION['user_id'];
                     if (isset($_POST['search'])) {
                        $search_text =  $_POST['search_text'];
                        $sql = "SELECT u.user_id,u.name,u.student_id,u.email,u.phone,u.photo,p.id,p.user_id,p.course_code,p.batch,p.course_title,p.avaliable_time,p.description FROM users u,prefects p WHERE u.user_id=p.user_id and u.user_id != $user_id and p.status='1' and (p.course_title like '%$search_text%' or p.course_code like '%$search_text%')";
                     }
                     else{
                         $sql = "SELECT u.user_id,u.name,u.student_id,u.email,u.phone,u.photo,p.id,p.user_id,p.course_code,p.batch,p.course_title,p.avaliable_time,p.description FROM users u,prefects p WHERE u.user_id=p.user_id and u.user_id != $user_id and p.status='1'";
                        }
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
               <div class="col-lg-3 col-md-6 col-sm-8">
                   <div class="singel-publication shadow-sm p-3 mb-5 bg-white rounded">
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
                               <span><?php echo substr($row['description'], 0, 50) . ((strlen($row['description']) > 50) ? '......' : '');?></span>
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