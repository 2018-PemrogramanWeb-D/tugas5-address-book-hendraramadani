<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$jurusan=$_POST['jurusan'];
	$lineid=$_POST['lineid'];
	
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',jurusan='$jurusan',lineid='$lineid' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$jurusan = $user_data['jurusan'];
	$lineid = $user_data['lineid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />	
	<title>Edit User Data</title>
	<style>
      body{
      background-image:url(background.jpg);
      background-size:cover;
      background-attachment: fixed;
      }
  	</style>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="lineid" value=<?php echo $lineid;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>