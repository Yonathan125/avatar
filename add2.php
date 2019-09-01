<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="login.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1" enctype="multipart/form-data">
		<input type="file" name="Foto">
        <table width="25%" border="0">
            <tr> 
                <td>No</td>
                <td><input type="text" name="Id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
			<tr> 
                <td>Tempat_Tanggal_Lahir</td>
                <td><input type="text" name="Tempat_Tanggal_Lahir"></td>
            </tr>
			<tr> 
                <td>Keterangan</td>
                <td><input type="text" name="Keterangan"></td>
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
        $Id = $_POST['Id'];
		$Foto = $_FILES['Foto'];
		// upload photo and save the name to db
		$namaFoto = $Foto['name'];
		$file_tmp = $Foto['tmp_name'];
		move_uploaded_file($file_tmp, __DIR__ . '\\foto\\' . $namaFoto);
		
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
		$Tempat_Tanggal_Lahir= $_POST['Tempat_Tanggal_Lahir'];
		$Keterangan = $_POST['Keterangan'];
		

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO rsh_admin(`File`, `Nama`, `Alamat`, `Tempat_Tanggal_Lahir`, `Keterangan`) VALUES ('$namaFoto', '$Nama', '$Alamat', '$Tempat_Tanggal_Lahir', '$Keterangan')");

        // Show message when user added
		if($result)
			echo "User added successfully. <a href='apa2.php'>View Users</a>";
		else
			echo $result;
    }
    ?>
</body>
</html>