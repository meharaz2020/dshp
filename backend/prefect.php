<?php
$Send='Create your prefect profile here.';
if(isset($_POST['submit'])){
  
      include('config.php');
      session_start();
      $batch =  $_POST['batch'];
      $course_code =  $_POST['course_code'];
      $course_title =  $_POST['course_title'];
      $avaliable_time =  $_POST['avaliable_time'];
      $description =  $_POST['description'];
      $status =  1;
      $user_id = $_SESSION['user_id'];

      $sql = "INSERT INTO prefects(batch,course_code,avaliable_time,course_title,status,description,user_id)VALUES ('".mysqli_real_escape_string($db,$batch)."',
            '".mysqli_real_escape_string($db,$course_code)."',
            '".mysqli_real_escape_string($db,$avaliable_time)."',
            '".mysqli_real_escape_string($db,$course_title)."',
            '".mysqli_real_escape_string($db,$status)."',
            '".mysqli_real_escape_string($db,$description)."',
            '".mysqli_real_escape_string($db,$user_id)."')";
        if ($db->query($sql) == TRUE) {
          
            $Send="Profile created Successfully!";
            } 
        else {
                     $Send="Sorry, Something wrong with your input. ";

            }


           
         // echo "Error: " . $sql . "<br>" . $db->error;
        header("Location:../student/create-prefect.php?msg=$Send");

      
  $db->close();
      
    

    }
    if(isset($_POST['update'])){
      
          include('config.php');
          session_start();
          $id =  $_POST['id'];
          $batch =  $_POST['batch'];
          $course_code =  $_POST['course_code'];
          $course_title =  $_POST['course_title'];
          $avaliable_time =  $_POST['avaliable_time'];
          $description =  $_POST['description'];
          $status =  $_POST['status'];
          $user_id = $_SESSION['user_id'];

          $sql = "UPDATE prefects SET batch='$batch',course_code='$course_code',avaliable_time='$avaliable_time',course_title='$course_title',status='$status',description='$description' WHERE user_id ='$user_id' and id='$id' ";
            if ($db->query($sql) == TRUE) {
              
                $Send="Profile Updated Successfully!";
                } 
            else {
                         $Send="Sorry, Something wrong with your input. ";

                }

             // echo "Error: " . $sql . "<br>" . $db->error;
            header("Location:../student/my-prefect-profiles.php?msg=$Send");

          
      $db->close();
          
        

        }

?> 