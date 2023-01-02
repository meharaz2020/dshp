<?php
          
              include('config.php');
              session_start();
              $status =  1;
              // $student_id = $_SESSION['user_id'];
              $prefect_id = $_GET['prefect_id'];
              $student_id = $_GET['student_id'];

              $sql = "UPDATE prefect_request SET status='$status' WHERE prefect_id ='$prefect_id' and student_id = '$student_id'";
                  $updateUser = mysqli_query($db, $sql);
                  if ($updateUser) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }


                

          $db->close();
              
            

?>