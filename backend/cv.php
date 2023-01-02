<?php
if(isset($_POST['submit_modern']) || isset($_POST['submit_classic'])){

  
      include('config.php');
      session_start();
      $profession_title =  $_POST['profession_title'];
      $address =  $_POST['address'];
      $about_me =  $_POST['about_me'];

      $exp_title =  $_POST['exp_title'];
      $exp_from =  $_POST['exp_from'];
      $exp_com_name =  $_POST['exp_com_name'];
      $exp_desc =  $_POST['exp_desc'];

      $edu_title =  $_POST['edu_title'];
      $edu_ins_name =  $_POST['edu_ins_name'];
      $edu_passing_year =  $_POST['edu_passing_year'];
      $edu_result =  $_POST['edu_result'];

      $skills_title =  $_POST['skills_title'];
      $skills_ratting =  $_POST['skills_ratting'];

      $language_title =  $_POST['language_title'];
      $language_desc =  $_POST['language_desc'];

      $personal_info =  $_POST['personal_info'];
      $reference =  $_POST['reference'];

      $user_id = $_SESSION['user_id'];

      $imageName   = $_FILES['signature']['name'];
      $imageSize   = $_FILES['signature']['size'];
                 
      $imagetmp    = $_FILES['signature']['tmp_name'];

                   //change the image name
      $image = rand(0, 999999).$imageName;
                  //upload the image to its own location
      move_uploaded_file( $imagetmp, "../student/img/" . $image);
      $signature_image=$image;

      $sql = "SELECT * FROM users WHERE user_id = $user_id and role ='STUDENT' and status =1";
      $user = mysqli_query($db, $sql);
      while( $row = mysqli_fetch_assoc($user) ){
        $name = $row['name'];
        $student_id = $row['student_id'];
        $email = $row['email'];
        $phone = $row['phone'];
        $role = $row['role'];
        $department = $row['department'];
        $batch = $row['batch'];
        $shift = $row['shift'];
        $gender = $row['gender'];
        $campus = $row['campus'];
        $photo = $row['photo'];
        $description = $row['description'];
        $website = $row['website'];
        $status= $row['status'];

      }
      

      $_SESSION['name']=$name;
      $_SESSION['address']=$address;
      $_SESSION['email']=$email;
      $_SESSION['phone']=$phone;
      $_SESSION['photo']=$photo;
      $_SESSION['website']=$website;


      $_SESSION['profession_title']=$profession_title;
      $_SESSION['about_me']=$about_me;

      $_SESSION['exp_title']=$exp_title;
      $_SESSION['exp_from']=$exp_from;
      $_SESSION['exp_com_name']=$exp_com_name;
      $_SESSION['exp_desc']=$exp_desc;

      $_SESSION['edu_title']=$edu_title;
      $_SESSION['edu_ins_name']=$edu_ins_name;
      $_SESSION['edu_passing_year']=$edu_passing_year;
      $_SESSION['edu_result']=$edu_result;

      $_SESSION['skills_title']=$skills_title;
      $_SESSION['skills_ratting']=$skills_ratting;

      $_SESSION['language_title']=$language_title;
      $_SESSION['language_desc']=$language_desc;

      $_SESSION['personal_info']=$personal_info;
      $_SESSION['reference']=$reference;
      $_SESSION['signature_image']=$signature_image;


         // echo "Error: " . $sql . "<br>" . $db->error;
         // echo $_SESSION['name'];
      if (isset($_POST['submit_modern'])) {
          header("Location:../student/modern-cv-view.php");
      }
      else if (isset($_POST['submit_classic'])) {
          header("Location:../student/classic-cv-view.php");
      }
    


    }

?> 