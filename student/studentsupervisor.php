<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>

  
<div class="content-wrapper">
  <!--====== COURSES PART START ======-->
    
    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
        <h2>faculty</h2>

            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                            </li>
                            
                        </ul> 
                        
                        <div style="float:right; margin-top: 5px;" class="col-md-6 col-sm-12" >
                              <form action="" method="post">
                                              <div class="row align-items-center">
                                                  
                                                  <!--end of col-->
                                                  <div class="col">
                                                      <input class="form-control form-control-md form-control-borderless col-sm-12" type="search" placeholder="Search with name or work of area" name="search_text">
                                                  </div>
                                                  <!--end of col-->
                                                  <div class="col-auto">
                                                      <button class="btn btn-md btn-outline-success" type="submit" name="search">Search</button>
                                                  </div>
                                                  <!--end of col-->
                                              </div>
                                          </form>
                            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        </div><!-- /.col -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">

                        <?php
                        $per_page =9;
                        $start =0;
                        $current_page=1;

                        if (isset($_GET['start'])) {

                            $start =$_GET['start'];

                            $current_page=$start;

                            $start--;

                            $start=$start*$per_page;
                        }
                        
                        $record = mysqli_num_rows(mysqli_query($db, "SELECT * FROM supervisor"));

                        $pagi =ceil($record/$per_page);
                        if (isset($_POST['search'])) {
                        $search_text =  $_POST['search_text'];
                        $sql = "SELECT * FROM supervisor WHERE status=1 and name like '%$search_text%' OR  area_research like '%$search_text%' ORDER BY supervisor_id DESC limit $start, $per_page";
                        
                        }
                        else{
                            $sql = "SELECT * FROM supervisor where status=1 ORDER BY supervisor_id DESC limit $start, $per_page";
                        }

                        
                        $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                $supervisor_id     = $row['supervisor_id'];
                $name              = $row['name'];
                $designation       = $row['designation'];
                $faculty_name      = $row['faculty_name'];
                $initial           = $row['initial'];
                $email             = $row['email'];
                $phone             = $row['phone'];
                $description       = $row['description'];
                $gender            = $row['gender'];
                $campus            = $row['campus'];
                $personal_website  = $row['personal_website'];
                           
                $area_research     = $row['area_research'];

                $image             = $row['image'];
                           
                $status            = $row['status'];


                            ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course">
                                <div class="thum">
                                    <div class="image">
                                      <a href="studentsupervisorsingle.php?view=<?php echo $supervisor_id?>">  <img src="../admin/img/supervisor/<?php echo $image; ?>" alt="Course"></a>
                                    </div>
                                    <!-- <div class="price">
                                        <span>Free</span>
                                    </div> -->
                                </div>
                                <div style="padding:5px;">
                                    <h5>Name:<?php echo $name;?></h5>
                                    <div >
                                      
                                      <div class="name">
                                         
                                      <h6>Designation :<?php echo $designation; ?></h6>
                                                <h6>Initial :<?php echo $initial; ?></h6>
                                                <!-- <h6> Research Area :<?php echo $area_research; ?></h6> -->
                                      
                                  
                       
                                          
                                           
                                            
                                        </div> 
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>

                        <?php

                    }
                    ?>
                        
                    </div> <!-- row -->
                </div>
                <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                    <div class="row">

                        <?php
                        $sql = "SELECT * FROM supervisor ORDER BY supervisor_id DESC limit $start, $per_page ";
                        $allCourse = mysqli_query($db, $sql);
                          
                          while( $row = mysqli_fetch_assoc($allCourse) ){

                       
                $supervisor_id     = $row['supervisor_id'];
                $name              = $row['name'];
                $designation       = $row['designation'];
                $faculty_name      = $row['faculty_name'];
                $initial           = $row['initial'];
                $email             = $row['email'];
                $phone             = $row['phone'];
                $description       = $row['description'];
                $gender            = $row['gender'];
                $campus            = $row['campus'];
                $personal_website  = $row['personal_website'];
                           
                $area_research     = $row['area_research'];

                $image             = $row['image'];
                           
                $status            = $row['status'];


                            ?>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <a href="studentsupervisorsingle.php?view=<?php echo $supervisor_id?>">  <img src="../admin/img/supervisor/<?php echo $image; ?>" alt="Course"></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                           
                                            
                                            <h4>Name:<?php echo $name;?></h4>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    
                                                </div>
                                                <div class="name">
                                                <h6>Designation :<?php echo $designation; ?></h6>
                                                <h6>Initial :<?php echo $initial; ?></h6>
                                                <h6> Research Area :<?php echo $area_research; ?></h6>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                          <?php

                    }
                    ?>
                    </div> <!-- row -->
                </div>
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                          <!--   <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li> -->
                            <?php
                            for ($i=1; $i <= $pagi ; $i++) { 
                               $class='';
                               if ($current_page == $i) {
                                   $class='active';
                               }?>
<li class="page-item <?php echo $class?>"><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i ?></a></li>
                               <?php
                            }



                            ?>
                        </ul>
                    </nav>  
                </div>
            </div>  
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->
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