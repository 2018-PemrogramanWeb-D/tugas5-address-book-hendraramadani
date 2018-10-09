<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8" />   
    <title>List</title>
    <link href="style.css" rel="stylesheet" type="text/css" >
</head>
 
<body>
    <h1 class="tengah">Address Book List</h1><br>
    <a class="button" href="add.php">Add Data Baru</a><br/><br/>
 
    <table width='100%' border=1>
 
    <tr>
        <th>Nama</th> <th>Alamat</th> <th>No. HP</th> <th>Email</th>  <th>Kode Pos</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['address']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";   
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Ubah</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>