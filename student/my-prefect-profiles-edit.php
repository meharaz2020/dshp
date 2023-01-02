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
        $sql = "SELECT * FROM prefects WHERE user_id=$user_id and id=$id";
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
              }
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">
          <button type="button" class="btn btn-info float-right" onclick="location.href='my-prefect-profiles.php';">Profile List</button>
          <h2>Edit Profile</h2>

          <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
          <form method="POST" action="../backend/prefect.php">
          <div class="container shadow-sm p-3 mb-5 bg-white rounded">
              <div class="col-sm-12">
                <input type="hidden" name="id" required value="<?php echo $id; ?>">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Batch</label>
                  <input type="text" name="batch" class="form-control" id="exampleFormControlInput1" placeholder="Batch" required value="<?php echo $batch; ?>">
                </div>
                <div class="form-group">
                  <label>Course Code</label>
                  <input type="text" name="course_code" class="form-control" placeholder="Course code" required value="<?php echo $course_code; ?>">
                </div>
                <div class="form-group">
                  <label>Course title</label>
                  <input type="text" name="course_title" class="form-control" placeholder="Course title" required value="<?php echo $course_title; ?>">
                </div>
                <div class="form-group">
                  <label>Available Time</label>
                  <input type="time" name="avaliable_time" class="form-control" placeholder="Available Time" required value="<?php echo $avaliable_time; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Short Description</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required><?php echo $description; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                  </select>
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