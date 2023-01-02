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
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">

          <div class="card" style="padding: 0px 8px;">
        <div class="card-header">
          <h3 class="card-title">Manage All Users</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table id="choton" class="table table-striped projects ">
              <thead>
                  <tr>
                      <th style="width: 1%">
                         Sl.
                      </th>
                       <th style="width: 1%">
                        ID.
                      </th>
                      <th style="width: 15%">
                          Name
                      </th>
                      <th style="width: 13%">
                        Student Id.
                      </th>
                      <th style="width: 10%">
                          Phone
                      </th>
                      <th style="width: 20%">
                         Email
                      </th>
                     
                       <th style="width: 5%">
                          Role
                      </th>
                      <th style="width: 10%">
                          Department
                      </th>
         
                   <!--    
                      <th style="width: 5%">
                        Status
                      </th> -->
                     <!--  <th style="width: 10%">
                          Image
                      </th> -->
                      <th style="width: 25%">
                          Action
                      </th>
                       
                      
                  </tr>
              </thead>
              <tbody>

                <?php

                  $sql = "SELECT * FROM users";
                        $allUser = mysqli_query($db, $sql);
                          $i = 0;
                          while( $row = mysqli_fetch_assoc($allUser) ){

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
                            $i++;
                            ?>

                            <tr>
                     
                       <td> <?php echo $i; ?> </td>
                        <td> <?php echo $user_id; ?> </td>
                         <!-- <td> <?php echo $designation ; ?> </td> -->
                          <td> <?php echo $name ; ?> </td>
                        <td> <?php echo $student_id; ?> </td>
                         <td> <?php echo $phone ; ?> </td>

                         <td> <?php echo $email ; ?> </td>
                        <!-- <td> <?php echo $teaching_area; ?> </td> -->

                           <td>  <?php
                           if ($role == "ADMIN") {?>
                           <span class="badge badge-success">ADMIN</span>  
                         <?php  }
                           else if ($role == "STUDENT" ) { ?>
                            <span class="badge badge-danger">STUDENT</span>  
                          <?php  }

                          ?>
                           </td> 
                         <td> <?php echo $department ; ?> </td>

                       
                        


                     
                    <!--   <td>
                           <?php
                               if (!empty($image)) { ?>
                                <img src="assets/img/users/<?php echo $image; ?>" class="table-img" style="height: 30px;">
                              <?php }
                               else{ ?>
                                <img src="assets/img/users/default.png" class="table-img">

                               <?php }

                          ?>
                      </td>
                     -->
                     
                      <td class="project-actions text-right">
                        <!--  <a class="btn btn-info btn-sm" href="viewuser.php?view=<?php echo $user_id ; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              View
                          </a> -->

                           <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#delete<?php echo $user_id; ?>">
                              <i class="fas fa-eye">
                              </i>
                              View
                          </a>
                        
                          <a class="btn btn-info btn-sm" href="edituser.php?update=<?php echo $user_id ; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?delete=<?php echo $user_id ; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>


                        <!--Delete  Modal -->
                  <div class="modal fade" id="delete<?php echo $user_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 80%;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">View All User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <!-- <div class="container">
                          <div class="row"> -->

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
              <select name="role" class="form-control">
                
                <option value="0" <?php if($role == "ADMIN"){echo 'selected';} ?>>ADMIN</option>
                <option value="1" <?php if($role == "STUDENT"){echo 'selected';} ?>>STUDENT</option>
              </select>
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
              <select name="gender" class="form-control">
                
                <option value="0" <?php if($gender == 0){echo 'selected';} ?>>Male</option>
                <option value="1" <?php if($gender == 1){echo 'selected';} ?>>Female</option>
              </select>
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

           <!--  <div class="form-group">
              <a href="manageuser.php"><button type="button" class="btn btn-block btn-primary">Go To Manage User</button></a>
              
                 
            </div> -->
              </form>
          
          
        </div>

          
       
         
       </div>

       
        
     



      
      </div>
    </section>
                         <!--    
                          </div>
                          
                        </div> -->

                        </div>
                        
                      </div>
                    </div>
                  </div>


            <?php    }

                ?>

                <?php

                  if (isset($_GET['delete'])) {
                 $deleteId = $_GET['delete'];
       

          $deleteImageSQL = "SELECT * FROM users WHERE user_id  ='$deleteId'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['image'];
                  }
                  if (!empty($existingImage)) {
                    unlink('assets/img/users/'.$existingImage);
                  }
                  
                  $sql = "DELETE FROM users WHERE user_id  ='$deleteId'";
                  $deletePostData = mysqli_query($db, $sql);
                  if ($deletePostData) {
                    header("Location:manageuser.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }
          
        }




                ?>
                  
                  
                
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
         
          
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