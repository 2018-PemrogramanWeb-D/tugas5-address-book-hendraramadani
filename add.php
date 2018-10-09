<!doctype html>
<html lang="en"> 
<head>
	<meta charset="UTF-8" />
	<title>Add</title>
	<link href="style.css" rel="stylesheet" type="text/css" >
</head>
 
<body>
	<h1 class="tengah">Address Book Add</h1><br>
	<form action="add.php" method="post" name="form1">
		<input class="textbox" type="text" name="name" placeholder="Nama"><br>
		<input class="textbox" type="text" name="address" placeholder="Alamat"><br>
		<input class="textbox" type="email" name="email" placeholder="Email"><br>
		<input class="textbox" type="number" name="mobile" placeholder="No. HP"><br>
		<input class="textbox" type="number" name="pos" placeholder="Kode Pos"><br><br>
		<input class="buttonadd" type="submit" name="Submit" value="Add"><br>
	</form>
	<br>
	<a class="back" href="index.php">Back</a>
	
	<?php
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$pos = $_POST['pos'];
		
		include_once("config.php");
		$result = mysqli_query($mysqli, "INSERT INTO users(name,address,mobile,email,pos) VALUES('$name','$address','$mobile','$email','$pos')");
		echo "    Data baru ditambahkan!";
	}
	?>
</body>
</html>