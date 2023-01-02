<div class="modal fade" id="profileeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
      <form action="../backend/edit-student-profile.php" method="POST" enctype="multipart/form-data">
       <div class="form-group">
         <label>Full Name</label>
         <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
         
       </div>
        <div class="form-group">
         <label>Student Id</label>
         <input type="text" name="student_id" class="form-control"  value="<?php echo $student_id; ?>">
         
       </div>

       <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" class="form-control"  value="<?php echo $email; ?>">
         
       </div>
      <!--  <div class="form-group">
         <label>Faculty Id</label>
         <input type="text" name="faculty_id" class="form-control" required="required" value="<?php echo $faculty_id; ?>">
         
       </div> -->

       <div class="form-group">
         <label>Phone No.</label>
         <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" >
         
       </div>
        <div class="form-group">
         <label>Department</label>
         <input type="text" name="department" class="form-control" value="<?php echo $department; ?>" >
         
       </div>

          
        <div class="form-group">
         <label>Batch</label>
         <input type="text" name="batch" class="form-control" value="<?php echo $batch; ?>" >
         
       </div>

         <div class="form-group">
         <label>Shift</label>
         <input type="text" name="shift" class="form-control" value="<?php echo $shift; ?>" >
         
       </div>
      


       <div class="form-group">
         <label>Gender</label>
         <select name="gender" class="form-control">
           
           <option value="0" <?php if($gender == 0){echo 'selected';} ?>>Male</option>
           <option value="1" <?php if($gender == 1){echo 'selected';} ?>>Female</option>
         </select>
       </div>
        <div class="form-group">
         <label>Campus</label>
         <input type="text" name="campus" class="form-control" value="<?php echo $campus; ?>" >
         
       </div> 
      <div class="form-group">
         <label>Website</label>
         <input type="text" name="website" class="form-control" value="<?php echo $website; ?>" >
         
       </div> 
       <div class="form-group">
         <label>Description</label>
         <textarea class="form-control" name="description" rows="4"value="" ><?php echo $description; ?></textarea>
         
       </div>
       <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" class="form-control" minlength="8">
          
        </div> 

       <div class="form-group">
         <input type="hidden" name="updateUserId" value="<?php echo $user_id ;?>">
         <input type="submit" name="updateUser" class="btn btn-block btn-primary btn-flat" value="Save Change">       
       </div>
         </form>
      </div>
    </div>
  </div>
</div>