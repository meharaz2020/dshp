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
              $sql = "SELECT * FROM research_area WHERE id = '$theUpdate'  ";
                        $allResearchInfo = mysqli_query($db, $sql);
                        
                          while( $row = mysqli_fetch_assoc($allResearchInfo) ){

                            $id              = $row['id'];
                            $research_field  = $row['research_field'];
                           
                           
                            ?>

                            
            <?php }
          }

          ?>
     
       <div class="row">
        
         

        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Research Field</label>
              <input type="text" name="research_field" class="form-control" required="required" value="<?php echo $research_field; ?>">
              
            </div>

           
            <div class="form-group">
              <input type="hidden" name="updateResearchId" value="<?php echo $id;?> ">
              <input type="submit" name="updateResearch" class="btn btn-block btn-primary btn-flat" value="Save Change">       
            </div>
              </form>
          
          
        </div>

          
       
         
       </div>

       <?php
       if (isset($_POST['updateResearch'])) {
          $updateResearchId=$_POST['updateResearchId'];

                 $research_field              = $_POST['research_field'];
               

              
                 
                    $sql = "UPDATE research_area SET research_field='$research_field' WHERE id ='$updateResearchId' ";
                      
                 
                  $addUser = mysqli_query($db, $sql);

                  if ($addUser) {
                    header("Location:manageresearch.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
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