<?php
	include 'connection.php';
	$pn=$_GET['em'];
	$sa=$_GET['psw']; 
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
			<input type="text" name="email" placeholder="<?php echo $pn ?>">
			<p>Password</p>
			<input type="Password" name="psw" placeholder="<?php echo $sa ?>">
			<input type="submit" name="submit" value="Update">
		</form>
	</div>
</body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        $email=$_POST['email'];
        $password=$_POST['psw'];

        $updatequery="Update login set email='$email', password='$password' where email='$pn' and password='$sa'";
        $res=mysqli_query($con,$updatequery);

       if($res){
            ?>
            <script type="text/javascript">
                alert("Updated successfully")
            </script>
            <?php
        } 
        else
        {
            ?>
            <script type="text/javascript">
                alert("Failed to update")
            </script>
            <?php
        }
       header('location:login_data.php');
    }