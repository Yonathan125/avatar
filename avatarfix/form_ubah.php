
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
 <h1>Ubah Data Anak</h1>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM anak WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8" align="center">
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>
   <tr>
    <td>Tempat Tanggal Lahir</td>
    <td><input type="text" name="ttl" value="<?php echo $data['ttl']; ?>"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <?php
    if($data['jenis_kelamin'] == "Laki-laki"){
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
    }else{
      echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
      echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
    }
    ?>
    </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>
    <tr>
    <td>Keterangan</td>
    <td><input type="text" name="telp" value="<?php echo $data['keterangan']; ?>"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
    </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</div>
  <br>
</body>
</html>