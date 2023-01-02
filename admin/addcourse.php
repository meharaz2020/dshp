
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
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Add New Course</li>
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
        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Course Name</label>
              <input type="text" name="course_name" class="form-control" required="required">
              
            </div>

            <div class="form-group">
              <label>Course Time</label>
              <input type="text" name="course_time" class="form-control" required="required">
              
            </div>
            <div class="form-group">
              <label>Course By</label>
              <input type="text" name="course_by" class="form-control" required="required">
              
            </div>



           
             <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"></textarea>
              
            </div>

           
            </div>
             <div class="col-lg-6">
               
            

              <div class="form-group">
              <label>Total Seat</label>
              <input type="number" name="total_seat" class="form-control" required="required">
              
            </div>

              
            <div class="form-group">
              <label>Featured</label>
              <select name="is_featured" class="form-control">
                
                <option value="0">Not Featured</option>
                <option value="1">Featured</option>
              </select>
            </div>

            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control">
                
                <option value="0">Inactive</option>
                <option value="1">Active</option>
              </select>
            </div>

            <div class="form-group">
              <label>Upload Image</label>
              <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
              
              <input type="submit" name="addCourse" class="btn btn-block btn-primary btn-flat" value="Register Course">       
            </div>
              </form>
          
          
        </div>

        <!-- right side -->

        <?php

          if (isset($_POST['addCourse'])) {


               

                 $id                = $_POST['id'];
                 $course_name       = $_POST['course_name'];
                 $course_time       = $_POST['course_time'];
                 $course_by         = $_POST['course_by'];
                 $description       = $_POST['description'];
                 $total_seat        = $_POST['total_seat'];
                 $is_featured        = $_POST['is_featured'];
                  $status           = $_POST['status'];
                 
                
                 
                 $imageName   = $_FILES['image']['name'];
                 $imageSize   = $_FILES['image']['size'];
                 
                 $imagetmp    = $_FILES['image']['tmp_name'];

                   //change the image name
                  $image = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/course/" . $image);

                  $sql = "INSERT INTO course(course_name,course_time,course_by,description,total_seat,is_featured,status,image) VALUES('$course_name','$course_time','$course_by','$description','$total_seat','$is_featured','$status','$image')";
                  $addCou = mysqli_query($db, $sql);

                 

                  if ($addCou) {
                    header("Location:managecourse.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                    }


          }




        ?>

        
         
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