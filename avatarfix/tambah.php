<html>
<head>
	<title>Welcome To The Avatar</title>
<div class='header' src="homepage.png" align='center'></div>
<style type="text/css"  href="style.css">
	body {
		background: #4CAF50;
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
	<h1 align='center'>Silahkan Login</h1>
	<br>
	<div class="wrapper">
    <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>No</td>
    <td><input type="text" name="id"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
   <tr>
    <td>Tempat Tanggal Lahir</td>
    <td><input type="text" name="ttl"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat"></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td><textarea name="keterangan"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</div>
	<br>
</div>
</body>
</html>