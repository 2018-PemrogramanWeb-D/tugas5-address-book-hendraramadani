<?php
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pos=$_POST['pos'];
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',address='$address',mobile='$mobile',email='$email',pos='$pos' WHERE id=$id");
	header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$address = $user_data['address'];
	$mobile = $user_data['mobile'];
	$email = $user_data['email'];
	$pos = $user_data['pos'];
}
?>


<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8" />	
	<title>Update</title>
	<link href="style.css" rel="stylesheet" type="text/css" >
</head>
 
<body>
<h1 class="tengah"> Address Book Edit</h1><br>
	<form name="update_user" method="post" action="edit.php">
		<input class="textbox" type="text" placeholder="Nama" name="name" value=<?php echo $name;?>><br>
		<input class="textbox" type="text" placeholder="Alamat" name="address" value=<?php echo $address;?>><br>
		<input class="textbox" type="numer" placeholder="No. HP" name="mobile" value=<?php echo $mobile;?>><br>
		<input class="textbox" type="text" placeholder="Email" name="email" value=<?php echo $email;?>><br>
		<input class="textbox" type="number" placeholder="Kode Pos" name="pos" value=<?php echo $pos;?>><br>
		<input type="hidden" name="id" value=<?php echo $_GET['id'];?>><br>
		<input class="buttonupdate" type="submit" name="update" value="Update"><br><br>
	</form>
	<a class="back" href="index.php">Back</a><br>
</body>
</html>