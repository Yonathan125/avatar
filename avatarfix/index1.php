
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
  <div class="wrapper"><h1>Data Transferan</h1>
  <table border="1" width="100%" bgcolor="white">
  <tr>
    <th>Tanggal</th>
    <th>No. Rekening</th>
    <th>Keperluan</th>
    <th>Dana Masuk</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM donasi"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr align='center'>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['no_rek']."</td>";
    echo "<td>".$data['keperluan']."</td>";
    echo "<td>".$data['biaya']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
    <a href="form_simpan1.php"><button class='button'>Tambahkan Data Baru</button></a>
    <a href="login.html"><button class='button'>Keluar</button></a>
  </div>
</body>
</html>
<html>
<head>
</head>
<body>
 
</body>
</html>