
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

 include "inc/header.php";

?>


  <?php

  include "inc/topbar.php";

?>
  <!-- Main Sidebar Container -->
 
  <?php

  include "inc/menu.php";

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Add New Notice</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
       <div class="row">
        <div class="col-lg-6">
             <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Notice Topic</label>
              <input type="text" name="notic_topic" class="form-control" required="required">
              
            </div>
             <div class="form-group">
              <label>Shift</label>
              <input type="text" name="shift" class="form-control" required="required">
              
            </div>

            <div class="form-group">
              <label>Notice Description</label>
             
              <textarea class="form-control" name="notic_desc" rows="4"></textarea>
              
            </div>
          


           


           
            </div>
             <div class="col-lg-6">
             	  <div class="form-group">
              <label>Notice Department</label>
              <input type="text" name="notic_depart" class="form-control" required="required">
              
            </div>

            
      

            <div class="form-group">
              <label>User Status</label>
              <select name="status" class="form-control">
                
                <option value="0">Inactive</option>
                <option value="1">Active</option>
              </select>
            </div>

            <div class="form-group">
              <label>Notice File</label>
              <input type="file" name="notice_pdf" class="form-control-file">
            </div>

            <div class="form-group">
              
              <input type="submit" name="addNotic" class="btn btn-block btn-primary btn-flat" value="Register Notic">       
            </div>
              </form>
          
          
        </div>

        <!-- right side -->

        <?php

          if (isset($_POST['addNotic'])) {


               

                 // $id                = $_POST['id'];
                 $notic_topic       = $_POST['notic_topic'];
                 $shift             = $_POST['shift'];
                 $notic_desc        = $_POST['notic_desc'];
                  $notic_depart     = $_POST['notic_depart'];
                 // $notice_pdf           = $_POST['notice_pdf'];
                 
                  $status           = $_POST['status'];
                 
                
                 
                 $imageName   = $_FILES['notice_pdf']['name'];
                 $imageSize   = $_FILES['notice_pdf']['size'];
                 
                 $imagetmp    = $_FILES['notice_pdf']['tmp_name'];

                   //change the image name
                  $notice_pdf = rand(0, 999999).$imageName;
                  //upload the image to its own location
                  move_uploaded_file( $imagetmp, "img/information/" . $notice_pdf);

                  $sql = "INSERT INTO notic(notic_topic,shift,notic_desc,notic_depart,status,notice_pdf) VALUES('$notic_topic','$shift','$notic_desc','$notic_depart','$status','$notice_pdf')";
                 
                  $addNotic = mysqli_query($db, $sql);

                 

                  if ($addNotic) {
                    header("Location:managenotic.php");
                  }
                  else{
                    die("Mysqli query failed".mysqli_error($db));
                   
                    }


                  // mail
                  $nmail="select email as uemail,name as uname from users";
                  $addNoticmail = mysqli_query($db, $nmail);
                  while($r=mysqli_fetch_assoc($addNoticmail)){
                    $rr=$r['uemail'];
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
                    $mail->addAddress($rr);                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                     
                
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject ='Dear'.$r['uname'];
                    
                    $mail->Body    =$notic_topic.'<br>'.$notic_desc.'<br> Thank You........';
                    // $mail->AltBody = $_POST["message"].'<a href="https://www.youtube.com/watch?v=nbaXkKJMflg&list=RDUu40qFSaINw&index=21">link</a>';
                
                    $mail->send();
                    // echo 'Message has been sent';

                  }
 


          }




        ?>

        
         
       </div>
      </div>
    </section>
   
  </div>
  
  <?php

  include "inc/footer.php";

?>
  <!-- Control Sidebar -->
  <?php

  include "inc/sidebar.php";

?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <?php

  include "inc/script.php";

?>