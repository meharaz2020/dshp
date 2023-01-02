
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
              <label>Course Level</label>
              <input type="text" name="level_name" class="form-control" required="required">
              
            </div>

       
            <div class="form-group">
              
              <input type="submit" name="addResearch" class="btn btn-block btn-primary btn-flat" value="Register Level">       
            </div>
              </form>
          
          
        </div>

        <!-- right side -->

        <?php

          if (isset($_POST['addResearch'])) {


               

          	     $level_name               = $_POST['level_name'];
              
                
                

                  $sql = "INSERT INTO course_level_area(level_name) VALUES('$level_name')";
                  $addResearch = mysqli_query($db, $sql);

                 

                  if ($addResearch) {
                    header("Location:managecourselevel.php");
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