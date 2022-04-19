<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan Data Mahasiswa</title>

</head><body>
<h1>LAPORAN DATA MAHASISWA</h1>
<table>
	
<table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>Nama Mahasiswa</th>
            <th>Npm</th>
            <th>Tanggal Lahir</th>
            <th>Dosen PA</th>
            <th>Jurusan</th>
        </tr>
		
		
		<?php $no= 1; foreach ($mahasiswa as $row): ?>
	<tr >
		<td><?php echo $no++ ?></td>
		<td><?php echo $row ->nama?></td>
		<td><?php echo $row ->npm?></td>
        <td><?php echo $row ->tgl_lahir?></td>
		<td><?php echo $row ->dosen?></td>
        <td><?php echo $row ->jurusan?></td>

	</tr>

<?php endforeach ; ?>
</table>


</body></html>