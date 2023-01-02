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
            <!-- <h1 class="m-0">Dashboard</h1> -->
          <h1 class="m-0">My Prefect Profiles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
<!--               <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">

        <div class="card" style="padding: 8px 8px;">
          <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>

        <div class="card-body p-0" style="overflow-x: scroll; overflow-y: scroll;">
          <table id="choton" class="table table-striped projects ">
              <thead>
                  <tr>
                      <th >
                         Sl.
                      </th>
                      <th >
                          Batch
                      </th>
                      <th >
                          Course Code
                      </th>
                      <th >
                          Course Title
                      </th>
                      <th >
                         Available Time
                      </th>
                     
                      <th >
                          Description
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
                    $sql = "SELECT * FROM prefects WHERE user_id=$user_id";
                        $allCourse = mysqli_query($db, $sql);
                          $i = 0;
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $id              = $row['id'];
                            $batch              = $row['batch'];
                            $course_code       = $row['course_code'];
                            $course_title             = $row['course_title'];
                            $avaliable_time     = $row['avaliable_time'];
                            $description           = $row['description'];
                           
                            $status            = $row['status'];
                            $i++;
                            ?>

                            <tr>
                     
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $batch; ?> </td>
                        <td> <?php echo $course_code ; ?> </td>
                        <td> <?php echo $course_title ; ?> </td>
                        <td> <?php echo $avaliable_time ; ?> </td>

                        
                        <td style="max-width: 30px;"> <?php echo $description ; ?> </td>


                        <td>  <?php
                           if ($status == 0) {?>
                           <span class="badge badge-danger">Inactive</span>  
                         <?php  }
                           else if ($status == 1 ) { ?>
                            <span class="badge badge-success">Active</span>  
                          <?php  }

                          ?>
                           </td>
                        

                    
                     
                      <td class="project-actions">
                        
                          <a class="btn btn-info btn-sm" href="my-prefect-profiles-edit.php?id=<?php echo $id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?delete=<?php echo $id; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                          <a class="btn btn-success btn-sm" href="prefect-my-students.php?id=<?php echo $id; ?>">
                              <i class="fas fa-users">
                              </i>
                              Students
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
        <!-- /.card-body -->
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