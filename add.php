<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Add Users</title>
	<style>
      body{
      background-image:url(background.jpg);
      background-size:cover;
      background-attachment: fixed;
      }
  </style>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" placeholder="Nama" name="name"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" placeholder="Jurusan" name="jurusan"></td>
			</tr>
			<tr> 
				<td>Line Id</td>
				<td><input type="text" placeholder="Line Id" name="lineid"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$jurusan = $_POST['jurusan'];
		$lineid = $_POST['lineid'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,jurusan,lineid) VALUES('$name','$jurusan','$lineid')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>