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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">
          <button type="button" class="btn btn-info float-right" onclick="location.href='my-prefect-profiles.php';">Profile List</button>
          <h2>Create Student Prefect</h2>

          <h5 class="text-center text-success"><?php  if(isset($_GET['msg'])){echo $_GET['msg'];} ?></h5>
          <form method="POST" action="../backend/prefect.php">
          <div class="container shadow-sm p-3 mb-5 bg-white rounded">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Batch</label>
                  <input type="text" name="batch" class="form-control" id="exampleFormControlInput1" placeholder="Batch" required>
                </div>
                <div class="form-group">
                  <label>Course Code</label>
                  <input type="text" name="course_code" class="form-control" placeholder="Course code" required>
                </div>
                <div class="form-group">
                  <label>Course title</label>
                  <input type="text" name="course_title" class="form-control" placeholder="Course title" required>
                </div>
                <div class="form-group">
                  <label>Available Time</label>
                  <input type="time" name="avaliable_time" class="form-control" placeholder="Available Time" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Short Description</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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