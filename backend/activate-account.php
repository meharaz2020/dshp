<?php
          
              include('config.php');
              $status =  1;
              // $student_id = $_SESSION['user_id'];
              $email = $_GET['email'];
              $pass = $_GET['pass'];

              $sql = "UPDATE users SET status='$status' WHERE email ='$email' and password = '$pass' and status = 0";
                  $updateUser = mysqli_query($db, $sql);
                  if ($updateUser) {
                    // header('Location: ' . $_SERVER['HTTP_REFERER']);
                    header("Location:".$domain."/sign-in.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                 }

              
          $db->close();
              
            

?>