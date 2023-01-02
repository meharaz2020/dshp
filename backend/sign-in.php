<?php
$Send='';
if(isset($_POST['login'])){


    
    include('config.php');
           $emailOrId = mysqli_real_escape_string($db,$_POST["emailOrId"]); 

           $password = mysqli_real_escape_string($db,$_POST["password"]);  
           $query = "SELECT * FROM users WHERE (email='$emailOrId' or student_id='$emailOrId') and status=1"; 
 
           $result = mysqli_query($db,$query); 
           
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          
                            session_start();
                            $_SESSION['user_id']=$row['user_id'];
                            $_SESSION['role']=$row['role'];
                            if ($row['role']=='STUDENT') {
                              header("Location:../student/dashboard.php");
                            }
                            elseif ($row['role']=='ADMIN') {
                              header("Location:../admin/dashboard.php");
                            }
                            
                     }  
                     else  
                     {  
                          $Send="Incorrect Password";
                          header("Location:../sign-in.php?msg=$Send");
                     }  
                }  
           }
           else{
               $Send="Student Id or email is Invalid";
               header("Location:../sign-in.php?msg=$Send");
           }
      
      
 echo "Error: " . $query . "<br>" . $db->error;
 }


?> 