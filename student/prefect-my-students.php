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
            <h1 class="m-0">Requested Students</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">

          <div class="card-body p-0" style="overflow-x: scroll; overflow-y: scroll;">
            <table id="choton" class="table table-striped projects ">
                <thead>
                    <tr>
                        <th >
                           Sl.
                        </th>
                        <th >
                            Name
                        </th>
                        <th >
                           Email
                        </th>
                       
                        <th >
                            Phone
                        </th>
                        
                        <th >
                            Status
                        </th>
                        <th >
                            Action
                        </th>
                       
                         
                        
                    </tr>
                </thead>
                <tbody>

                  <?php
                      session_start();
                      $user_id = $_SESSION['user_id'];
                      $prefect_id = $_GET['id'];
                      $sql = "SELECT u.user_id,u.name,u.student_id,u.email,u.phone,u.photo,pr.student_id,pr.status as pr_status FROM users u,prefect_request pr WHERE u.user_id=pr.student_id and pr.prefect_id='$prefect_id'";
                          $allCourse = mysqli_query($db, $sql);
                            $i = 0;
                            while( $row = mysqli_fetch_assoc($allCourse) ){

                              $id              = $row['id'];
                              $user_id              = $row['user_id'];
                              $name       = $row['name'];
                              $email     = $row['email'];
                              $phone           = $row['phone'];
                             
                              $status            = $row['pr_status'];
                              $student_id            = $row['student_id'];
                              // $prefect_id            = $row['prefect_id'];
                              $i++;
                              ?>

                              <tr>
                       
                          <td> <?php echo $i; ?> </td>
                          <td> <?php echo $name ; ?> </td>
                          <td> <?php echo $email ; ?> </td>

                          
                          <td> <?php echo $phone ; ?> </td>


                          <td>  <?php
                             if ($status == 0) {?>
                             <span class="badge badge-warning">Pending</span>  
                           <?php  }
                             else if ($status == 1 ) { ?>
                              <span class="badge badge-success">Accepted</span>  
                            <?php  }

                            ?>
                             </td>
                          

                      
                       
                        <td class="project-actions">
                          
                            <a class="btn btn-success btn-sm" href="prefect-profile-details.php?id=<?php echo $user_id; ?>">
                                <i class="fas fa-user">
                                </i>
                                Profile
                            </a>
                            <?php
                             if ($status == 0) {?>
                             <a class="btn btn-info btn-sm" href="../backend/accept-prefect-request.php?student_id=<?php echo $student_id; ?>&prefect_id=<?php echo $prefect_id; ?>">
                                
                                Accept Request
                            </a>
                           <?php  }
                             else if ($status == 1 ) { ?>
                              <a class="btn btn-danger btn-sm" href="../backend/cancel-prefect-request-fron-teacher.php?student_id=<?php echo $student_id; ?>&prefect_id=<?php echo $prefect_id; ?>">
                                
                                Cancel Request
                            </a>  
                            <?php  }

                            ?>
                             <a class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to send mail?');" href="mail-prefect-request-fron-teacher.php?student_id=<?php echo $student_id; ?>&prefect_id=<?php echo $prefect_id; ?>">
                                
                                Send Mail
                            </a>  
                        </td>
                    </tr>


              <?php    }

                  ?>

                  <?php

                    if (isset($_GET['delete'])) {
                   $deletecourse = $_GET['delete'];
          
                    
                    $sql = "DELETE FROM prefects WHERE id ='$deletecourse'";
                    $deletePostData = mysqli_query($db, $sql);
                    if ($deletePostData) {
                      header('Location: ' . $_SERVER['HTTP_REFERER']);
                    }
                    else{
                      die("Mysqli query failed".mysqli_error($db));
                     
                   }
            
          }




                  ?>
                    
                    
                    
                  
                </tbody>
            </table>
          </div>
          
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