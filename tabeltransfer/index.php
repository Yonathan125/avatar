<html>
<head>
</head>
<body>
  <h1>Data Transferan</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Tanggal</th>
    <th>Transfer Masuk</th>
    <th>Keperluan</th>
    <th>Biaya</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr align='center'>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td>".$data['transfer']."</td>";
    echo "<td>".$data['keperluan']."</td>";
    echo "<td>".$data['biaya']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>