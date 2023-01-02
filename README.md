# daffodil Project

Step 1:
Copy/Clone/Download the projects file.

Step 2:
Paste all files in your XAMPP's htdocs folder.

Step 3:
Get the sql file from the docs folder. And go to your PhpMyadmin.Create a DB name daffodil. And import the sql file.

Step 4:
Change backend/config.php file accourding to your server userneme,password,dbname and domain.  Line no 3-6.

Step 5:
Change admin/inc/db.php file accourding to your server userneme,password,dbname and domain.  Line no 3.

Step 6:
Change student/inc/db.php file accourding to your server userneme,password,dbname and domain.  Line no 3.

Now you are ready to run the project.

# Note:

If you want to use only DIU email during sign-up
Go to sign-up.php
Replace this code on line no 71. The Code: pattern=".+@diu.edu.bd"
<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your academic email address" pattern=".+@diu.edu.bd" required>

To disable email varification during sign-up.
Go to backend/sign-up.php Line no 11.
Make status=1.


To Change the email address where you get the message.
Go to message.php
Change receiver email address on line no 13. 
Also change sender email address according to your live server email address.