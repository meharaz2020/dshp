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
            <h1 class="m-0"></h1>
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
     <h2>Edit Cpc Post</h2>
    <section class="content">
      <div class="container-fluid">
         <?php

          if (isset($_GET['update'])) {
            $theUpdate = $_GET['update'];
              $sql = "SELECT * FROM club_cpc WHERE id = '$theUpdate'  ";
                        $allCourseInfo = mysqli_query($db, $sql);
                        
                          while( $row = mysqli_fetch_assoc($allCourseInfo) ){

                            $id                = $row['id'];
                            $title       = $row['title'];                            
                            $description       = $row['description'];    
                            $registration_link       = $row['registration_link'];                             
                         
                            $image             = $row['image'];                             
                            $status            = $row['status'];
                           
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" required="required" value="<?php echo $title; ?>">
              
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="4"value=""><?php echo $description; ?></textarea>
              
            </div>
                 
            <div class="form-group">
              <label>Registation Link</label>
              <input type="url" name="registration_link" class="form-control" required="required" value="<?php echo $registration_link; ?>">
              
            </div>


              

           
            </div>
             <div class="col-lg-6">

 
              

            <div class="form-group">
              <label>Course Status</label>
              <select name="status" class="form-control">
                
                <option value="0"  <?php if($status == 0){echo 'selected';} ?>>Inactive</option>
                <option value="1"  <?php if($status == 1){echo 'selected';} ?>>Active</option>
              </select>
            </div>

            <div class="form-group">
              <label>Upload Image</label>
              <?php
                              if (!empty($image)) { ?>
                                <img src="img/course/<?php echo $image; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No image Uploaded";
                              }


                            ?>
              <input type="file" name="image" class="form-control-file">
            </div>

            <div class="form-group">
              <input type="hidden" name="updateCPCMaterial" value="<?php echo $id;?> ">
              <input type="submit" name="updatecpc" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updatecpc'])) {
          $updateCPCMaterial=$_POST['updateCPCMaterial'];

                 $id                = $_POST['id'];
                 $title       = $_POST['title'];                
                 $description       = $_POST['description'];
                 
                 $registration_link       = $_POST['registration_link'];                           
                 $status            = $_POST['status'];
                 $imageName         = $_FILES['image']['name'];

               
                 
                
            
                  if (!empty($imageName)) {
                    //prepare the image
                 
                 
                 $imageSize   = $_FILES['image']['size'];
                
                 $imagetmp    = $_FILES['image']['tmp_name'];

                

                  }


                  //upload image
                  if (!empty($imageName)) {
               

                  //delete the existing image while updating the image
                  $deleteImageSQL = "SELECT * FROM club_cpc WHERE id ='$updateCPCMaterial'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['image'];
                  }
                  unlink('img/course/'.$existingImage);

                  //change the image name
                  $image = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/course/" .$image);
                 
                    $sql = "UPDATE club_cpc SET title='$title',description='$description',registration_link='$registration_link',image='$image',status='$status' WHERE id ='$updateCPCMaterial' ";
                    

                 
                  $addvisor = mysqli_query($db, $sql);

                  if ($addvisor) {
                    header("Location:managecpc.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }


                  }
                  
                  
                  //change the password only
                  else if (  empty($imageName)){

                 
                  $sql = "UPDATE club_cpc SET title='$title',description='$description',registration_link='$registration_link',image='$image',status='$status' WHERE id ='$updateCPCMaterial' ";

                      

                 
                  $addcourse = mysqli_query($db, $sql);

                  if ($addcourse) {
                    header("Location:managecpc.php");
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