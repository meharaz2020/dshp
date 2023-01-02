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
            <h1 class="m-0">Add Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
<!--             <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
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
          <form method="POST" action="../backend/sign-up-admin.php">
              <div class="form-group">
              <label for="exampleInputName">Name *</label>
              <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your full name" maxlength="200" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email *</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your academic email address" required>
              
            </div>
            <div class="form-group">
              <label for="exampleInputPhone">Phone *</label>
              <input class="form-control" id="exampleInputPhone" name="phone" placeholder="Enter your phone number" type="phone" pattern="[0]+[1]+[7/8/9/6/5/3]+[0-9]{8}" required>
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password *</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" minlength="6" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password *</label>
              <input type="password" name="re_password" class="form-control" id="exampleInputPassword1" placeholder="Re-type Password" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="registration">Submit</button>
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