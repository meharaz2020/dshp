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
     <h2>Edit User Information</h2>
    <section class="content">
      <div class="container-fluid">
         <?php

          if (isset($_GET['update'])) {
            $theUpdate = $_GET['update'];
              $sql = "SELECT * FROM users WHERE user_id  = '$theUpdate'  ";
                        $allUserInfo = mysqli_query($db, $sql);


                        
                          while( $row = mysqli_fetch_assoc($allUserInfo) ){

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
              <label>Full Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
              
            </div>
             <div class="form-group">
              <label>Student Id</label>
              <input type="text" name="student_id" class="form-control"  value="<?php echo $student_id; ?>">
              
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control"  value="<?php echo $email; ?>">
              
            </div>
           <!--  <div class="form-group">
              <label>Faculty Id</label>
              <input type="text" name="faculty_id" class="form-control" required="required" value="<?php echo $faculty_id; ?>">
              
            </div> -->

            <div class="form-group">
              <label>Phone No.</label>
              <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" >
              
            </div>

            <div class="form-group">
              <label>Role</label>
              <select name="role" class="form-control">
                
                <option value="ADMIN" <?php if($role == "ADMIN"){echo 'selected';} ?>>ADMIN</option>
                <option value="STUDENT" <?php if($role == "STUDENT"){echo 'selected';} ?>>STUDENT</option>
              </select>
            </div>
           
             <div class="form-group">
              <label>Department</label>
              <textarea class="form-control" name="department" rows="4"value=""><?php echo $department; ?></textarea>
              
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"value="" ><?php echo $description; ?></textarea>
              
            </div>

           
            </div>
             <div class="col-lg-6">
               
             <div class="form-group">
              <label>Batch</label>
              <input type="text" name="batch" class="form-control" value="<?php echo $batch; ?>" >
              
            </div>

              <div class="form-group">
              <label>Shift</label>
              <input type="text" name="shift" class="form-control" value="<?php echo $shift; ?>" >
              
            </div>
         


            <div class="form-group">
              <label>Gender</label>
              <select name="gender" class="form-control">
                
                <option value="0" <?php if($gender == 0){echo 'selected';} ?>>Male</option>
                <option value="1" <?php if($gender == 1){echo 'selected';} ?>>Female</option>
              </select>
            </div>
             <div class="form-group">
              <label>Campus</label>
              <input type="text" name="campus" class="form-control" value="<?php echo $campus; ?>" >
              
            </div> 
             <div class="form-group">
              <label>Website</label>
              <input type="text" name="website" class="form-control" value="<?php echo $website; ?>" >
              
            </div> 


              

            <div class="form-group">
              <label>User Status</label>
              <select name="status" class="form-control">
                
                <option value="0"  <?php if($status == 0){echo 'selected';} ?>>Inactive</option>
                <option value="1"  <?php if($status == 1){echo 'selected';} ?>>Active</option>
              </select>
            </div>

            <div class="form-group" >
              <label>User Image</label>
              <?php
                              if (!empty($photo)) { ?>
                                <img src="img/users/<?php echo $photo; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No image Uploaded";
                              }


                            ?>
              <input type="file" name="photo" class="form-control-file" readonly>
            </div>

            <div class="form-group">
              <input type="hidden" name="updateUserId" value="<?php echo $user_id ;?> ">
              <input type="submit" name="updateUser" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updateUser'])) {
          $updateUserId=$_POST['updateUserId'];

                            // $user_id               = $_POST['user_id'];
                            $name                  = $_POST['name'];
                            $student_id            = $_POST['student_id'];
                            $email                 = $_POST['email'];
                            $phone                 = $_POST['phone'];
                            $role                  = $_POST['role'];
                            // $password              = $_POST['password'];
                            $department            = $_POST['department'];
                            $batch                 = $_POST['batch'];
                            $shift                 = $_POST['shift'];
                            // $photo                = $_POST['photo'];
                            $gender                = $_POST['gender'];
                            $campus                = $_POST['campus'];
                            $description           = $_POST['description'];
                            $website               = $_POST['website'];
                            $status                = $_POST['status'];


                 $imageName        = $_FILES['photo']['name'];

               
                 
                
            
                  if (!empty($imageName)) {
                    //prepare the image
                 
                 
                 $imageSize   = $_FILES['photo']['size'];
                
                 $imagetmp    = $_FILES['photo']['tmp_name'];

                

                  }

                  //upload image and change the password
                  if (!empty($imageName)) {
               

             
                  $deleteImageSQL = "SELECT * FROM users WHERE user_id  ='$updateUserId'";
                  $data = mysqli_query($db, $deleteImageSQL);

   
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['photo'];
                  }
                  // unlink('img/users/'.$existingImage);

                  //change the image name
                  $photo = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/users/" .$photo);


                 
                    $sql = "UPDATE users SET name='$name',student_id='$student_id',email='$email',phone='$phone',role='$role',department='$department',batch='$batch',shift='$shift',gender='$gender',campus='$campus',description='$description',photo='$photo',website='$website',status='$status'  WHERE user_id ='$updateUserId' ";

                     
               


                  }

              

                  
                  
                  //change the password only
                  else if (  empty($imageName)){


                 
                   $sql = "UPDATE users SET name='$name',student_id='$student_id',email='$email',phone='$phone',role='$role',department='$department',batch='$batch',shift='$shift',gender='$gender',campus='$campus',description='$description',photo='$photo',website='$website',status='$status'  WHERE user_id ='$updateUserId' ";
                
                      

                 
                  $addUser = mysqli_query($db, $sql);

                  if ($addUser) {
                    header("Location:manageuser.php");
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