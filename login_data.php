<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>login data</title>
	<style type="text/css">
		body {
            font-family: Arial, Helvetica, sans-serif;          
            background-image: url(https://www.digitalplatforms.co.za/wp-content/uploads/2015/11/Website-Design-Background.jpg);
            background-size: cover;
        }
        h1{
			margin: 0;
			margin-left: 45%;
			color: white;
			text-decoration: 2px white underline;
			font-family: Arial, Helvetica, sans-serif;
		}
		.t_data {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 1.5em;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			margin-left: 50px;
		}


		.t_data thead tr {
			background-color: #009879;
			color: white;
			text-align: left;
		}
		.t_data th,
		.t_data td {
			padding: 12px 15px;
		}

		.t_data tbody tr {
			border-bottom: 1px solid #dddddd;
			background-color: white;
		}
		.t_data tbody:nth-of-type(2n) {
			background-color: #f3f3f3;
		}

		.t_data tbody:last-of-type {
			border-bottom: 3px solid #009879;
		}
		.button a{		  
		  border: none;
		  color: white;
		  padding: 10px 30px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		}
		.delete{
			background-color:red; 		  
		}
		.edit{
			background-color:green; 		  
		}
		.back{
			border: 2px solid white;
			padding: 5px;
			float: right;
			background-color: goldenrod;
			text-decoration: none;
			color: white;
			font-weight: bold;
			font-size: 20px;
		}
		.back:hover {
			background: white;
			border: 2px solid goldenrod;
			box-shadow: greenyellow;
			color: magenta;
			transition: all 0.25s;
		}

	</style>
</head>
<body>
	<a class="back" href="login.php">BACK</a>
	<h1>LOGIN DATA</h1>
	<table class="t_data" width="90%">
		<thead>
			<tr>
				<th>Sr.No</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>				
			</tr>
		</thead>
	<?php
		include 'connection.php';
		$sql = "SELECT * from login;";
		$result = mysqli_query($con, $sql);
		$sr=0;
		while ($row = mysqli_fetch_assoc($result)) {  //fetches result from $result and inserts into $row which becomes like array
			
			?><tbody>
				<tr>
					<td>
						<?php echo ++$sr; ?>
					</td>
					<td>
						<?php echo $row['email']; ?>
					</td>
					<td>
						<?php echo $row['password']; ?>
					</td>
					<td>
						<div class="button">
							<button class="edit">
								<a href="edit.php?em=<?php echo $row['email'];?>&
									psw=<?php echo $row['password'];?>">Edit </a>
							</button>							
													
							<button class="delete">
								<a href="delete.php?id=<?php echo $row['email'];?>"onclick="return confirm('Are You Sure')">Delete </a>
							</button>
						
						</div>
					</td>
				</tr>
			</tbody>
		<?php
		}
		?>

	</table>

</body>
</html>