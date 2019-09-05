<html>
<head>
</head>
<body>
  <h1>Tambah Data Transfer</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Tanggal</td>
    <td><input type="text" name="tanggal"></td>
  </tr>
  <tr>
    <td>Transfer Masuk</td>
    <td><input type="text" name="transfer"></td>
  </tr>
  <tr>
    <td>Keperluan</td>
    <td><textarea name="keperluan"></textarea></td>
  </tr>
  <tr>
    <td>Biaya</td>
    <td><input type="text" name="biaya"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>