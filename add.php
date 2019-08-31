<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>No</td>
                <td><input type="text" name="id"></td>
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
        $id = $_POST['id'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
		$Tempat_Tanggal_Lahir= $_POST['Tempat_Tanggal_Lahir'];
		$Keterangan = $_POST['Keterangan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(`id`,`Nama`,`Alamat`,`Tempat_Tanggal_Lahir`, `Keterangan`) VALUES ('$id','$Nama','$Alamat','$Tempat_Tanggal_Lahir','$Keterangan')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>