<?php
$msg='';
if(isset($_POST['message'])){
  include('backend/config.php');
  $name = mysqli_real_escape_string($db,$_POST["name"]); 
  $email = mysqli_real_escape_string($db,$_POST["email"]); 
  $phone = mysqli_real_escape_string($db,$_POST["phone"]); 
  $subject = mysqli_real_escape_string($db,$_POST["subject"]); 
  $body_message = mysqli_real_escape_string($db,$_POST["body"]); 

  if(!empty($email) && !empty($body_message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "nhassan213@gmail.com"; //enter that email address where you want to receive all messages
      $subject_mail = "Message From ".$name;
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$body_message\n\nRegards,\n$name";
      $sender = "From: diu.nahid.one";
      if(mail($receiver, $subject_mail, $body, $sender)){
         $Send = "Your message has been sent";
      }else{
         $Send = "Sorry, failed to send your message!";
      }
    }else{
      $Send = "Enter a valid email address!";
    }
  }else{
    $Send = "Email and message field is required!";
  }
  header("Location:contact.php?msg=$Send");
}
?>
