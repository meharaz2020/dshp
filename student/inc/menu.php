<?php  include('../backend/auth-guard-student.php'); ?>
<?php  include('../backend/student-profile.php'); ?>
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #202A44;">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php 
          if ($photo != NULL) {
           echo "<img src='".$photo."' alt='Student' class='img-circle elevation-2' width='150'>";
          }else{
            echo "<img src='../images/student-avatar.png' alt='Student' class='img-circle elevation-2' width='150'>"; 
          }
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $name; ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          
          </li>     
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Profile
              </p>
            </a>
          
          </li>
          <li class="nav-header" style="color: #fff;">Feature</li>        


            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p style="color: #fff; font-weight: 700; ">
                  Generate CV
                  <i class="fas fa-angle-down right"></i>
                  
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="classic-cv.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">Classic</p>
                  </a>
                </li>
                   <li class="nav-item">
                  <a href="modern-cv.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">Modern</p>
                  </a>
                </li>
               
               
              </ul>
            </li>
            <li class="nav-item">
              <a href="courses.php" class="nav-link">
                <i class="nav-icon fas fa-book-open"></i>
                <p>
                  View Cources
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p style="color: #fff; font-weight: 700; ">
                  Projects
                  <i class="fas fa-angle-down right"></i>
                  
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="create-projects.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">Create</p>
                  </a>
                </li>
                   <li class="nav-item">
                  <a href="view-projects.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">My Projects</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="skills.php" class="nav-link">
                <i class="nav-icon fas fa-award"></i>
                <p>
                  Skill Develop
                </p>
              </a>
            </li>



            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p style="color: #fff; font-weight: 700; ">
                  Programming Club
                  <i class="fas fa-angle-down right"></i>
                  
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="cpc.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">CPC</p>
                  </a>
                </li>
                   <li class="nav-item">
                  <a href="gcpc.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">View GCPC</p>
                  </a>
                </li>
               
               
              </ul>
            </li>








            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-book-reader"></i>
                <p style="color: #fff; font-weight: 700; ">
                  Student Prefect
                  <i class="fas fa-angle-down right"></i>
                  
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="create-prefect.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">Create Profile</p>
                  </a>
                </li>
                   <li class="nav-item">
                  <a href="view-prefect.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">View Prefect</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="my-prefect-profiles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #fff; font-weight: 700; ">View Student</p>
                  </a>
                </li>
               
               
              </ul>
            </li>
            
            <li class="nav-item">
              <a href="faculty.php" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                  Faculty Information
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="studentsupervisor.php" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Supervisor
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="notice.php" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                <p>
                  Notice Board
                </p>
              </a>
            </li>
<!--             <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-download"></i>
                <p>
                  Downloads
                </p>
              </a>
            </li> -->

          <li class="nav-item">
            <a type="button" data-toggle="modal" data-target="#signoutModal" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign-Out
              </p>
              
            </a>
           
          
          </li>
          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <?php include "sign-out-modal.php";?> 