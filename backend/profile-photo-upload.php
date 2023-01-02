<?php

      include('config.php');

      session_start();
      $user_id = $_SESSION['user_id'];
      $img = $_POST['image'];
      $img = str_replace('data:image/png;base64,', '', $img);
      $img = str_replace(' ', '+', $img);
      $data = base64_decode($img);
      $image_name = "user-".$user_id."-". uniqid() .'.png';
      $file = "../student/img/".$image_name;
      $success = file_put_contents($file, $data) or die('no');

      $sql = "UPDATE users SET photo='$file' WHERE user_id ='$user_id' ";
                    
      $updatePhoto = mysqli_query($db, $sql);

      if ($updatePhoto) {
        $db->close();
      }
      else{
        die("Mysqli query failed");
                   
      }


?> 