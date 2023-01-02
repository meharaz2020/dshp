<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';
              include('config.php');
              session_start();
              $status =  0;
              $student_id = $_SESSION['user_id'];
              $prefect_id = $_GET['id'];

              $sql = "INSERT INTO prefect_request(prefect_id,student_id,status)VALUES ('".mysqli_real_escape_string($db,$prefect_id)."',
            '".mysqli_real_escape_string($db,$student_id)."',
            '".mysqli_real_escape_string($db,$status)."')";
        if ($db->query($sql) == TRUE) {
          
            $Send="Profile created Successfully!";
            } 
        else {
                     $Send="Sorry, Something wrong with your input. ";

            }

            // mail
 
            $sq="SELECT prefect_request.prefect_id, prefects.id as pids 
            FROM prefect_request
            INNER JOIN prefects ON prefect_request.prefect_id = $prefect_id and prefects.id=$prefect_id";
             
            $mailUser = mysqli_query($db, $sq);

            while($row=mysqli_fetch_assoc($mailUser)){
                $pid=$row['pids'];
                // echo $pid;
                 $sq2="SELECT prefects.id,prefects.user_id,users.user_id,users.name as uname,users.email as uemail
                 FROM prefects
                 INNER JOIN users ON prefects.id =$pid  and users.user_id=prefects.user_id GROUP BY uemail";
                 $mailU = mysqli_query($db, $sq2);

                 while($r=mysqli_fetch_assoc($mailU)){
                    //   echo $r['uemail'];
                    $mail = new PHPMailer(true);
        $mail->isSMTP();
      
    $mail->Host       = 'smtp.gmail.com';                      
        $mail->SMTPAuth   = true;                                 
        $mail->Username   = 'mhrphp@gmail.com';                      
        $mail->Password   = 'fqyxfmgrcucmjcgx';                            
        $mail->SMTPSecure = 'ssl';            
        $mail->Port       = 465;                                   
 
        $mail->setFrom('mhrphp@gmail.com', 'DSHP');
                               
        $mail->addAddress($r['uemail']);                                 
    
         
    
         
        $mail->isHTML(true);                                 
        $mail->Subject ='Dear '.$r["uname"];
        
        $mail->Body    =  'You have an prefect request <br> Thank You........';
     
        $mail->send();
                 }
 
            }

       header('Location: ' . $_SERVER['HTTP_REFERER']);

             
       
















          $db->close();
              
            

?>