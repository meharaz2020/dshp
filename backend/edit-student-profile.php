<?php
       if (isset($_POST['updateUser'])) {
         include('config.php');
          $updateUserId=$_POST['updateUserId'];

                            // $user_id               = $_POST['user_id'];
                            $name                  = $_POST['name'];
                            $student_id            = $_POST['student_id'];
                            $email                 = $_POST['email'];
                            $phone                 = $_POST['phone'];
                            $password              = $_POST['password'];
                            $department            = $_POST['department'];
                            $batch                 = $_POST['batch'];
                            $shift                 = $_POST['shift'];
                            // $photo                = $_POST['photo'];
                            $gender                = $_POST['gender'];
                            $campus                = $_POST['campus'];
                            $description           = $_POST['description'];
                            $website               = $_POST['website'];

                            

              if($password){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET password='$hash',name='$name',student_id='$student_id',email='$email',phone='$phone',department='$department',batch='$batch',shift='$shift',gender='$gender',campus='$campus',description='".mysqli_real_escape_string($db,$description)."',website='".mysqli_real_escape_string($db,$website)."' WHERE user_id ='$updateUserId' ";
              }else{
                $sql = "UPDATE users SET name='$name',student_id='$student_id',email='$email',phone='$phone',department='$department',batch='$batch',shift='$shift',gender='$gender',campus='$campus',description='".mysqli_real_escape_string($db,$description)."',website='".mysqli_real_escape_string($db,$website)."' WHERE user_id ='$updateUserId' ";
              }


               

               $updateUser = mysqli_query($db, $sql);

                  if ($updateUser) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                  }
                  else{
                    die("Mysqli query failed");
                   
                 }
 

          }
        

?>