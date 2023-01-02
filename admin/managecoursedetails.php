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
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
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
                          ID
                      </th>
                      <th style="width: 12%">
                          Course Title
                      </th>
                      <th style="width: 5%">
                          Course Code
                      </th>
                      <th style="width: 5%">
                         Credit
                      </th>
                     
                       <!-- <th style="width: 5%">
                          Credit Cost
                      </th> -->
                      <!-- <th style="width: 10%">
                          Faculty
                      </th> -->
                      
                     
                        <th style="width: 10%">
                          Program
                      </th>
                      
                      <th style="width: 10%">
                          Course Level & Term
                      </th>
                        <th style="width: 10%">
                          Status
                      </th>
                        
                      
                     
                      <th style="width: 22%">
                          Action
                      </th>
                       
                      
                  </tr>
              </thead>
              <tbody>

                <?php

                  $sql = "SELECT * FROM course_details";
                        $allCourse = mysqli_query($db, $sql);
                          $i = 0;
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
                            $i++;
                            ?>

                            <tr>
                     
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $id; ?> </td>
                        <td> <?php echo $course_title ; ?> </td>
                        <td> <?php echo $course_code ; ?> </td>
                        <td> <?php echo $credit ; ?> </td>

                       <!--  <td> <?php echo $credit_cost; ?> </td> -->
                        <!-- <td> <?php echo $faculty ; ?> </td> -->
                           <td> <?php echo $course_level; ?> </td>

                        
                        
                          <td> <?php echo $shift; ?> </td>
                          
                    


                        <td>  <?php
                           if ($status == 0) {?>
                           <span class="badge badge-danger">Inactive</span>  
                         <?php  }
                           else if ($status == 1 ) { ?>
                            <span class="badge badge-success">Active</span>  
                          <?php  }

                          ?>
                           </td>


                        
                    
                     
                      <td class="project-actions text-right">
                        
                          <a class="btn btn-info btn-sm" href="editcoursedetails.php?update=<?php echo $id; ?>">
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
                 $deleteId = $_GET['delete'];
       

          $deleteImageSQL = "SELECT * FROM course_details WHERE id ='$deleteId'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['course_outline'];
                     $existingImageOne = $row['course_question'];
                  }
                  if (!empty($existingImage && $existingImageOne )) {
                    unlink('img/outline/'.$existingImage);
                    unlink('img/outline/'.$existingImageOne);
                  }
                  
                  $sql = "DELETE FROM course_details WHERE id ='$deleteId'";
                  $deletePostData = mysqli_query($db, $sql);
                  if ($deletePostData) {
                    header("Location:managecoursedetails.php");
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