<?php
include(‘config.php’);
//tangkap data dari form
$NAMA = $_POST[‘NAMA’];
$NIM = $_POST[‘NIM’];
$PRODI_FAKULTAS = $_POST[‘PRODI/FAKULTAS’];
$UKM_ORMAWA = $_POST[’UKM/ORMAWA’];
$NO_HP = $_POST[‘NOHP’];
$BARANG_YANG_DIPINJAM = $_POST[‘BARANGYANGDIPINJAM’];
$TANGGAL_PEMINJAMAN = $_POST [‘TANGGALPEMINJAMAN’];
$TUJUAN_PEMINJAMAN = $_POST [‘TUJUANPEMINJAMAN’];

$query = mysql_query("update peminjaman set NAMA='$NAMA', NIM= '$NIM', PRODI_FAKULTAS='$PRODI_FAKULTAS', UKM_ORMAWA='$UKM_ORMAWA', NO_HP='$NO_HP',BARANG_YANG_DIPINJAM='$BARANG_YANG_DIPINJAM',TANGGAL_PEMINJAMAN='$TANGGAL_PEMINJAMAN', TUJUAN_PEMINJAMAN='$TUJUAN_PEMINJAMAN' where user_id='$id'") or die(mysql_error());
if ($query) {
    header('location:view.php?message=success');
}
?>