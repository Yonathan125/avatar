<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$tanggal = $_POST['tanggal'];
$transfer = $_POST['transfer'];
$keperluan = $_POST['keperluan'];
$biaya = $_POST['biaya'];

  $query = "INSERT INTO transfer VALUES('".$tanggal."', '".$transfer."', '".$keperluan."', '".$biaya."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }

?>