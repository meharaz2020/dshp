<?php
$Send='Create your Free Account Here.';
if(isset($_POST['registration'])){
  
      include('config.php');
      $name =  $_POST['name'];
      $email =  $_POST['email'];
      $student_id =  $_POST['student_id'];
      $phone =  $_POST['phone'];
      $role =  "STUDENT";
      $status =  0;
      $pass =  $_POST['password'];
      $conpass =  $_POST['re_password'];
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      if ($pass == $conpass) {
          $sql = "INSERT INTO users(name,email,password,phone,student_id,role,status)VALUES ('".mysqli_real_escape_string($db,$name)."',
            '".mysqli_real_escape_string($db,$email)."',
            '".mysqli_real_escape_string($db,$hash)."',
            '".mysqli_real_escape_string($db,$phone)."',
            '".mysqli_real_escape_string($db,$student_id)."',
            '".mysqli_real_escape_string($db,$role)."',
            '".mysqli_real_escape_string($db,$status)."')";
          if ($db->query($sql) == TRUE) {

              $receiver = $email;
              $uid=uniqid();
              $link = $domain.'/backend/activate-account.php?email='.$email.'&pass='.$hash.'&uid='.$uid;
              $subject = "Verify your account";
$body = 'Hello '.$name.',
Welcome to DSHP Help Portal.
To activate your account kindly click on the below link.
Link:'.$link.'
Thanks from DSHP Help Portal.';
              $sender = "From: diu.nahid.one";

              if(mail($receiver, $subject, $body, $sender)){
                 $Send= "SignUp Successful! A message has been sent to your email";
              }else{
                 $Send= "SignUp Successful! But unable to send you the email!";
              }
          
            } 
        else {
                     $Send="Sorry, Something wrong with your input. ";

            }
            
      }
      else{
        $Send="Check your Password Again.";
      }

         // echo "Error: " . $sql . "<br>" . $db->error;
        header("Location:../sign-up.php?msg=$Send");

      
  $db->close();
      
    

    }

?> 