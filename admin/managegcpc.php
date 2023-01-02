
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
         <h3 class="card-title">Manage GCPC Post</h3>

         <div class="card-tools">
           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
             <i class="fas fa-minus"></i>
           </button>
           <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
             <i class="fas fa-times"></i>
           </button> -->
         </div>
       </div>
       <div class="card-body p-0">
         <table id="choton" class="table table-striped projects ">
             <thead>
                 <tr>
                     <th style="width: 10%">
                        Sl.
                     </th>
                     
                     <th style="width: 20%">
                        Title
                     </th>
                     <th style="width: 30%">
                         Description
                     </th>                    
                     
                    
                       <th style="width: 10%">
                         Status
                     </th>
                     
                     
                     <th style="width: 10%">
                         Image
                     </th>
                      <th style="width: 15%">
                         Action
                     </th>
                   
                    
                      
                     
                 </tr>
             </thead>
             <tbody>

               <?php

                   $sql = "SELECT * FROM club_gcpc";
                       $allCourse = mysqli_query($db, $sql);
                         $i = 0;
                         while( $row = mysqli_fetch_assoc($allCourse) ){

                           $id              = $row['id'];
                           $title       = $row['title'];                          
                           $description      = $row['description'];
                          
                           $image             = $row['image'];
                          
                           $status            = $row['status'];
                           $i++;
                           ?>

                           <tr>
                    
                       <td> <?php echo $i; ?> </td>
                       
                       <td> <?php echo $title ; ?> </td>                       
                       <td> <?php echo substr($row['description'], 0, 20) . ((strlen($row['description']) > 20) ? '......' : ''); ?> </td>                       


                       <td>  <?php
                          if ($status == 0) {?>
                          <span class="badge badge-danger">Inactive</span>  
                        <?php  }
                          else if ($status == 1 ) { ?>
                           <span class="badge badge-success">Active</span>  
                         <?php  }

                         ?>
                          </td>
                       


                    
                     <td>
                          <?php
                              if (!empty($image)) { ?>
                               <img src="img/course/<?php echo $image; ?>" class="table-img" style="height: 30px;">
                             <?php }
                              else{ ?>
                               <img src="img/course/default.png" class="table-img">

                              <?php }

                         ?>
                     </td>
                   
                    
                     <td class="project-actions text-right">
                       
                         <a class="btn btn-info btn-sm" href="editgcpc.php?update=<?php echo $id; ?>">
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
                $deletecpcpoct = $_GET['delete'];
      

         $deleteImageSQL = "SELECT * FROM club_gcpc WHERE id ='$deletecpcpoct'";
                 $data = mysqli_query($db, $deleteImageSQL);
                 while ($row = mysqli_fetch_assoc($data)) {
                   $existingImage = $row['image'];
                 }
                 if (!empty($existingImage)) {
                   unlink('img/course/'.$existingImage);
                 }
                 
                 $sql = "DELETE FROM club_gcpc WHERE id ='$deletecpcpoct'";
                 $deletePostData = mysqli_query($db, $sql);
                 if ($deletePostData) {
                   header("Location:managegcpc.php");
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