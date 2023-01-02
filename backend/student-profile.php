<?php
  include('config.php');

  $user_id = $_SESSION['user_id'];

  $sql = "SELECT * FROM users WHERE user_id = $user_id and role ='STUDENT' and status=1";
  $user = mysqli_query($db, $sql);
  while( $row = mysqli_fetch_assoc($user) ){
    $name = $row['name'];
    $student_id = $row['student_id'];
    $email = $row['email'];
    $phone = $row['phone'];
    $role = $row['role'];
    $department = $row['department'];
    $batch = $row['batch'];
    $shift = $row['shift'];
    $gender = $row['gender'];
    $campus = $row['campus'];
    $photo = $row['photo'];
    $description = $row['description'];
    $website = $row['website'];
    $status= $row['status'];

  }
?>