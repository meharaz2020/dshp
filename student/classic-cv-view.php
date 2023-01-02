<?php  include('../backend/auth-guard-student.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DIU | Classic CV</title>
  <link rel="stylesheet" href="classic-cv.css">
  <style type="text/css">
    body {background: white; font-size:12px; font-family:Calibri; }
    .page { width:240mm; height:auto; margin:0 auto; background:white; padding:50px; box-sizing:border-box; margin-bottom: 18.89px; }
  </style>
</head>
<body>
  <div class="page">
    <div style="float: right;">
      <img style="height:110px;" src="<?php echo $_SESSION['photo']; ?>">
    </div>
  <table>
  <tr>
    <td style="font-size:20px"><?php echo $_SESSION['name']; ?></td>
   </tr>
   <tr>
      <td style="font-size:16px"><?php echo $_SESSION['profession_title']; ?></td>
   </tr>
   <tr>
      <td>Email: <?php echo $_SESSION['email']; ?></td>
   </tr>
   <tr>
    <td>Phone: <?php echo $_SESSION['phone']; ?></td>
    </tr>
    <tr>
    <td><?php echo "Website: ".$_SESSION['website'].""; ?></td>
    </tr>
    <tr>
    <td><?php echo "Address: ".$_SESSION['address'].""; ?></td>
    </tr>
    </table>
    
    <table width="100%" style="margin-top:15px;">
      <tr style="background:#CCC; text-align:center;">
        <td  colspan="2">CAREER OBJECTIVE</td>
      </tr>
      <tr>
        <td style="padding:7px;"><?php echo $_SESSION['about_me']; ?></td>
      </tr>
      
    </table>
    
    
    <table width="100%" style="margin-top:15px;">
      <?php
        if ($_SESSION['exp_title']) { echo"<tr style='background:#CCC; text-align:center;'><td  colspan='2'>EXPERIENCE DETAILS</td></tr>";}
        ?>

      <?php  
            if ($_SESSION['exp_title']) {
                for ($i = 0; $i < count($_SESSION['exp_title']); $i++)
                {
                echo"<tr><td><br></td></tr><tr><td style='font-size:14px;'><b>".$_SESSION['exp_title'][$i]."</b> (".$_SESSION['exp_from'][$i].") </td></tr><tr><td><b>".$_SESSION['exp_com_name'][$i]."</b></td></tr><tr><td style='white-space: pre-wrap;'>Description:: ".$_SESSION['exp_desc'][$i]."</td></tr>";
              }
            }
      ?>
      </table>
      <table width="100%" style="margin-top:15px;">
        <tr style="background:#CCC; text-align:center;">
          <td  colspan="2">TECHNICAL SKILLS</td>
        </tr>
        <?php  
          if ($_SESSION['skills_title']) {
              for ($i = 0; $i < count($_SESSION['skills_title']); $i++)
              {
                echo"<tr><td width=''><b>".$_SESSION['skills_title'][$i].":</b></td><td width=''>".$_SESSION['skills_ratting'][$i]."</td></tr>";

              }
            }
        ?>
      </table>
      <table width="100%" style="margin-top:15px;">
       <tr style="background:#CCC; text-align:center;">
         <td  colspan="2">ACADEMIC DETAILS</td>
       </tr>
       <?php  
         if ($_SESSION['edu_title']) {
             for ($i = 0; $i < count($_SESSION['edu_title']); $i++)
             {
               echo"<tr><td><b>".$_SESSION['edu_title'][$i]."</b></td><td></td></tr><tr><td><b>Institute:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['edu_ins_name'][$i]."</td></tr><tr><td><b>Passing Year:</b>&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['edu_passing_year'][$i]."</td></tr><tr><td><b>Result:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>".$_SESSION['edu_result'][$i]."</td></tr><tr><td><br></td></tr>";

             }
           }
       ?>
      </table>
      <table width='100%' style='margin-top:15px;'>
      <?php 

        if ($_SESSION['language_title']) {
           echo"<tr style='background:#CCC; text-align:center;'><td colspan='2'>LANGUAGE</td></tr>";
          for ($i = 0; $i < count($_SESSION['language_title']); $i++)
             {
              echo "<tr><td><div style='white-space: pre-wrap;'>".$_SESSION['language_title'][$i]." : ".$_SESSION['language_desc'][$i]."</div></td></tr>";
          }
        }
      ?>
      </table>
      <?php 
        if ($_SESSION['personal_info']) {
          echo "<table width='100%' style='margin-top:15px;'><tr style='background:#CCC; text-align:center;'><td  colspan='2'>PERSONAL INFO</td></tr><tr><td><div style='white-space: pre-wrap;'>".$_SESSION['personal_info']."</div></td></tr></table>";
        }
      ?>
      <?php 
        if ($_SESSION['reference']) {
          echo "<table width='100%' style='margin-top:15px;'><tr style='background:#CCC; text-align:center;'><td  colspan='2'>REFERENCE</td></tr><tr><td><div style='white-space: pre-wrap;'>".$_SESSION['reference']."</div></td></tr></table>";
        }
      ?>
      <?php 
        if ($_SESSION['signature_image']) {
          echo "<br><img style='width:120px;' src='img/".$_SESSION['signature_image']."'><br>...............................";
        }
      ?>
  </div> <!-- End of page -->


  <!-- <div class="page">     
    

  </div> -->


  <center><button type="button" style="height:50px; padding: 10px; width: 250px; opacity: 0.9; font-weight:bold;" class="printPageButton" id="printPageButton" onclick="window.print()">Download As PDF</button></center>

</body>
</html>