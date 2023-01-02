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
     <h2>Edit Notice Information</h2>
    <section class="content">
      <div class="container-fluid">
         <?php

          if (isset($_GET['update'])) {
            $theUpdate = $_GET['update'];
              $sql = "SELECT * FROM notic WHERE id = '$theUpdate'  ";
                        $allCourseInfo = mysqli_query($db, $sql);
                        
                          while( $row = mysqli_fetch_assoc($allCourseInfo) ){

                            $id              = $row['id'];
                            $notic_topic     = $row['notic_topic'];
                            $shift           = $row['shift'];
                            $notic_desc      = $row['notic_desc'];
                            $notic_depart    = $row['notic_depart'];
                            $notice_pdf      = $row['notice_pdf'];
                           
                            
                            $status            = $row['status'];
                           
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Notice Topic</label>
              <input type="text" name="notic_topic" class="form-control" required="required" value="<?php echo $notic_topic; ?>">
              
            </div>
            <div class="form-group">
              <label>Shift</label>
              <input type="text" name="shift" class="form-control" required="required" value="<?php echo $shift; ?>">
              
            </div>

            <div class="form-group">
              <label>Notic Department</label>
              <input type="text" name="notic_depart" class="form-control" required="required" value="<?php echo $notic_depart; ?>">
              
            </div>

             <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="notic_desc" rows="4"value=""><?php echo $notic_desc; ?></textarea>
              
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
                              if (!empty($notice_pdf)) { ?>
                                <img src="img/course/<?php echo $notice_pdf; ?>" class="form-image" style="height: 30px;">
                                 
                             <?php  }
                              else{
                                echo "No image Uploaded";
                              }


                            ?>
              <input type="file" name="notice_pdf" class="form-control-file">
            </div>

            <div class="form-group">
              <input type="hidden" name="updateNoticE" value="<?php echo $id;?> ">
              <input type="submit" name="updateNoticeInfo" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updateNoticeInfo'])) {
          $updateNoticE=$_POST['updateNoticE'];

                 $id                = $_POST['id'];
                 $notic_topic       = $_POST['notic_topic'];
                 $shift             = $_POST['shift'];
                 $notic_desc        = $_POST['notic_desc'];
                 $notic_depart      = $_POST['notic_depart'];
                
                                             
                 $status            = $_POST['status'];
                 $imageName         = $_FILES['notice_pdf']['name'];

               
                 
                
            
                  if (!empty($imageName)) {
                    //prepare the image
                 
                 
                 $imageSize   = $_FILES['notice_pdf']['size'];
                
                 $imagetmp    = $_FILES['notice_pdf']['tmp_name'];

                

                  }


                  //upload image
                  if (!empty($imageName)) {
               

                  //delete the existing image while updating the image
                  $deleteImageSQL = "SELECT * FROM notic WHERE id ='$updateNoticE'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['notice_pdf'];
                  }
                  unlink('img/information/'.$existingImage);

                  //change the image name
                  $notice_pdf = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/information/" .$notice_pdf);
                 
                    $sql = "UPDATE notic SET notic_topic='$notic_topic',shift='$shift',notic_desc='$notic_desc',notic_depart='$notic_depart',status='$status',notice_pdf='$notice_pdf' WHERE id ='$updateNoticE' ";
                    

                 
                  $addvisor = mysqli_query($db, $sql);

                  if ($addvisor) {
                    header("Location:managenotic.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }


                  }
                  
                  
                  //change the password only
                  else if (  empty($imageName)){

                 
                  $sql = "UPDATE notic SET notic_topic='$notic_topic',shift='$shift',notic_desc='$notic_desc',notic_depart='$notic_depart',status='$status',notice_pdf='$notice_pdf' WHERE id ='$updateNoticE' ";

                      

                 
                  $addcourse = mysqli_query($db, $sql);

                  if ($addcourse) {
                    header("Location:managenotic.php");
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