<?php
$Send='';
if(isset($_POST['submit'])){


    
    include('config.php');
           $email = mysqli_real_escape_string($db,$_POST["email"]); 

           $query = "SELECT * FROM users WHERE email='$email' and status=1"; 
 
           $result = mysqli_query($db,$query); 
           
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     $receiver = $email;
                     $uid=uniqid();
                     $name = $row['name'];
                     $hash = $row['password'];
                     $link = $domain.'/backend/reset-password.php?email='.$email.'&pass='.$hash.'&uid='.$uid;
                     $subject = "Reset Password";
$body = 'Hello '.$name.',
Welcome to DSHP Help Portal.
To reset your account password kindly click on the below link.
Link:'.$link.'
And your new Password:'.$uid.'
Thanks from DSHP Help Portal.';

                     $sender = "From: diu.nahid.one";

                     if(mail($receiver, $subject, $body, $sender)){
                        $Send= "Successful! A message has been sent to your email.";
                     }else{
                        $Send= "Sorry, unable to send you the email.";
                     }
                }  
           }
           else{
               $Send="Email is Invalid";
               
           }
           header("Location:../forget-password.php?msg=$Send");
      
 }


?> 