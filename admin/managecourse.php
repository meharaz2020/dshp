
<?php

 include "inc/header.php";

?>


  <?php

  include "inc/topbar.php";

?>
  <!-- Main Sidebar Container -->
 
  <?php

  include "inc/menu.php";

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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

          <div class="card" style="padding: 0px 8px;">
        <div class="card-header">
          <h3 class="card-title">Manage All Course</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>
        <div class="card-body p-0">
          <table id="choton" class="table table-striped projects ">
              <thead>
                  <tr>
                      <th style="width: 1%">
                         Sl.
                      </th>
                      <th style="width: 5%">
                          Id
                      </th>
                      <th style="width: 13%">
                          Course Name 
                      </th>
                      <th style="width: 10%">
                          Course Time
                      </th>
                      <th style="width: 15%">
                         Course By
                      </th>
                     
                      <th style="width: 10%">
                          Total Seat
                      </th>
                      
                     
                        <th style="width: 8%">
                          Status
                      </th>
                      
                      
                      <th style="width: 7%">
                          Image
                      </th>
                       <th style="width: 20%">
                          Action
                      </th>
                     
                       
                      
                  </tr>
              </thead>
              <tbody>

                <?php

                    $sql = "SELECT * FROM course";
                        $allCourse = mysqli_query($db, $sql);
                          $i = 0;
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                            $id              = $row['id'];
                            $course_name       = $row['course_name'];
                            $course_time             = $row['course_time'];
                            $course_by     = $row['course_by'];
                             $total_seat           = $row['total_seat'];
                            $description      = $row['description'];
                           
                            $image             = $row['image'];
                           
                            $status            = $row['status'];
                            $i++;
                            ?>

                            <tr>
                     
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $id; ?> </td>
                        <td> <?php echo $course_name ; ?> </td>
                        <td> <?php echo $course_time ; ?> </td>
                        <td> <?php echo $course_by ; ?> </td>

                        
                        <td> <?php echo $total_seat ; ?> </td>


                        <td>  <?php
                           if ($status == 0) {?>
                           <span class="badge badge-danger">Inactive</span>  
                         <?php  }
                           else if ($status == 1 ) { ?>
                            <span class="badge badge-success">Active</span>  
                          <?php  }

                          ?>
                           </td>
                        


                     
                      <td>
                           <?php
                               if (!empty($image)) { ?>
                                <img src="img/course/<?php echo $image; ?>" class="table-img" style="height: 30px;">
                              <?php }
                               else{ ?>
                                <img src="img/course/default.png" class="table-img">

                               <?php }

                          ?>
                      </td>
                    
                     
                      <td class="project-actions text-right">
                        
                          <a class="btn btn-info btn-sm" href="editcourse.php?update=<?php echo $id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?delete=<?php echo $id; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>


            <?php    }

                ?>

                <?php

                  if (isset($_GET['delete'])) {
                 $deletecourse = $_GET['delete'];
       

          $deleteImageSQL = "SELECT * FROM course WHERE id ='$deletecourse'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['image'];
                  }
                  if (!empty($existingImage)) {
                    unlink('img/course/'.$existingImage);
                  }
                  
                  $sql = "DELETE FROM course WHERE id ='$deletecourse'";
                  $deletePostData = mysqli_query($db, $sql);
                  if ($deletePostData) {
                    header("Location:managecourse.php");
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