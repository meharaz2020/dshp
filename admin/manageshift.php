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
      <div class="container">
     
       <div class="row">
        <div class="col-md-12">

          <div class="card" style="padding: 0px 8px;">
        <div class="card-header">
          <h3 class="card-title">Manage All Shift</h3>

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
                      <th style="width: 20%">
                          ID
                      </th>
                      <th style="width: 60%">
                          Name
                      </th>
                     
                      <th style="width: 19%">
                          Action
                      </th>
                       
                      
                  </tr>
              </thead>
              <tbody>

                <?php

                  $sql = "SELECT * FROM program";
                        $allResearchField = mysqli_query($db, $sql);
                          $i = 0;
                          while( $row = mysqli_fetch_assoc($allResearchField) ){

                            $program_id              = $row['program_id'];
                            $program_list            = $row['program_list'];
                           
                            $i++;
                            ?>

                            <tr>
                     
                       <td> <?php echo $i; ?> </td>
                       <td> <?php echo $program_id; ?> </td>
                        <td> <?php echo $program_list; ?> </td>
                        

                    
                     
                      <td class="project-actions text-right">
                        
                         <!--  <a class="btn btn-info btn-sm" href="editresearch.php?update=<?php echo $id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a> -->
                          <a class="btn btn-danger btn-sm" href="?delete=<?php echo $program_id; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>


            <?php    }

                ?>

                <?php

                  if (isset($_GET['delete'])) {
                 $deleteId = $_GET['delete'];
       
                  
                  $sql = "DELETE FROM program WHERE program_id ='$deleteId'";
                  $deletePostData = mysqli_query($db, $sql);
                  if ($deletePostData) {
                    header("Location:manageshift.php");
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