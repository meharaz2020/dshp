<?php  include('../backend/auth-guard-student.php'); ?>
<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Prefect Profile Details</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php  include('../backend/prefect-profile.php'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
           <div class="container">
               <div class="main-body">
                   <br>
               
                     <div class="row gutters-sm">
                       <div class="col-md-4 mb-3">
                         <div class="card">
                           <div class="card-body">
                             <div class="d-flex flex-column align-items-center text-center">
                              <?php 
                              if ($photo != NULL) {
                               echo "<img src='".$photo."' alt='Admin' class='rounded-circle' width='150'>";
                              }else{
                                echo "<img src='../images/student-avatar.png' alt='Admin' class='rounded-circle' width='150'>";
                                
                              }
                              ?>
                               
                               <div class="mt-3">
                                 <h4><?php echo $name; ?></h4>
                                 <p class="text-secondary mb-1">ID: <?php echo $student_id; ?></p>
                                 <p class="text-muted font-size-sm"><?php if($gender==0) echo "<i class='fas fa-mars'></i> Male"; else{ echo "<i class='fas fa-venus'></i> Female";} ?></p>
                                <!--  <button class="btn btn-outline-info btn-sm" type="button" data-toggle="modal" data-toggle="modal" data-target="#photouploadmodal">Update Photo</button>
                                 <?php include "inc/photo-upload-modal.php"; ?> -->
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="card mt-3">
                           <ul class="list-group list-group-flush">
                             <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                               <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                               <span class="text-secondary"><a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a></span>
                             </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                               <?php echo $description; ?>
                             </li>
       <!--                       <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                               <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                               <span class="text-secondary">bootdey</span>
                             </li> -->
       <!--                       <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                               <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                               <span class="text-secondary">bootdey</span>
                             </li> -->
                           </ul>
                         </div>
                       </div>
                       <div class="col-md-8">
                         <div class="card mb-3">
                           <div class="card-body">
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Full Name</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $name; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Email</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $email; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Phone</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $phone; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Student Id</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $student_id; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Department</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $department; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Batch</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $batch; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Shift</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $shift; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-3">
                                 <h6 class="mb-0">Campus</h6>
                               </div>
                               <div class="col-sm-9 text-secondary">
                                 <?php echo $campus; ?>
                               </div>
                             </div>
                             <hr>
                             <div class="row">
                               <div class="col-sm-12">
                                 <!-- <button class="btn btn-outline-info btn-sm" type="button" data-toggle="modal" data-toggle="modal" data-target="#profileeditmodal">Update Profile</button> -->
                                 
                               </div>
                             </div>
                           </div>
                         </div>




                       </div>
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