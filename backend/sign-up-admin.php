<?php
$Send='Create your Free Account Here.';
if(isset($_POST['registration'])){
  
      include('config.php');
      $name =  $_POST['name'];
      $email =  $_POST['email'];
      $phone =  $_POST['phone'];
      $role =  "ADMIN";
      $status =  1;
      $pass =  $_POST['password'];
      $conpass =  $_POST['re_password'];
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      if ($pass == $conpass) {
          $sql = "INSERT INTO users(name,email,password,phone,role,status)VALUES ('".mysqli_real_escape_string($db,$name)."',
            '".mysqli_real_escape_string($db,$email)."',
            '".mysqli_real_escape_string($db,$hash)."',
            '".mysqli_real_escape_string($db,$phone)."',
            '".mysqli_real_escape_string($db,$role)."',
            '".mysqli_real_escape_string($db,$status)."')";
          if ($db->query($sql) == TRUE) {

              $Send= "Admin added Successfully!";
          
            } 
        else {
                     $Send="Sorry, Something wrong with your input. ";

            }
            
      }
      else{
        $Send="Check your Password Again.";
      }

         // echo "Error: " . $sql . "<br>" . $db->error;
        header("Location:../admin/manageuser.php?msg=$Send");

      
  $db->close();
      
    

    }

?> 