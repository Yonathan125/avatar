

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
    <th>No</th> <th>Foto</th> <th>Nama</th> <th>Alamat</th> <th>Tempat_Tanggal_Lahir</th> <th>Keterangan</th> <th>Update</th>
    </tr> 
	<?php
// Create database connection using config file
include_once("config.php"); 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM Data_Anak ORDER BY id DESC");

    while($user_data = mysqli_fetch_array($result)){
?>
<?       
        echo "<tr>";
        echo "<td>".$user_data['Id']."</td>";
		echo "<td>".$user_data['File']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['Alamat']."</td>";
		echo "<td>".$user_data['Tempat_Tanggal_Lahir']."</td>";
		echo "<td>".$user_data['Keterangan']."</td>";
		echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>