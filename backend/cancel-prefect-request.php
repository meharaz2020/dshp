<?php
          
              include('config.php');
              session_start();
              $status =  0;
              $student_id = $_SESSION['user_id'];
              $prefect_id = $_GET['id'];

              $sql = "DELETE FROM prefect_request WHERE prefect_id ='$prefect_id' and student_id = '$student_id'";
                  $deletePostData = mysqli_query($db, $sql);
                  if ($deletePostData) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }

              
          $db->close();
              
            

?>