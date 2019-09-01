<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];
	$Tempat_Tanggal_Lahir=$_POST['Tempat_Tanggal_Lahir'];
	$Keterangan=$_POST['Keterangan'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET Nama='$Nama',Alamat='$Alamat',Tempat_Tanggal_Lahir='$Tempat_Tanggal_Lahir,'Keterangan=$Keterangan WHERE id=$id");

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
    $id = $user_data['id'];
    $Nama = $user_data['Nama'];
    $Alamat = $user_data['Alamat'];
	$Tempat_Tanggal_Lahir = $user_data['Tempat_Tanggal_Lahir'];
	$Keterangan = $user_data['Keterangan'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">
		<input type="file" name="foto">
		
        <table border="0">
            <tr> 
                <td>No</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value=<?php echo $Alamat;?>></td>
            </tr>
            <tr> 
                <td>Tempat_Tanggal_Lahir</td>
                <td><input type="text" name="Tempat_Tanggal_Lahir" value=<?php echo $Tempat_Tanggal_Lahir;?>></td>
            </tr>
			<tr> 
                <td>Keterangan</td>
                <td><input type="text" name="Keterangan" value=<?php echo $Keterangan;?>></td>
            </tr>
			<tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>