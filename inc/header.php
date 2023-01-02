    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>Daffodil Road, Ashulia, Dhaka.</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>counselor@daffodilvarsity.edu.bd</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <marquee behavior="scroll" scrollamount="5" direction="left"><p>Life at Daffodil is very much eventful. Through a lot of meaningful and impactful events students get the opportunity to develop their skills and portfolio beyond the curriculam</p></marquee>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg">
                            
                            <div style="width:120px; margin-right: 50px;" class="logo">
                                <a href="index.php">
                                    <img src="images/diulogoside.png" alt="Logo">
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">   
                                    </li>
                                    <li class="nav-item">   
                                    </li>
                                    <li class="nav-item">   
                                    </li>
                                    <li class="nav-item">   
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-us.php">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="helpcenter.php">Help Center</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.php">Courses</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="projects.php">Projects</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a href="faculty.php">Faculty</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a href="">Student</a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">Student Prefect</a></li>
                                            <li><a href="teachers-singel.html">Skill Development</a></li>
                                            <li><a href="teachers-singel.html">Final Project & Defense</a></li>
                                            <li><a href="teachers-singel.html">CV Generator</a></li>
                                        </ul>
                                    </li> -->
                                    
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    <?php  
                                      if(isset($_SESSION['user_id'])){
                                        if ($_SESSION['role']=='STUDENT') {
                                            echo "<a href='student/index.php' class='loginbtn' class='btn btn-outline-primary' role='button' aria-pressed='true'>Profile</a>";
                                        }
                                        elseif ($_SESSION['role']=='ADMIN'){
                                            echo "<a href='admin/dashboard.php' class='loginbtn' class='btn btn-outline-primary' role='button' aria-pressed='true'>Dasboard</a>";
                                        }
                                          
                                       }
                                       else{
                                        echo "<li class='nav-item'>
                                            </li>
                                            <a href='sign-in.php' class='loginbtn' class='btn btn-outline-primary' role='button' aria-pressed='true'>Sign-In</a>";
                                        
                                       }  
                                    ?>
                                    
                                    
                                    
                                </ul>
                                <br>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>