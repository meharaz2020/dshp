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
     <h2>Edit Faculty Information</h2>
    <section class="content">
      <div class="container-fluid">
         <?php

          if (isset($_GET['update'])) {
            $theUpdate = $_GET['update'];
              $sql = "SELECT * FROM faculty WHERE faculty_id = '$theUpdate'  ";
                        $allFacultyInfo = mysqli_query($db, $sql);


                        
                          while( $row = mysqli_fetch_assoc($allFacultyInfo) ){

                            $name              = $row['name'];
                            $designation       = $row['designation'];
                            $image             = $row['image'];
                            $faculty_id        = $row['faculty_id'];
                            $initial           = $row['initial'];
                            $email             = $row['email'];
                            $phone             = $row['phone'];
                            $description       = $row['description'];
                            $gender            = $row['gender'];
                            $campus            = $row['campus'];
                            $teaching_area     = $row['teaching_area'];

                            $website           = $row['website'];
                            $status            = $row['status'];
                           
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="name" class="form-control" required="required" value="<?php echo $name; ?>">
              
            </div>

            <div class="form-group">
              <label>Designation</label>
              <input type="text" name="designation" class="form-control" required="required" value="<?php echo $designation; ?>">
              
            </div>
           <!--  <div class="form-group">
              <label>Faculty Id</label>
              <input type="text" name="faculty_id" class="form-control" required="required" value="<?php echo $faculty_id; ?>">
              
            </div> -->

            <div class="form-group">
              <label>Initial</label>
              <input type="text" name="initial" class="form-control" required="required" value="<?php echo $initial; ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required="required"value="<?php echo $email; ?>">
              
            </div>
             <div class="form-group">
              <label>Phone No.</label>
              <input type="text" name="phone" class="form-control" required="required"value="<?php echo $phone; ?>">
              
            </div>
             <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"value=""><?php echo $description; ?></textarea>
              
            </div>

           
            </div>
             <div class="col-lg-6">
               
            <div class="form-group">
              <label>Campus</label>
              <input type="text" name="campus" class="form-control" required="required"value="<?php echo $campus; ?>">
              
            </div>
             <div class="form-group">
              <label>website</label>
              <input type="text" name="website" class="form-control"value="<?php echo $website; ?>">
              
            </div>
          <!--   <div class="form-group">
              <label>Teaching Area</label>
              <input type="text" name="teaching_area" class="form-control" required="required"value="<?php echo $teaching_area; ?>">
              
            </div> -->

          <div class="form-group">
              <label>Teaching Area</label>
 <?php
              if (isset($_GET['update'])) {
                $update  = $_GET['update'];
                $user_hob ="SELECT teaching_area FROM faculty WHERE faculty_id = 'id' ";
                  $addUsers = mysqli_query($db, $sql);
                  $uh_array =[];
                  foreach ($addUsers as $rowuh ){
                    $uh_array[] =  $rowuh['teaching_area'];
                  }
              }


              ?>  
              <select name="teaching_area[]" class="form-control multiple-select" multiple required="required" > 
                
              
                <?php
                $query ="SELECT * FROM research_area ";
                $query_run = mysqli_query($db, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $rowArea) {
                   ?>



                    <option value="<?php echo $rowArea['research_field'] ?>"
                      <?php echo in_array($rowArea['research_field'], $uh_array) ? 'selected':'' ?>
                    
                      >
                      <?php echo $rowArea['research_field'] ?></option>
                       

                   <?php
                  }
                  
                }else{
                 ?>

                   <option value="">No record Found</option>}
                  
                 <?php

                }


                ?>
                
              </select>
            </div> 



            <div class="form-group">
              <label>Gender</label>
              <select name="gender" class="form-control">
                
                <option value="0" <?php if($gender == 0){echo 'selected';} ?>>Male</option>
                <option value="1" <?php if($gender == 1){echo 'selected';} ?>>Female</option>
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
                              if (!empty($image)) { ?>
                                <img src="img/users/<?php echo $image; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No image Uploaded";
                              }


                            ?>
              <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
              <input type="hidden" name="updateFacultyId" value="<?php echo $faculty_id;?> ">
              <input type="submit" name="updateFaculty" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updateFaculty'])) {
          $updateFacultyId=$_POST['updateFacultyId'];

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
                 $multeaching_area = implode(",", $teaching_area);
                 $status            = $_POST['status'];
                 $imageName        = $_FILES['image']['name'];

               
                 
                
            
                  if (!empty($imageName)) {
                    //prepare the image
                 
                 
                 $imageSize   = $_FILES['image']['size'];
                
                 $imagetmp    = $_FILES['image']['tmp_name'];

                

                  }

                 


                  //upload image and change the password
                  if (!empty($imageName)) {
               

                  //delete the existing image while updating the image
                  $query = "SELECT * FROM faculty WHERE faculty_id ='$updateFacultyId'";
                  $data = mysqli_query($db, $query);

   
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['image'];
                  }
                  unlink('img/users/'.$existingImage);

                  //change the image name
                  $image = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/users/" .$image);


//                    $hob_values = [];

//     foreach ($data as $dat) {
    

//        $hob_values[] = $dat['teaching_area'];

//   }
// foreach ($teaching_area as $input_val) {
//   if (!in_array($input_val, $hob_values)) {
//     // $insert_query = "INSERT INTO faculty(faculty_id,teaching_area) VALUES('$faculty_id','$input_val')";
//     // $insert_query_run = mysqli_query($db,$insert_query);

//   }
// }
                 
                    $sql = "UPDATE faculty SET name='$name',designation='$designation',initial='$initial',email='$email',phone='$phone',description='$description',gender='$gender',campus='$campus',website='$website',teaching_area='$multeaching_area',status='$status',image='$image' WHERE faculty_id ='$updateFacultyId' ";
                  
                 
                  $addUser = mysqli_query($db, $sql);

                  if ($addUser) {
                    header("Location:managefaculty.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }


                  }

              

                  
                  
                  //change the password only
                  else if (  empty($imageName)){

                


                 
                  $sql = "UPDATE faculty SET name='$name',designation='$designation',initial='$initial',email='$email',phone='$phone',description='$description',gender='$gender',campus='$campus',website='$website',teaching_area='$multeaching_area',status='$status',image='$image' WHERE faculty_id ='$updateFacultyId' ";

                 
                  $addUser = mysqli_query($db, $sql);

                  if ($addUser) {
                    header("Location:managefaculty.php");
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