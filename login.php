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
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input name="userName" type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input name="password" type="password"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input name="login" type="submit" value="Submit">        
		<a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>