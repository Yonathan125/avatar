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
  .button2 {
  background-color: #333; /* Hijau */
  border: none;
  color: white;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
</style>  
</head>
<body>
  <div class="wrapper">
  <h1>Data Anak di Panti Asuhan</h1>
</div>
<br><br>
  <table border="1" width="100%" bgcolor="white" align="center">
  <tr>
    <th align="center">No</th>
    <th align="center">Foto</th>
    <th align="center">Nama</th>
    <th align="center">Tempat Tanggal Lahir</th>
    <th align="center">Jenis Kelamin</th>
    <th align="center">Alamat</th>
    <th align="center">Keterangan</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM anak"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td align='center'>".$data['id']."</td>";
    echo "<td align='center' width='200'><img src='images/".$data['foto']."' width='200' height='100'></td>";
    echo "<td align='center'>".$data['nama']."</td>";
    echo "<td align='center'>".$data['ttl']."</td>";
    echo "<td align='center'>".$data['jenis_kelamin']."</td>";
    echo "<td align='center'>".$data['alamat']."</td>";
    echo "<td align='center'>".$data['keterangan']."</td>";
    echo "<td align='center'><a href='form_ubah.php?id=".$data['id']."'><button class='button2'>Edit</button></a></td>";
    echo "<td align='center'><a href='proses_hapus.php?id=".$data['id']."'><button class='button2'>Delete</button></a></td>";
    echo "</tr>";
  }
  ?>
  </table>
  <br>
  <div class="wrapper">
    <a href="form_simpan.php"><button class='button'>Tambahkan Data Baru</button></a>
    <a href="login.html"><button class='button'>Keluar</button></a>
  </div>
</body>
</html>
