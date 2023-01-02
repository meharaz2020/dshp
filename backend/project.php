<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$Send='Create your prefect profile here.';
if(isset($_POST['submit'])){
  
      include('config.php');
      session_start();
      $course_title =  $_POST['course_title'];
      $course_code =  $_POST['course_code'];
      $project_topic =  $_POST['project_topic'];
      $project_description =  $_POST['project_description'];
      $project_link =  $_POST['project_link'];
      $video_link =  $_POST['video_link'];
      $status =  1;
      $user_id = $_SESSION['user_id'];

      $sql = "INSERT INTO projects(course_title,course_code,project_link,project_topic,status,project_description,video_link,user_id)VALUES ('".mysqli_real_escape_string($db,$course_title)."',
            '".mysqli_real_escape_string($db,$course_code)."',
            '".mysqli_real_escape_string($db,$project_link)."',
            '".mysqli_real_escape_string($db,$project_topic)."',
            '".mysqli_real_escape_string($db,$status)."',
            '".mysqli_real_escape_string($db,$project_description)."',
            '".mysqli_real_escape_string($db,$video_link)."',
            '".mysqli_real_escape_string($db,$user_id)."')";
        if ($db->query($sql) == TRUE) {
          
            $Send="Project created Successfully!";
            } 
        else {
                     $Send="Sorry, Something wrong with your input. ";

            }
            $sq="Select name as uname,email as uemail from users where user_id=$user_id";
            $psql=mysqli_query($db,$sq);
            while($r=mysqli_fetch_assoc($psql)){
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
              $mail->addAddress($r['uemail']);                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
          
               
          
              //Content
              $mail->isHTML(true);                                  //Set email format to HTML
              $mail->Subject ='Dear '.$r["uname"];
              
              $mail->Body    =  '<h1> congratulations your project is uploaded successfully 
              <br> Thank You........';
              // $mail->AltBody = $_POST["message"].'<a href="https://www.youtube.com/watch?v=nbaXkKJMflg&list=RDUu40qFSaINw&index=21">link</a>';
          
              $mail->send();
              // echo 'Message has been sent';
            }

         // echo "Error: " . $sql . "<br>" . $db->error;
        header("Location:../student/create-projects.php?msg=$Send");

      
  $db->close();
      
    

    }
    if(isset($_POST['update'])){
      
          include('config.php');
          session_start();
          $id =  $_POST['id'];
          $course_title =  $_POST['course_title'];
          $course_code =  $_POST['course_code'];
          $project_topic =  $_POST['project_topic'];
           $project_description =  $_POST['project_description'];
          $project_link =  $_POST['project_link'];
          $video_link =  $_POST['video_link'];
          $user_id = $_SESSION['user_id'];

          $sql = "UPDATE projects SET course_title='$course_title',course_code='$course_code',project_link='$project_link',project_topic='$project_topic',project_description='$project_description',video_link='$video_link' WHERE user_id ='$user_id' and project_id='$id' ";
            if ($db->query($sql) == TRUE) {
              
                $Send="Project Updated Successfully!";
                } 
            else {
                         $Send="Sorry, Something wrong with your input. ";

                }

             // echo "Error: " . $sql . "<br>" . $db->error;
            header("Location:../student/view-projects.php?msg=$Send");

          
      $db->close();
          
        

        }

?> 