<?php
          
              include('config.php');
              // $student_id = $_SESSION['user_id'];
              $email = $_GET['email'];
              $pass = $_GET['pass'];
              $uid = $_GET['uid'];

              $hash = password_hash($uid, PASSWORD_DEFAULT);

              $sql = "UPDATE users SET password='$hash' WHERE email ='$email' and password = '$pass' and status = 1";
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