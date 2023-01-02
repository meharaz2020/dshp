
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
  
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-md-12">

          <div class="card" style="padding: 0px 8px;">
        <div class="card-header">
          <h3 class="card-title">Manage All Notics</h3>

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
                      <th style="width: 5%">
                          Id
                      </th>
                      <th style="width: 10%">
                          Notice Topics
                      </th>
                      <th style="width: 10%">
                          Shift
                      </th>
                       <th style="width: 10%">
                          Notice Department
                      </th>
                      <th style="width: 19%">
                          Notice Description
                      </th>
                      <th style="width: 10% ;">
                          Notice Pdf
                      </th>
                     
                      
                      <th style="width: 10%">
                        Status
                      </th>
                      
                      <th style="width: 25%">
                          Action
                      </th>
                       
                      
                  </tr>
              </thead>
              <tbody>

                <?php

                  $sql = "SELECT * FROM notic";
                        $allNotic = mysqli_query($db, $sql);
                          $i = 0;
                          while( $row = mysqli_fetch_assoc($allNotic) ){

                            $id               = $row['id'];
                            $notic_topic      = $row['notic_topic'];
                            $shift            = $row['shift'];
                            $notic_desc       = $row['notic_desc'];
                            $notic_depart     = $row['notic_depart'];
                            $notice_pdf       = $row['notice_pdf'];
                            $status           = $row['status'];
                           
                            $i++;
                            ?>

                            <tr>
                     
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $id; ?> </td>
                        <td> <?php echo $notic_topic ; ?> </td>
                        <td> <?php echo $shift ; ?> </td>
                        <td> <?php echo $notic_depart ; ?> </td>
                        <td> <?php echo $notic_desc ; ?> </td>
                        <td><?php echo $notice_pdf; ?> </td>
                         <td>  <?php
                           if ($status == 0) {?>
                           <span class="badge badge-danger">Inactive</span>  
                         <?php  }
                           else if ($status == 1 ) { ?>
                            <span class="badge badge-success">Active</span>  
                          <?php  }

                          ?>
                           </td>
                        
                        

                        
                        
                       
                       
                        


                 
                     
                      <td class="project-actions text-right">
                        
                          <a class="btn btn-info btn-sm" href="editnotice.php?update=<?php echo $id; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?delete=<?php echo $id; ?>">
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
       

          $deleteImageSQL = "SELECT * FROM notic WHERE id ='$deleteId'";
                  $data = mysqli_query($db, $deleteImageSQL);
                  while ($row = mysqli_fetch_assoc($data)) {
                    $existingImage = $row['notice_pdf'];
                  }
                  if (!empty($existingImage)) {
                    unlink('img/information/'.$existingImage);
                  }
                  
                  $sql = "DELETE FROM notic WHERE id ='$deleteId'";
                  $deletePostData = mysqli_query($db, $sql);
                  if ($deletePostData) {
                    header("Location:managenotic.php");
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