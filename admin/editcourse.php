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
     <h2>Edit Course Information</h2>
    <section class="content">
      <div class="container-fluid">
         <?php

          if (isset($_GET['update'])) {
            $theUpdate = $_GET['update'];
              $sql = "SELECT * FROM course WHERE id = '$theUpdate'  ";
                        $allCourseInfo = mysqli_query($db, $sql);
                        
                          while( $row = mysqli_fetch_assoc($allCourseInfo) ){

                            $id                = $row['id'];
                            $course_name       = $row['course_name'];
                            $course_time       = $row['course_time'];
                            $course_by         = $row['course_by'];
                            $description       = $row['description'];
                            $total_seat        = $row['total_seat'];
                            $image             = $row['image'];
                            $is_featured       = $row['is_featured'];
                            $status            = $row['status'];
                           
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Course Name</label>
              <input type="text" name="course_name" class="form-control" required="required" value="<?php echo $course_name; ?>">
              
            </div>

            <div class="form-group">
              <label>Course Time</label>
              <input type="text" name="course_time" class="form-control" required="required" value="<?php echo $course_time; ?>">
              
            </div>
            <div class="form-group">
              <label>Course By</label>
              <input type="text" name="course_by" class="form-control" required="required" value="<?php echo $course_by; ?>">
              
            </div>
                 

             <div class="form-group">
              <label>Total Seat</label>
              <input type="number" name="total_seat" class="form-control" required="required" value="<?php echo $total_seat; ?>">
              
            </div>


           
            </div>
             <div class="col-lg-6">

             <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"value=""><?php echo $description; ?></textarea>
              
            </div>
 <div class="form-group">
              <label>Featured</label>
              <select name="is_featured" class="form-control">
                
                <option value="0"  <?php if($is_featured == 0){echo 'selected';} ?>>Not Featured</option>
                <option value="1"  <?php if($is_featured == 1){echo 'selected';} ?>>Featured</option>
              </select>
            </div>
              

            <div class="form-group">
              <label>Course Status</label>
              <select name="status" class="form-control">
                
                <option value="0"  <?php if($status == 0){echo 'selected';} ?>>Inactive</option>
                <option value="1"  <?php if($status == 1){echo 'selected';} ?>>Active</option>
              </select>
            </div>

            <div class="form-group">
              <label>Upload Image</label>
              <?php
                              if (!empty($image)) { ?>
                                <img src="img/course/<?php echo $image; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No image Uploaded";
                              }


                            ?>
              <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
              <input type="hidden" name="updateCourseMaterial" value="<?php echo $id;?> ">
              <input type="submit" name="updatecourse" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updatecourse'])) {
          $updateCourseMaterial=$_POST['updateCourseMaterial'];

                 $id                = $_POST['id'];
                 $course_name       = $_POST['course_name'];
                 $course_time       = $_POST['course_time'];
                 $course_by         = $_POST['course_by'];
                 $description       = $_POST['description'];
                 $total_seat        = $_POST['total_seat'];
                 $is_featured       = $_POST['is_featured'];                           
                 $status            = $_POST['status'];
                 $imageName         = $_FILES['image']['name'];

               
                 
                
            
                  if (!empty($imageName)) {
                    //prepare the image
                 
                 
                 $imageSize   = $_FILES['image']['size'];
                
                 $imagetmp    = $_FILES['image']['tmp_name'];

                

                  }


                  //upload image
                  if (!empty($imageName)) {
               

                  //delete the existing image while updating the image
                  $deleteImageSQL = "SELECT * FROM course WHERE id ='$updateCourseMaterial'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['image'];
                  }
                  unlink('img/course/'.$existingImage);

                  //change the image name
                  $image = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/course/" .$image);
                 
                    $sql = "UPDATE course SET course_name='$course_name',course_time='$course_time',course_by='$course_by',description='$description',total_seat='$total_seat',is_featured='$is_featured',status='$status',image='$image' WHERE id ='$updateCourseMaterial' ";
                    

                 
                  $addvisor = mysqli_query($db, $sql);

                  if ($addvisor) {
                    header("Location:managecourse.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }


                  }
                  
                  
                  //change the password only
                  else if (  empty($imageName)){

                 
                  $sql = "UPDATE course SET course_name='$course_name',course_time='$course_time',course_by='$course_by',description='$description',total_seat='$total_seat',is_featured='$is_featured',status='$status',image='$image' WHERE id ='$updateCourseMaterial' ";

                      

                 
                  $addcourse = mysqli_query($db, $sql);

                  if ($addcourse) {
                    header("Location:managecourse.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }
                  }
        

          }
        
     



       ?>
      
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