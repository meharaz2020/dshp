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
              $sql = "SELECT * FROM course_details WHERE id = '$theUpdate'  ";
                        $allCourseInfo = mysqli_query($db, $sql);
                        
                          while( $row = mysqli_fetch_assoc($allCourseInfo) ){

                            $id                      = $row['id'];
                            $course_title            = $row['course_title'];
                            $course_code             = $row['course_code'];
                            $credit                  = $row['credit'];
                            $credit_cost             = $row['credit_cost'];
                            $faculty                 = $row['faculty'];
                            $shift                   = $row['shift'];
                            $total_payment           = $row['total_payment'];
                            $course_level            = $row['course_level'];
                            $course_outline          = $row['course_outline'];
                            $course_question         = $row['course_question'];
                            $final_question          = $row['final_question'];
                            $mid_question          = $row['mid_question'];
                           
                            $status                  = $row['status'];
                           
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Course Title</label>
              <input type="text" name="course_title" class="form-control" required="required" value="<?php echo $course_title; ?>">
              
            </div>

            <div class="form-group">
              <label>Course Code</label>
              <input type="text" name="course_code" class="form-control" required="required" value="<?php echo $course_code; ?>">
              
            </div>
            <div class="form-group">
              <label>Credit</label>
              <input type="Number" name="credit" class="form-control" required="required" value="<?php echo $credit; ?>">
              
            </div>
               

            <div class="form-group">
              <label>Credit Cost</label>
              <input type="text" name="credit_cost" class="form-control" required="required" value="<?php echo $credit_cost; ?>">
            </div>
            <div class="form-group">
              <label>Faculty</label>
              <input type="text" name="faculty" class="form-control" required="required"value="<?php echo $faculty; ?>">
              
            </div>

            <div class="form-group">
              <label>Program</label>
              <select name="shift" class="form-control">
                
                    <?php

            $query = "SELECT * FROM program";
                $research = mysqli_query($db, $query);
                while ($row  = mysqli_fetch_assoc($research)) {

                    $program_id                   =  $row['program_id'];
                    $program_list           =  $row['program_list'];
                    

            ?>
            <option <?php if ($program_id == $shift) { ?> selected="selected" <?php } ?> value="<?php echo $program_id; ?>"><?php echo $program_list; ?></option>
             <?php
            }

            ?>
              </select>
            </div>

            

           
            </div>
             <div class="col-lg-6">

             <div class="form-group">
              <label>Total Payment</label>
              <input type="number" name="total_payment" class="form-control" required="required"value="<?php echo $total_payment; ?>">
              
            </div>
               
            <!-- <div class="form-group">
              <label>Course Level</label>
              <input type="text" name="course_level" class="form-control" required="required"value="<?php echo $course_level; ?>">
              
            </div> -->
             <div class="form-group">
              <label>Course Level & Term</label>
              <select name="course_level" class="form-control">
                
                  <?php

            $query = "SELECT * FROM course_level_area";
                $research = mysqli_query($db, $query);
                while ($row  = mysqli_fetch_assoc($research)) {

                    $level_id                   =  $row['level_id'];
                    $level_name           =  $row['level_name'];
                    

            ?>
            <option <?php if ($level_id == $course_level) { ?> selected="selected" <?php } ?> value="<?php echo $level_id; ?>"><?php echo $level_name; ?></option>
             <?php
            }

            ?>
              </select>
            </div>
            
         

              

            <div class="form-group">
              <label>User Status</label>
              <select name="status" class="form-control">
                
                <option value="0"  <?php if($status == 0){echo 'selected';} ?>>Inactive</option>
                <option value="1"  <?php if($status == 1){echo 'selected';} ?>>Active</option>
              </select>
            </div>
               <div class="form-group">
              <label>Upload Image</label>
              <?php
                              if (!empty($course_question)) { ?>
                                <img src="img/outline/<?php echo $course_question; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No file Uploaded";
                              }


                            ?>
              <input type="file" name="course_question" class="form-control-file">
            </div>

            <div class="form-group">
              <label>Upload Outline</label>
              <?php
                              if (!empty($course_outline)) { ?>
                               <!--  <img src="img/outline/<?php echo $course_outline; ?>" class="form-image" style="height: 30px;"> -->

                                  <a href=""><?php echo $course_outline ?></a>
                                 
                             <?php  }
                              else{
                                echo "No file Uploaded";
                              }


                            ?>
              <input type="file" name="course_outline" class="form-control-file">
            </div>

            


            <div class="form-group">
              <label>Upload Final Question</label>
              <?php
                              if (!empty($final_question)) { ?>
                                <a href=""><?php echo $final_question ?></a>

                                <!-- <img src="img/outline/<?php echo $final_question; ?>" class="form-image" style="height: 30px;"> -->
                                 
                             <?php  }
                              else{
                                echo "No file Uploaded";
                              }


                            ?>
              <input type="file" name="final_question" class="form-control-file">
            </div>

              <div class="form-group">
              <label>Upload Mid Question</label>
              <?php
                              if (!empty($mid_question)) { ?>
                                <a href=""><?php echo $mid_question ?></a>

                                <!-- <img src="img/outline/<?php echo $final_question; ?>" class="form-image" style="height: 30px;"> -->
                                 
                             <?php  }
                              else{
                                echo "No file Uploaded";
                              }


                            ?>
              <input type="file" name="mid_question" class="form-control-file">
            </div>


            <div class="form-group">
              <input type="hidden" name="updateCourseId" value="<?php echo $id;?> ">
              <input type="submit" name="updateCourse" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updateCourse'])) {
          $updateCourseId=$_POST['updateCourseId'];

                
                 // $id                 = $_POST['id'];
                 $course_title       = $_POST['course_title'];
                 $course_code        = $_POST['course_code'];
                 $credit             = $_POST['credit'];
                 $credit_cost        = $_POST['credit_cost'];
                 $faculty            = $_POST['faculty'];
                 $shift              = $_POST['shift'];
                 $total_payment      = $_POST['total_payment'];
                 $course_level       = $_POST['course_level'];
                 $status             = $_POST['status'];


                   $courseName          = $_FILES['course_question']['name'];
                   $courseNameOne       = $_FILES['course_outline']['name'];
                   $courseNameTwo       = $_FILES['final_question']['name'];
                    $courseNameThree      = $_FILES['mid_question']['name'];

                   

               
                 
                
            
                  if (!empty($courseName || $courseNameOne || $courseNameTwo ||  $courseNameThree )) {
                     $imageSize   = $_FILES['course_outline']['size'];
                
                 $imagetmpOne    = $_FILES['course_outline']['tmp_name'];

                    //prepare the image
                 
                 
                 $imageSize   = $_FILES['course_question']['size'];
                
                 $imagetmp    = $_FILES['course_question']['tmp_name'];

                 $imageSize   = $_FILES['final_question']['size'];
                
                 $imagetmpTwo    = $_FILES['final_question']['tmp_name'];

                  $imageSize   = $_FILES['mid_question']['size'];
                
                 $imagetmpThree    = $_FILES['mid_question']['tmp_name'];

                

                  }

                 


                  //upload image
                  if (!empty($courseName || $courseNameOne || $courseNameTwo ||  $courseNameThree)) {
               

                  //delete the existing image while updating the image
                  $deleteImageSQL = "SELECT * FROM course_details WHERE id ='$updateCourseId'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {

                    $existingImage    = $row['course_question'];
                    $existingImageOne = $row['course_outline'];

                    $existingImageTwo = $row['final_question'];
                    $existingImageThree = $row['mid_question'];
                  }
                  // unlink('img/outline/'.$existingImage);
                  // unlink('img/outline/'.$existingImageOne);
                  // unlink('img/outline/'.$existingImageTwo);

                  // unlink('img/outline/'.$existingImageThree);

                  //change the image name
                  $course_question = rand(0, 999999).$courseName;
                  $course_outline = rand(0, 999999).$courseNameOne;
                  $final_question = rand(0, 999999).$courseNameTwo;

                  $mid_question = rand(0, 999999).$courseNameThree;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/outline/" .$course_question);
                  move_uploaded_file( $imagetmpOne, "img/outline/" .$course_outline);
                  move_uploaded_file( $imagetmpTwo, "img/outline/" .$final_question);

                   move_uploaded_file( $imagetmpThree, "img/outline/" .$mid_question);
                 
                    $sql = "UPDATE course_details SET course_title='$course_title',course_code='$course_code',credit='$credit',credit_cost='$credit_cost',faculty='$faculty',shift='$shift',total_payment='$total_payment',course_level='$course_level',course_outline='$course_outline',course_question='$course_question',final_question='$final_question',mid_question='$mid_question',status='$status' WHERE id ='$updateCourseId' ";


                 
                  $addCoursde = mysqli_query($db, $sql);

                  if ($addCoursde) {
                    header("Location:managecoursedetails.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }


                  }


                 
                  
                  //change the File  only
                  else if (  empty($courseName || $courseNameOne  || $courseNameTwo
                  &&  $courseNameThree)){

                 
                  $sql = "UPDATE course_details SET course_title='$course_title',course_code='$course_code',credit='$credit',credit_cost='$credit_cost',faculty='$faculty',shift='$shift',total_payment='$total_payment',course_level='$course_level',course_outline='$course_outline',course_question='$course_question',final_question='$final_question',mid_question='$mid_question',status='$status' WHERE id ='$updateCourseId' ";
                 

                      

                 
                 
                  $addcourse = mysqli_query($db, $sql);

                  if ($addcourse) {
                    header("Location:managecoursedetails.php");
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