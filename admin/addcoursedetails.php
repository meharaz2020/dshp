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
              <li class="breadcrumb-item active  ">Add New Course</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<h2>-------Add New Course-----</h2><br><h3></h3>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Course Title</label>
              <input type="text" name="course_title" class="form-control" >
              
            </div>

            <div class="form-group">
              <label>Course Code</label>
              <input type="text" name="course_code" class="form-control" >
              
            </div>
            <div class="form-group">
              <label>Course Credit</label>
              <input type="Number" name="credit" class="form-control" >
              
            </div>


            <div class="form-group">
              <label>Credit Cost</label>
              <input type="text" name="credit_cost" class="form-control" >
            </div>
            <div class="form-group">
              <label>Faculty</label>
              <input type="text" name="faculty" class="form-control" >
              
            </div>
          <div class="form-group">
              <label>Program</label>
              <select name="shift" class="form-control">
                 <?php

            $query = "SELECT * FROM program";
                $primary_shift = mysqli_query($db, $query);
                while ($row  = mysqli_fetch_assoc($primary_shift)) {

                    $program_id   =  $row['program_id'];
                    $program_list     =  $row['program_list'];

            ?>
            <option value="<?php echo $program_id; ?>"><?php echo $program_list; ?></option>
             <?php
            }

            ?>
              </select>
            </div>
            

           
            </div>
             
             <div class="col-lg-6">
             
                  <div class="form-group">
              <label>Total Payment</label>
              <input type="Number" name="total_payment" class="form-control" >
              
            </div>
             <div class="form-group">
              <label>Course Level & Term</label>
              <select name="course_level" class="form-control">
                
             <?php

            $query = "SELECT * FROM course_level_area";
                $primary_faculty = mysqli_query($db, $query);
                while ($row  = mysqli_fetch_assoc($primary_faculty)) {

                    $level_id   =  $row['level_id'];
                    $level_name     =  $row['level_name'];

            ?>
            <option value="<?php echo $level_id; ?>"><?php echo $level_name; ?></option>
             <?php
            }

            ?>
              </select>
            </div>
               
           <!--  <div class="form-group">
              <label>Course Level</label>
              <input type="text" name="course_level" class="form-control" >
              
            </div> -->
               <div class="form-group">
              <label>User Status</label>
              <select name="status" class="form-control">
                
                <option value="0">Inactive</option>
                <option value="1">Active</option>
              </select>
            </div>

            
               

              <div class="form-group">
              <label>Upload Image</label>
              <input type="file" name="course_question" class="form-control-file">
            </div>
            <div class="form-group">
              <label>Course Outline</label>
              <input type="file" name="course_outline" class="form-control-file">
            </div>


            <div class="form-group">
              <label>Final Question</label>
              <input type="file" name="final_question" class="form-control-file">
            </div>

            <div class="form-group">
              <label>Mid Question</label>
              <input type="file" name="mid_question" class="form-control-file">
            </div>



            <div class="form-group">
              
              <input type="submit" name="AddCourse" class="btn btn-block btn-primary btn-flat" value="Register Course">       
            </div>
              </form>
          
          
        </div>

        <!-- right side -->

        <?php

          if (isset($_POST['AddCourse'])) {


               

                 // $id                 = $_POST['id'];
                 $course_title       = $_POST['course_title'];
                 $course_code        = $_POST['course_code'];
                 $credit             = $_POST['credit'];
                 $credit_cost        = $_POST['credit_cost'];
                 $faculty            = $_POST['faculty'];
                 $shift              = $_POST['shift'];
                 $total_payment      = $_POST['total_payment'];
                 $course_level       = $_POST['course_level'];
                 
  
               
                  $status            = $_POST['status'];

                 $courseName   = $_FILES['course_question']['name'];
                 $imageSizeone   = $_FILES['course_question']['size'];
                 
                 $coursetmpone    = $_FILES['course_question']['tmp_name'];

                   //change the image name
                  $course_question = rand(0, 999999).$courseName;
                  // upload the image to its own location
                  move_uploaded_file( $coursetmpone, "img/outline/" . $course_question);


          //For Course Outline
                 
                 $courseNmaeOne   = $_FILES['course_outline']['name'];
                 $imageSize   = $_FILES['course_outline']['size'];
                 
                 $coursetmptwo    = $_FILES['course_outline']['tmp_name'];

                   //change the image name
                  $course_outline = rand(0, 999999).$courseNmaeOne;
                  //upload the image to its own location
                  move_uploaded_file( $coursetmptwo, "img/outline/" . $course_outline);

                  //For Final Question

                 $courseNmaeOne   = $_FILES['final_question']['name'];
                 $imageSize   = $_FILES['final_question']['size'];
                 
                 $coursetmpthree    = $_FILES['final_question']['tmp_name'];

                   //change the image name
                  $final_question = rand(0, 999999).$courseNmaeOne;
                  //upload the image to its own location
                  move_uploaded_file( $coursetmpthree, "img/outline/" . $final_question);

                     //For Mid Question

                 $courseNmaeOne   = $_FILES['mid_question']['name'];
                 $imageSize       = $_FILES['mid_question']['size'];
                 
                 $coursetmpdour       = $_FILES['mid_question']['tmp_name'];

                   //change the image name
                  $mid_question = rand(0, 999999).$courseNmaeOne;
                  //upload the image to its own location
                  move_uploaded_file( $coursetmpdour, "img/outline/" . $mid_question);

                  $sql = "INSERT INTO course_details(course_title,course_code,credit,credit_cost,faculty,shift,total_payment,course_level,course_outline,course_question,final_question,mid_question,status) VALUES('$course_title','$course_code','$credit','$credit_cost','$faculty','$shift','$total_payment','$course_level','$course_outline','$course_question','$final_question','$mid_question','$status')";
                
                  $addFacl = mysqli_query($db, $sql);

                 

                  if ($addFacl) {
                    header("Location:managecoursedetails.php");
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