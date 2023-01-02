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
    <?php
        session_start();
        $user_id = $_SESSION['user_id'];
        $id=$_GET['id'];
        $sql = "SELECT * FROM projects WHERE user_id=$user_id and project_id=$id";
            $allCourse = mysqli_query($db, $sql);
              $i = 0;
              while( $row = mysqli_fetch_assoc($allCourse) ){

               $project_id              = $row['project_id'];
                            $course_code       = $row['course_code'];
                            $course_title             = $row['course_title'];
                            $project_topic     = $row['project_topic'];
                            $project_description           = $row['project_description'];
                            $project_link           = $row['project_link'];
                            $video_link           = $row['video_link'];
                           
                            $status            = $row['status'];
              }
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">
          <button type="button" class="btn btn-info float-right" onclick="location.href='view-projects.php';">Project List</button>
          <h2>Edit Profile</h2>

          <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
          <form method="POST" action="../backend/project.php">
          <div class="container shadow-sm p-3 mb-5 bg-white rounded">
            <div class="col-sm-12">
              <input type="hidden" name="id" required value="<?php echo $project_id; ?>">
              <div class="form-group">
                <label for="exampleFormControlInput1">Course Title</label>
                <input type="text" name="course_title" class="form-control" id="exampleFormControlInput1" placeholder="Course Title" value="<?php echo $course_title; ?>" required >
              </div>
              <div class="form-group">
                <label>Course Code</label>
                <input type="text" name="course_code" class="form-control" placeholder="Course code" value="<?php echo $course_code; ?>" required>
              </div>
              <div class="form-group">
                <label>Project Topic</label>
                <input type="text" name="project_topic" class="form-control" placeholder="Project Topic" value="<?php echo $project_topic; ?>" required>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Project Description</label>
                <textarea class="form-control" name="project_description" id="exampleFormControlTextarea1" rows="3"><?php echo $project_description; ?></textarea required>
              </div>
              <div class="form-group">
                <label>Project Link</label>
                <input type="text" name="project_link" class="form-control" placeholder="Project link" value="<?php echo $project_link; ?>">
              </div>
              <div class="form-group">
                <label>Video Link</label>
                <input type="text" name="video_link" class="form-control" placeholder="Video Link" value="<?php echo $video_link; ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="update">Update</button>
              <br>
              <br>
            </div>

          </div>
        </form>
          

          
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