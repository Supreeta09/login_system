<?php
	include 'connection.php';
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['psw'];

		$query="insert into login(email,password)values('$email','$password');";
		$result=mysqli_query($con,$query);
		if($result)
		{
			?>
			<script type="text/javascript">
            alert("Registered successfully")
        	</script>
        	<?php
        	header("location:login_data.php");
		}
		else
		{
			?>
			<script type="text/javascript">
            alert("Login successfull")
        	</script>
        <?php
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACT FORM</title>
	<link rel="stylesheet" type="text/css" href="login.css?<?php echo time();?>">
</head>
<body>
	<div class="login">
		<img src="https://i.postimg.cc/zDyt7KCv/a1.jpg" class="img">
		<h2>Contact Form</h2>
		<form action="" method="POST">
			<p>Email</p>
			<input type="text" name="email" placeholder="enter your email">
			<p>Password</p>
			<input type="Password" name="psw" placeholder="enter your password">
			<input type="submit" name="submit" value="Sign in">
		</form>
	</div>
</body>
</html>