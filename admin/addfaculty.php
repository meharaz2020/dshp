
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
              <li class="breadcrumb-item active">Add New Faculty</li>
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
        <div class="col-lg-6">
        	   <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="name" class="form-control" >
              
            </div>

            <div class="form-group">
              <label>Designation</label>
              <input type="text" name="designation" class="form-control" >
              
            </div>
            <div class="form-group">
              <label>Faculty Id</label>
              <input type="text" name="faculty_id" class="form-control" >
              
            </div>

            <div class="form-group">
              <label>Initial</label>
              <input type="text" name="initial" class="form-control" >
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" >
              
            </div>
             <div class="form-group">
              <label>Phone No.</label>
              <input type="text" name="phone" class="form-control" >
              
            </div>
             <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"></textarea>
              
            </div>

           
            </div>
             <div class="col-lg-6">
               
            <div class="form-group">
              <label>Campus</label>
              <input type="text" name="campus" class="form-control" >
              
            </div>
             <div class="form-group">
              <label>website</label>
              <input type="text" name="website" class="form-control" >
              
            </div>
            <!--  <div class="form-group">
              <label>Teaching Area</label>
              <input type="text" name="teaching_area" class="form-control" >
              
            </div> -->

            <div class="form-group">
              <label>Teaching Area</label>
              <select name="teaching_area[]" class="form-control multiple-select" multiple>
                
               <!--  <option value="">--Select Area--</option>
 -->
                <?php
                $query ="SELECT * FROM research_area";
                $query_run = mysqli_query($db, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $rowArea) {
                   ?>
                    <option value="<?php echo $rowArea['research_field'] ?>"><?php echo $rowArea['research_field'] ?></option>

                   <?php
                  }
                  
                }else{
                  echo "No Record Found";

                }


                ?>
                
              </select>
            </div>

            <div class="form-group">
              <label>Gender</label>
              <select name="gender" class="form-control">
                
                <option value="0">Male</option>
                <option value="1">Female</option>
              </select>
            </div>


              

            <div class="form-group">
              <label>User Status</label>
              <select name="status" class="form-control">
                
                <option value="0">Inactive</option>
                <option value="1">Active</option>
              </select>
            </div>

            <div class="form-group">
              <label>Upload Image</label>
              <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
              
              <input type="submit" name="addFaculty" class="btn btn-block btn-primary btn-flat" value="Register Faculty">       
            </div>
              </form>
          
          
        </div>

        <!-- right side -->

        <?php

          if (isset($_POST['addFaculty'])) {

                 

          	     $name              = $_POST['name'];
                 $designation       = $_POST['designation'];
                 $faculty_id        = $_POST['faculty_id'];
                 $initial           = $_POST['initial'];
                 $email             = $_POST['email'];
                 $phone             = $_POST['phone'];
                 $description       = $_POST['description'];
                 $gender            = $_POST['gender'];
                 

                 $campus            = $_POST['campus'];
                 $website           = $_POST['website'];
                 $teaching_area     = $_POST['teaching_area'];
                 $multeaching_area  = implode(",", $teaching_area);
                  $status            = $_POST['status'];
                 
                
                 
                 $imageName   = $_FILES['image']['name'];
                 $imageSize   = $_FILES['image']['size'];
                 
                 $imagetmp    = $_FILES['image']['tmp_name'];

                   //change the image name
                  $image = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/users/" . $image);

                  // foreach ($teaching_area as $multeaching_area) {
                  //     }
                   
                   $sql = "INSERT INTO faculty(name,designation,faculty_id,initial,email,phone,description,status,campus,website,teaching_area,gender,image) VALUES('$name','$designation','$faculty_id','$initial','$email','$phone','$description','$status','$campus','$website','$multeaching_area','$gender','$image')";
                   


                  $addFacl = mysqli_query($db, $sql);


                  if ($addFacl) {
                    header("Location:managefaculty.php");
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