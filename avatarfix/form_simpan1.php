<html>
<head>
	<title>Welcome To The Avatar</title>
<div class='header' src="homepage.png" align='center'></div>
<style type="text/css"  href="style.css">
	body {
		background: #db4040;
	}
	h1 {
		color: white;
	}
	.header {
		position: relative;
margin: auto;
padding:35px;
overflow: hidden;
background:url(homepage.png) no-repeat center center;
width:975px;
height: 280px;
	}
	.wrapper {
		text-align: center;
}
	.button {
  background-color: #333; /* Hijau */
  border: none;
  color: white;
  padding: 32px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
p {
	color: white;
}
</style>	
</head>
<body>
	<br>
  <div class="wrapper">
   <h1>Tambah Data Transfer</h1>
  <form method="post" action="proses_simpan1.php" enctype="multipart/form-data">
  <table cellpadding="8"  align="center">
  <tr>
    <td>Tanggal</td>
    <td><input type="text" name="tanggal"></td>
  </tr>
  <tr>
    <td>Nomor Rekening</td>
    <td><input type="text" name="no_rek"></td>
  </tr>
  <tr>
    <td>Keperluan</td>
    <td><textarea name="keperluan"></textarea></td>
  </tr>
  <tr>
    <td>Dana Masuk</td>
    <td><input type="text" name="biaya"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index1.php"><input type="button" value="Batal"></a>
  </form>
</div>
	<br>
</body>
</html>