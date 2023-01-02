<?php include "inc/header.php"; ?>

<?php include "inc/topbar.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "inc/menu.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Modern CV</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modern CV</li>
              <li class="breadcrumb-item"><a href="modern-cv-view.php">Preview</a></li>
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
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-sm-6">
              <h5>Kindly Fill up this fields to generate your CV</h5>
              <hr>
        			<form method="POST" action="../backend/cv.php">
        			   <div class="form-group">
        			    <label for="exampleInputProffesion">Profession Title *</label>
        			    <input type="text" name="profession_title" class="form-control" id="exampleInputProffesion" placeholder="Exm: Software Engineer" maxlength="200" required>
        			  </div>
                <div class="form-group">
                  <label for="exampleInputAddress">Address *</label>
                  <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Your Current Address" required>
                </div>
        			  <div class="form-group">
        			    <label for="exampleInputAboutMe">About Me *</label>
        			    <textarea name="about_me" class="form-control" id="exampleInputAboutMe" placeholder="Short Description about yourself"required></textarea> 
        			  </div>
        			  <h5>Experiences (Optional)</h5>
        			  <div class="field_wrapper_exp">
        			            <div class="form-group">
        			              <a href="javascript:void(0);" class="add_button_exp" style=" margin-top: -30px;" title="Add field">Add New Experience</a>
        			            </div>
        			          </div> 
        			  <script type="text/javascript">
        			  $(document).ready(function(){
        			      var x = 1;
        			      var maxField = 10; //Input fields increment limitation
        			      var addButton = $('.add_button_exp'); //Add button selector
        			      var wrapper = $('.field_wrapper_exp'); //Input field wrapper
        			      var fieldHTML = "<div><a style='float: right; margin-top:0px; color:red;' href='javascript:void(0);' class='remove_button'>Remove</a><div class='form-group'><label>Job Title *</label><input type='text' name='exp_title[]' class='form-control' placeholder='Exm:Juniour Software Engineer'></div><div class='form-group'><label>From *</label><input class='form-control' name='exp_from[]' placeholder='Exm: 2018-Present'></div><div class='form-group'><label>Company Name *</label><input class='form-control' name='exp_com_name[]' placeholder='Exm: Hilinkz Ltd'></div><div class='form-group'><label>Short Description *</label><textarea class='form-control' name='exp_desc[]' placeholder='Your responsibility' row='3'></textarea></div><hr></div>"; //New input field html 
        			       //Initial field counter is 1
        			      
        			      //Once add button is clicked
        			      $(addButton).click(function(){
        			          //Check maximum number of input fields
        			          if(x < maxField){ 
        			              x++; //Increment field counter
        			              $(wrapper).append(fieldHTML); //Add field html
        			          }
        			      });
        			      
        			      //Once remove button is clicked
        			      $(wrapper).on('click', '.remove_button', function(e){
        			          e.preventDefault();
        			          $(this).parent('div').remove(); //Remove field html
        			          x--; //Decrement field counter

        			      });
        			  });
        			  </script>

        			  <h5>Education</h5>
        			  <div class="field_wrapper_edu">
        			            <div class="form-group">
        			              <a href="javascript:void(0);" class="add_button_edu" style=" margin-top: -30px;" title="Add field">Add New Education</a>
        			            </div>
        			          </div> 
        			  <script type="text/javascript">
        			  $(document).ready(function(){
        			      var x = 1;
        			      var maxField = 10; //Input fields increment limitation
        			      var addButton = $('.add_button_edu'); //Add button selector
        			      var wrapper = $('.field_wrapper_edu'); //Input field wrapper
        			      var fieldHTML = "<div><a style='float: right; margin-top:0px; color:red;' href='javascript:void(0);' class='remove_button_edu'>Remove</a><div class='form-group'><label>Title *</label><input type='text' name='edu_title[]' class='form-control' placeholder='Exm:B.Sc in CSE'> </div><div class='form-group'><label>Institute Name *</label><input type='text' class='form-control' name='edu_ins_name[]' placeholder='Exm: Daffodil International University'></div><div class='form-group'><label>Passing Year *</label><input type='text' class='form-control' name='edu_passing_year[]' placeholder='Exm:2015'></div><div class='form-group'><label>Result *</label><input type='text' class='form-control' name='edu_result[]' placeholder='GPA:5.00 out og 5.00'></div><hr></div>"; //New input field html 
        			       //Initial field counter is 1
        			      
        			      //Once add button is clicked
        			      $(addButton).click(function(){
        			          //Check maximum number of input fields
        			          if(x < maxField){ 
        			              x++; //Increment field counter
        			              $(wrapper).append(fieldHTML); //Add field html
        			          }
        			      });
        			      
        			      //Once remove button is clicked
        			      $(wrapper).on('click', '.remove_button_edu', function(e){
        			          e.preventDefault();
        			          $(this).parent('div').remove(); //Remove field html
        			          x--; //Decrement field counter

        			      });
        			  });
        			  </script>

        			  <h5>Skills</h5>
        			  <div class="field_wrapper_skills">
        			            <div class="form-group">
        			              <a href="javascript:void(0);" class="add_button_skills" style=" margin-top: -30px;" title="Add field">Add New Skills</a>
        			            </div>
        			          </div> 
        			  <script type="text/javascript">
        			  $(document).ready(function(){
        			      var x = 1;
        			      var maxField = 10; //Input fields increment limitation
        			      var addButton = $('.add_button_skills'); //Add button selector
        			      var wrapper = $('.field_wrapper_skills'); //Input field wrapper
        			      var fieldHTML = "<div><a style='float: right; margin-top:0px; color:red;' href='javascript:void(0);' class='remove_button_skills'>Remove</a><div class='form-group'><label>Title *</label><input type='text' name='skills_title[]' class='form-control' placeholder='Exm:Java'> </div><div class='form-group'><label>Ratting *</label><input type='number' class='form-control' name='skills_ratting[]' placeholder='Exm:Rate out of 5' min='1' max='5'></div><hr></div>"; //New input field html 
        			       //Initial field counter is 1
        			      
        			      //Once add button is clicked
        			      $(addButton).click(function(){
        			          //Check maximum number of input fields
        			          if(x < maxField){ 
        			              x++; //Increment field counter
        			              $(wrapper).append(fieldHTML); //Add field html
        			          }
        			      });
        			      
        			      //Once remove button is clicked
        			      $(wrapper).on('click', '.remove_button_skills', function(e){
        			          e.preventDefault();
        			          $(this).parent('div').remove(); //Remove field html
        			          x--; //Decrement field counter

        			      });
        			  });
        			  </script>
                <div class="form-group">
                  <label for="exampleInputReference">Reference</label>
                  <textarea name="reference" class="form-control" id="exampleInputReference" placeholder="Short Description about reference"></textarea> 
                </div>


        			  
        			  <hr>
        			  

        			  <br>
        			  <button type="submit" class="btn btn-primary" name="submit_modern">Submit</button>
        			</form>
              <br>
        			
        		</div>
        		<div class="col-sm-6">
              <h5 style="margin-left: 25px;">Example</h5>
        			<center><img style="width: 90%;" src="modern-cv1.png"></center>	
        		</div>

        		
        	</div>
          
          
        </div>
         
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
