<?php  include('../backend/auth-guard-student.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DIU | Modern CV</title>
	<link rel="stylesheet" href="modern-cv.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style type="text/css">
/*	body{
		background: rgb(204,204,204,.6);
	}*/
	.toCenter {
	 width: 100%;
	 text-align: center;
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
 .grid-container {
	 margin: auto;
	 display: grid;
	 grid-template-columns: 0.33fr 1fr;
	 width: 250mm;
	 min-height: 322mm;
	 /*overflow: hidden;*/
	 /*box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);*/
	 /*max-height: 1060px;*/
}
 .grid-container .zone-1 {
	 padding: 40px 20px;
	 padding-left: 15px;
	 background: #d1d1d1;
	 width: 100%;
	 color: #313131;
}
 .grid-container .zone-1 .profile {
	 display: inline-flex;
	 margin-bottom: 5px;
	 margin-left: 10px;
	 width: 220px;
	 height: 220px;
	 /*border-radius: 50%;*/
	 background-position: center top;
	 background-size: 200%;
	 border: 2px solid #2c2b29;
}
 .grid-container .zone-1 .contact-box {
	 margin-top: 10px;
}
 .grid-container .zone-1 .contact-box > * {
	 width: 100%;
	 display: grid;
	 grid-template-columns: 0.3fr 1fr;
	 margin-top: 25px;
	 align-items: center;
}
 .grid-container .zone-1 .contact-box > * i {
	 font-size: 1.2em;
}
 .grid-container .zone-1 .contact-box > * .text {
	 display: inline-flex;
	 word-break: break-all;
	 font-size: 1.2em;
}
 .grid-container .zone-1 .personal-box {
	 margin-top: 35px;
}
 .grid-container .zone-1 .personal-box > *:not(.title) {
	 margin: 25px 0px;
	 grid-template-columns: 0.55fr 1fr;
	 display: grid;
}
 .grid-container .zone-1 .personal-box .progress .dot {
	 display: inline-block;
	 width: 10px;
	 height: 10px;
	 background-color: #313131;
	 border-radius: 50%;
	 margin-left: 10px;
}
 .grid-container .zone-1 .personal-box .progress .dot.active {
	 background-color: #9db858;
}
 .grid-container .zone-1 .hobbies-box {
	 margin-top: 35px;
}
 .grid-container .zone-1 .hobbies-box .logo {
	 margin: 10px 0px;
	 display: grid;
	 grid-template: 1fr 1fr / 1fr 1fr;
	 font-size: 2.8em;
	 grid-row-gap: 15px;
}
 .grid-container .zone-2 {
	 background: #2c2b29;
	 padding: 40px 20px;
	 padding-right: 75px;
	 color: #b5b5b4;
}
 .grid-container .zone-2 .headTitle {
	 font-size: 2.1em;
	 color: #9db858;
}
 .grid-container .zone-2 .headTitle h1 {
	 font-weight: 400 !important;
}
 .grid-container .zone-2 .subTitle h1 {
	 font-weight: 400 !important;
}
 .grid-container .zone-2 .box {
	 display: inline-block;
	 padding: 2px 70px 2px 20px;
	 margin-left: -20px;
	 margin-top: 35px;
	 background: #9db858;
	 color: #2c2b29;
}
 .grid-container .zone-2 .group-1 .desc {
	 margin-top: 15px;
	 line-height: 1.5;
}
 .grid-container .zone-2 .group-2 .desc {
	 margin-top: 15px;
	 margin-left: 20px;
}
 .grid-container .zone-2 .group-2 .desc ul {
	 position: relative;
	 margin-top: 20px;
	 margin-left: 5px;
}
 .grid-container .zone-2 .group-2 .desc ul:before {
	 content: "";
	 position: absolute;
	 top: 12px;
	 left: -22px;
	 width: 10px;
	 height: 10px;
	 border-radius: 50%;
	 background: #9db858;
}
 .grid-container .zone-2 .group-2 .desc ul li {
	 list-style-type: none;
	 position: relative;
}
 .grid-container .zone-2 .group-2 .desc ul li:before {
	 content: "";
	 position: absolute;
	 top: 12px;
	 left: -18px;
	 height: 60px;
	 border-left: 2px solid #9db858;
}
 .grid-container .zone-2 .group-2 .desc ul:last-of-type li:before {
	 content: none;
}
 .grid-container .zone-2 .group-2 .desc ul li div:last-of-type {
	 color: #9db858;
	 font-weight: bold;
}
 .grid-container .zone-2 .group-3 .desc {
	 margin-top: 15px;
	 margin-left: 20px;
}
 .grid-container .zone-2 .group-3 .desc ul {
	 position: relative;
	 margin-top: 20px;
	 margin-left: 5px;
}
 .grid-container .zone-2 .group-3 .desc ul:before {
	 content: "";
	 position: absolute;
	 top: 30px;
	 left: -22px;
	 width: 10px;
	 height: 10px;
	 border-radius: 50%;
	 background: #9db858;
}
 .grid-container .zone-2 .group-3 .desc ul li {
	 list-style-type: none;
	 position: relative;
}
 .grid-container .zone-2 .group-3 .desc ul li:before {
	 content: "";
	 position: absolute;
	 top: 30px;
	 left: -18px;
	 height: 100px;
	 border-left: 2px solid #9db858;
}
 .grid-container .zone-2 .group-3 .desc ul:last-of-type li:before {
	 content: none;
}
 .grid-container .zone-2 .group-3 .desc ul li div:nth-child(2) {
	 color: #9db858;
	 font-weight: bold;
}
	</style>

</head>
<body>
	


	<!-- You can print if you see this pen in debug mode -->

	

	<div class="grid-container" >
		<div class="zone-1">
			<div class="toCenter">
				<div class="profile">
					<img src="<?php echo $_SESSION['photo']; ?>">
				</div>
			</div>
			<div class="contact-box">
				<div class="title">
					<h2>Contact</h2>
				</div>
				<div class="call"><i class="fas fa-phone-alt"></i>
					<div class="text"><?php echo $_SESSION['phone']; ?></div>
				</div>
				<div class="email"><i class="fas fa-envelope"></i>
					<div class="text"><?php echo $_SESSION['email']; ?></div>
				</div>
				<div class="home"><i class="fas fa-home"></i>
					<div class="text"><?php echo $_SESSION['address']; ?></div>
				</div>
				<?php
					if ($_SESSION['website']) {
						echo"<div class='website'><i class='fas fa-globe'></i>
							<div class='text'>".$_SESSION['website']."</div>
						</div>";
					}	
				?>
			</div>
			<div class="personal-box">
				<div class="title">
					<h2>Skills</h2>
				</div>
				<?php  
					if ($_SESSION['skills_title']) {
					    for ($i = 0; $i < count($_SESSION['skills_title']); $i++)
					    {
					        if ($_SESSION['skills_ratting'][$i]==5) {
					        	echo"<div class='skill-1'><p>".$_SESSION['skills_title'][$i]."</p><div class='progress'><div class='dot active'></div><div class='dot active'></div><div class='dot active'></div><div class='dot active'></div><div class='dot active'></div></div></div>";
					        }
					        if ($_SESSION['skills_ratting'][$i]==4) {
					        	echo"<div class='skill-1'><p>".$_SESSION['skills_title'][$i]."</p><div class='progress'><div class='dot active'></div><div class='dot active'></div><div class='dot active'></div><div class='dot active'></div><div class='dot'></div></div></div>";
					        }
					        if ($_SESSION['skills_ratting'][$i]==3) {
					        	echo"<div class='skill-1'><p>".$_SESSION['skills_title'][$i]."</p><div class='progress'><div class='dot active'></div><div class='dot active'></div><div class='dot active'></div><div class='dot'></div><div class='dot'></div></div></div>";
					        }
					        if ($_SESSION['skills_ratting'][$i]==2) {
					        	echo"<div class='skill-1'><p>".$_SESSION['skills_title'][$i]."</p><div class='progress'><div class='dot active'></div><div class='dot active'></div><div class='dot'></div><div class='dot'></div><div class='dot'></div></div></div>";
					        }
					        if ($_SESSION['skills_ratting'][$i]==1) {
					        	echo"<div class='skill-1'><p>".$_SESSION['skills_title'][$i]."</p><div class='progress'><div class='dot></div><div class='dot active'></div><div class='dot'></div><div class='dot'></div><div class='dot'></div></div></div>";
					        }
					        
					    }
					}
				?>
				<!-- <div class="title">
					<h2>Language</h2>
					<div class='skill-1'><p>Bengali</p></div>


				</div> -->
			</div>
		</div>
		<div class="zone-2">
			<div class="headTitle">
				<h3><?php echo $_SESSION['name']; ?></h3>
			</div>
			<div class="subTitle">
				<h1><?php echo $_SESSION['profession_title']; ?><h1>
			</div>
			<div class="group-1">
				<div class="title">
					<div class="box">
						<h2>About Me</h2>
					</div>
				</div>
				<div class="desc"><?php echo $_SESSION['about_me']; ?></div>
			</div>
			<div class="group-3">
				<?php
				if ($_SESSION['exp_title']) { echo"<div class='title'><div class='box'><h2>Experience</h2></div></div>";}
				?>
				<div class="desc">
					<?php  
						if ($_SESSION['exp_title']) {
						    for ($i = 0; $i < count($_SESSION['exp_title']); $i++)
						    {
						        
						        echo"<ul><li><div class='msg-1'>".$_SESSION['exp_title'][$i]." | ".$_SESSION['exp_from'][$i]."</div><div class='msg-2'>".$_SESSION['exp_com_name'][$i]."</div><div style='white-space: pre-wrap;' class='msg-3'>".$_SESSION['exp_desc'][$i]."</div></li></ul>";   
						    }
						}
					?>
				</div>
			</div>
			<div class="group-3">
				<div class="title">
					<div class="box">
						<h2>Education</h2>
					</div>
				</div>
				<div class="desc">
					<?php  
						if ($_SESSION['edu_title']) {
						    for ($i = 0; $i < count($_SESSION['edu_title']); $i++)
						    {
						        
						        echo"<ul><li><div class='msg-1'>".$_SESSION['edu_title'][$i]."</div><div class='msg-2'>".$_SESSION['edu_ins_name'][$i]."</div><div class='msg-3'>Passing Year: ".$_SESSION['edu_passing_year'][$i]."</div><div class='msg-3'>Result: ".$_SESSION['edu_result'][$i]."</div></li></ul>";   
						    }
						}
					?>
				</div>
			</div>

			<?php  
			if ($_SESSION['reference']) {echo"<div class='group-3'><div class='title'><div class='box'><h2>Reference</h2></div></div><div style='white-space: pre-wrap;' class='desc'><p>".$_SESSION['reference']."</p></div></div>";}
			?>


		</div>
			
	</div>
	<center><button type="button" style="height:50px; padding: 10px; width: 250px; opacity: 0.9; font-weight:bold;" class="printPageButton" id="printPageButton" onclick="window.print()">Download As PDF</button></center>
	

</body>
</html>