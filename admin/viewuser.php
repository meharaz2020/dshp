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
     <h2 style="padding-left: 20px;">View User Information</h2>
    <section class="content">
      <div class="container-fluid">
         <?php

          if (isset($_GET['view'])) {
            $theView = $_GET['view'];
              $sql = "SELECT * FROM users WHERE user_id = '$theView'  ";
                        $allFacultyInfo = mysqli_query($db, $sql);


                        
                          while( $row = mysqli_fetch_assoc($allFacultyInfo) ){

                            $user_id               = $row['user_id'];
                            $name                  = $row['name'];
                            $student_id            = $row['student_id'];
                            $email                 = $row['email'];
                            $phone                 = $row['phone'];
                            $role                  = $row['role'];
                            $password              = $row['password'];
                            $department            = $row['department'];
                            $batch                 = $row['batch'];
                            $shift                 = $row['shift'];
                            $photo                 = $row['photo'];
                            $gender                = $row['gender'];
                            $campus                = $row['campus'];
                            $description           = $row['description'];
                            $website               = $row['website'];
                            $status                = $row['status'];
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
               <div class="form-group">
              <label>User Id</label>
              <input type="text" name="user_id" class="form-control" required="required" value="<?php echo $user_id; ?>" readonly>
              
            </div>
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="name" class="form-control" required="required" value="<?php echo $name; ?>" readonly>
              
            </div>

            <div class="form-group">
              <label>Student Id</label>
              <input type="text" name="student_id" class="form-control" required="required" value="<?php echo $student_id; ?>" readonly>
              
            </div>
           <!--  <div class="form-group">
              <label>Faculty Id</label>
              <input type="text" name="faculty_id" class="form-control" required="required" value="<?php echo $faculty_id; ?>">
              
            </div> -->

            
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required="required"value="<?php echo $email; ?>" readonly>
              
            </div>
             <div class="form-group">
              <label>Phone No.</label>
              <input type="text" name="phone" class="form-control" required="required"value="<?php echo $phone; ?>" readonly>
              
            </div>
            <div class="form-group">
              <label>Role</label>
              <input type="text" name="role" class="form-control" required="required"value="<?php echo $role; ?>" readonly>
              
            </div>
            <div class="form-group">
              <label>Department</label>
              <input type="text" name="department" class="form-control" required="required"value="<?php echo $department; ?>" readonly>
              
            </div>
             <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"value="" readonly><?php echo $description; ?></textarea>
              
            </div>

           
            </div>
             <div class="col-lg-6">
               
            <div class="form-group">
              <label>Batch</label>
              <input type="text" name="batch" class="form-control" required="required"value="<?php echo $batch; ?>" readonly>
              
            </div>
             <div class="form-group">
              <label>Shift</label>
              <input type="text" name="shift" class="form-control" required="required"value="<?php echo $shift; ?>" readonly>
              
            </div>
            <div class="form-group">
              <label>Gender</label>
              <input type="text" name="gender" class="form-control" required="required"value="<?php echo $gender; ?>" readonly>
              
            </div> 
         <div class="form-group">
              <label>Campus</label>
              <input type="text" name="campus" class="form-control" required="required"value="<?php echo $campus; ?>" readonly>
              
            </div> 
            <div class="form-group">
              <label>Website</label>
              <input type="text" name="website" class="form-control" required="required"value="<?php echo $website; ?>" readonly>
              
            </div> 

            
<!-- 
            <div class="form-group">
              <label>Gender</label>
              <select name="gender" class="form-control" readonly>
                
                <option value="0" <?php if($gender == 0){echo 'selected';} ?>>Male</option>
                <option value="1" <?php if($gender == 1){echo 'selected';} ?>>Female</option>
              </select>
            </div> -->


              

            <div class="form-group">
              <label>User Status</label>
              <select name="status" class="form-control" readonly>
                
                <option value="0" readonly <?php if($status == 0){echo 'selected';} ?>>Inactive</option>
                <option value="1" readonly <?php if($status == 1){echo 'selected';} ?>>Active</option>
              </select>
            </div>

            <div class="form-group" readonly>
              <label>User Image</label>
              <?php
                              if (!empty($photo)) { ?>
                                <img src="assets/img/users/<?php echo $photo; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No image Uploaded";
                              }


                            ?>
              <input type="file" name="photo" class="form-control-file" readonly>
            </div>

            <div class="form-group">
              <a href="manageuser.php"><button type="button" class="btn btn-block btn-primary">Go To Manage User</button></a>
              
              <!-- <input type="submit" name="updateFaculty" class="btn btn-block btn-primary btn-flat" value="Save Change">  -->      
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