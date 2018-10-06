<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Anak Kosan</title> 
	<link href="css/style.css" rel="stylesheet" type="text/css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="JQ.js"></script>
    <style>
      body{
      background-image:url(background.jpg);
      background-size:cover;
      background-attachment: fixed;
      }
  </style>
</head>

<body>

	<div class="content">
		<div class="box">
			<br>
				<p class="txtaja">Nama : Hendra Ramadani
					<br>NRP : 05111740000055
					<br>Kelas : PWEB D
				</p>
				<br>
				<p1 class="klikdisini"> Klik button dibawah!!</p1> 
				<br>
				<button class="button">List Anak Kosan</button>
				<br>
				<a class="klikdisini" href="add.php">Add New User</a><br/>
				<br/>
				<input id="myInput" type="text" placeholder="Search" class="sch">
				<br><br>
				<table>
				  <thead>
				    <tr>
				      <th>Nama</th>
				      <th>Jurusan</th>
				      <th>Line Id</th>
				      <th>Update</th>
				    </tr>
				  </thead>
				  <tbody id="myTable">
				        <?php  
					    while($user_data = mysqli_fetch_array($result)) {         
					        echo "<tr>";
					        echo "<td>".$user_data['name']."</td>";
					        echo "<td>".$user_data['jurusan']."</td>";
					        echo "<td>".$user_data['lineid']."</td>";    
					        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";       
					    }
					    ?>
				  </tbody>
				</table>
			</div>
		</div>
	</body>
</html>
