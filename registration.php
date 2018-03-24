<?php
	require 'config.php';
?>

<?php 
	error_reporting(0);
?>



<?php
			if(isset($_POST['submit_btn']))
			{
				
				$name =$_POST['name'];
				$email = $_POST['email'];
				$userName = $_POST['userName'];
				$password = $_POST['password'];
				$confirmPassword = $_POST['confirmPassword'];
				$gender = $_POST['gender'];
				$yy = $_POST['yy'];
				$mm = $_POST['mm'];
				$dd = $_POST['dd'];
			
                 
				
				
				
				if($password==$confirmPassword)
				{
					
					$query= "select * from fileuploadtable WHERE username='$userName'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					
					
					
					
					else
					{
							
						$query= "insert into fileuploadtable values('$name','$email','$userName','$password','$gender','$yy-$mm-$dd')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}	
					
					
				}
				else
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
				}
				
				
				
				
			}
			
			
?>



<?php 
	require "registration_header.php";
?>

<?php 
	require "registration_footer.php";
?>