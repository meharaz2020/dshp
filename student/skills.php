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
            <h1 class="m-0">Skill Develop</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <form action="" method="post">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fa fa-search"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-md form-control-borderless" type="search" placeholder="Search with course name and offer by" name="search_text">
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button class="btn btn-md btn-outline-success" type="submit" name="search">Search</button>
                                </div>
                                <!--end of col-->
                            </div>
                        </form>
            <!-- <ol class="breadcrumb float-sm-right"> -->
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
                   <div class="row">

                       <?php
                       if (isset($_POST['search'])) {
                        $search_text =  $_POST['search_text'];
                        $sql = "SELECT * FROM course WHERE status=1 and course_name like '%$search_text%' or course_by like '%$search_text%' ORDER BY  course_name ASC";
                               
                       }
                        else{
                          $sql = "SELECT * FROM course WHERE status=1 ORDER BY course_name ASC";
                         }
                        $allCourse = mysqli_query($db, $sql);
                             
                                 
                                 while( $row = mysqli_fetch_assoc($allCourse) ){

                                   $id              = $row['id'];
                                   $course_name       = $row['course_name'];
                                   $course_time             = $row['course_time'];
                                   $course_by     = $row['course_by'];
                                   $total_seat           = $row['total_seat'];
                                   $description      = $row['description'];
                                  
                                   $image             = $row['image'];
                                  
                                   $status            = $row['status'];





                       ?>
                       <div class="col-lg-3 col-md-6 col-sm-8">
                           <div class="singel-publication mt-30">
                               <div class="image">
                                <a href="../skillcoursesingle.php?view=<?php echo $id?>"> <img src="../admin/img/course/<?php echo $image?>" alt="Publication"></a>
                                   <!-- <img src="../admin/img/course/<?php echo $image?>" alt="Publication"> -->
                                   <!-- <div class="add-cart">
                                       <ul>
                                           <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                           <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                       </ul>
                                   </div> -->
                               </div>
                               <div class="cont">
                                   <div class="name">
                                       <a href="../skillcoursesingle.php?view=<?php echo $id?>"><h6><?php echo $course_name?>  </h6></a>
                                       <span>By <?php echo $course_by?></span>
                                   </div>
                                   <div class="button text-right">
                                       <a href="" class="main-btn">Total Seat <?php echo $total_seat ?></a>
                                   </div>
                               </div>
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