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
            <h1 class="m-0">Notices</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
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
                   <div class="row justify-content-left mx-auto">

                       <?php
                             
                            if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
}
                             $user_id = $_SESSION['user_id'];


                            $sql = "SELECT * FROM notic where status=1";

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
                       <div style="margin:5px;" class="col-lg-5 col-md-5 col-sm-5 shadow-sm p-3 mb-5 bg-white rounded">
                           <div class="singel-publication">

                               <div class="">
                                 <img style="max-height:50px; float: right;" src="../images/notice.png">
                                   <div class="text-left">
                                        
                                       <a href=""><h5><?php echo $notic_topic; ?></h5></a>

                                       <span><!-- <i class="fa fa-user"></i> --><b>Shift</b> <?php echo $shift?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                       
                                       <span><!-- <i class="fa fa-clock"></i> --> <b>Dept. </b>  <?php echo $notic_depart ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                       <!-- <span><b>Batch </b>  <?php echo $batch; ?></span><br> -->
                                       <span>Details: <?php echo substr($row['notic_desc'], 0, 50) . ((strlen($row['notic_desc']) > 50) ? '......' : ''); ?></span>
                                   </div>
        <!--                            <div style="float:right;" class="text-right">
                                       
                                   </div> -->
                               </div>


                                <!-- <a href="../backend/send-prefect-request.php?id=$prefect_id"><button type="button" class="btn btn-outline-info btn-sm" >Profile</button></a> -->
                              
                               <button style='float:right;' type="button" class="btn btn-outline-info btn-sm" onclick="location.href='../admin/img/information/<?php echo $notice_pdf; ?>';">Download</button>
                               
                           </div> <!-- singel publication -->
                       </div>
                      
                      <?php



                   }

                  ?>

                       
                   </div> <!-- row -->
                  
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