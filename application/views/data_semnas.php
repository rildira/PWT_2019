<!DOCTYPE html>
<html>
<head>
	<title>SEMNAS 2019</title>
</head>
<body>
	<center><h1>Form Pendaftaran SEMNAS 2019</h1></center>
	<center><a href="<?php echo base_url() ?>semnas/pendaftaran/" class="btn btn-md btn-success">Form Pendaftaran Semnas 2019</a></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID Pendaftaran</th>
			<th>Nama</th>
			<th>Identitas</th>
			<th>No Id.</th>
			<th>Jenis Kel.</th>
			<th>Asal</th>
			<th>Pend.</th>
			<th>Nama Ins.</th>
			<th>QR CODE</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php 
		// $no = 1;
		foreach($peserta_semnas as $u){ 
		?>
		<tr>
			<td><?php echo $u->id_pendaftaran ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->identitas ?></td>
			<td><?php echo $u->no_identitas ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->asal ?></td>
			<td><?php echo $u->pendidikan ?></td>
			<td><?php echo $u->nama_instansi ?></td>
			<td><?php echo $u->qrcode ?></td>
			<td><?php echo $u->status ?></td>
			<td>
			      <?php echo anchor('semnas/edit/'.$u->id_pendaftaran,'Edit'); ?>
                              <?php echo anchor('semnas/hapus/'.$u->id_pendaftaran,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>