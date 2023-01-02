<?php
 session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include('../backend/config.php');

 
  $prefect_id = $_GET['prefect_id'];
  $student_id = $_GET['student_id'];
 

   




  $sql1="SELECT users.email as uemail,users.user_id,users.name as uname,users.student_id,prefect_request.prefect_id,prefect_request.student_id
  from users INNER JOIN prefect_request on prefect_request.prefect_id =$prefect_id and prefect_request.student_id = users.user_id";
   $mailUser = mysqli_query($db, $sql1);

   while($row=mysqli_fetch_assoc($mailUser)){


    $user_id = $_SESSION['user_id'];

    $sq="SELECT users.user_id,users.name as pname,users.student_id as pid,prefects.user_id,prefects.course_code as cc,prefects.course_title as ct
    FROM
    users
    INNER JOIN prefects
    on prefects.user_id=$user_id and users.user_id=$user_id;";

    $m = mysqli_query($db, $sq);
    while($r=mysqli_fetch_assoc($m)){
      
        $mail = new PHPMailer(true);
        $mail->isSMTP();
      
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mhrphp@gmail.com';                     //SMTP username
        $mail->Password   = 'fqyxfmgrcucmjcgx';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('mhrphp@gmail.com', 'DSHP');
        // $mail->addAddress('mhrphp@gmail.com');                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->addAddress($row['uemail']);                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
         
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject ='Dear '.$row["uname"];
        
        $mail->Body    =  '<h1>You got a prefect request from '.$r['pname']. '</h1> <br>
        <b>student id:</b> '
        .$r['pid']. 
        '<br> <b>Course Code:</b> '.$r['cc'].
        '<br> <b>Course Title:</b> '.$r['ct'].
        '<br> Thank You........';
        // $mail->AltBody = $_POST["message"].'<a href="https://www.youtube.com/watch?v=nbaXkKJMflg&list=RDUu40qFSaINw&index=21">link</a>';
    
        $mail->send();
        // echo 'Message has been sent';
        if ($mailUser) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          }
          else{
            die("Mysqli query failed".mysqli_error($db));
           
         }
    }

    

   }
 
?>