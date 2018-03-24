<?php
	require 'config.php';
?>
<?php
		if(isset($_POST['login']))
		{
			$userName=$_POST['userName'];
			$password=$_POST['password'];
			
			$query="select * from fileuploadtable WHERE username='$userName' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				// valid
				$_SESSION['userName']= $row['userName'];
				//$_SESSION['imglink']= $row['imglink'];
				header('location:loggedin_layout.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>

<?php 
	include_once "login_header.php"; 
?>

<?php 
	include_once "login_footer.php"; 
?>