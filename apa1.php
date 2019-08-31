<?php
include "apa.php";
$query = mysqli_query($connection,"SELECT * FROM rsh_admin ");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Tanggal Lahir</th>
			<th>Keterangan</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["Nama"];?></td>
             <td><?php echo $data["Alamat"];?></td>
             <td><?php echo $data["Tempat_Tanggal_Lahir"];?></td>
			 <td><?php echo $data["Keterangan"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
           