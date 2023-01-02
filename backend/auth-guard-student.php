<?php  
  include('config.php');
  if(!isset($_SESSION)) { 
  session_start(); 
} 
  
  if(!isset($_SESSION['user_id'])){
      header("location:../sign-in.php");
   }
   else{
    if ($_SESSION['role'] !='STUDENT') {
        header("location:../sign-in.php");
    }
   }  
?>