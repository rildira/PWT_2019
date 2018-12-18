<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('semnas/pendaftaran_aksi') ?>

			  <div class="form-group">
			    <label for="text">Nama</label>
			    <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap anda">
			  </div>

			  <div class="form-group">
			    <label for="text">Alamat Email</label>
			    <input type="text" name="mail" class="form-control">
			  </div>

			  <div class="form-group">
			    <label for="text">Identitas</label><br>
			    <?php
			    $options = array(
		        'KTP'         			=> 'KTP',
		        'SIM'           		=> 'SIM',
		        'Kartu Tanda Mahasiswa' => 'Kartu Tanda Mahasiswa',
		        'Kartu Pelajar'        	=> 'Kartu Pelajar'
				);

				echo form_dropdown('identitas', $options, 'KTP');
				?>
			    <!-- <input type="text" name="identitas" class="form-control" placeholder="Masukkan Nama Buku"> -->
			  </div>

			  <div class="form-group">
			    <label for="text">Nomor Identitas</label>
			    <input type="text" name="no_identitas" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Jenis Kelamin</label><br>
			    <?php
			    $options = array(
		        'Laki - laki'  => 'Laki - laki',
		        'Perempuan'    => 'Perempuan'
				);

				echo form_dropdown('jenis_kelamin', $options, 'Laki - laki');
				?>
			    <!-- <input type="text" name="jenis_kelamin" class="form-control" > -->
			  </div>

			  <div class="form-group">
			    <label for="text">Asal</label>
			    <input type="text" name="asal" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Pendidikan</label><br>
			    <?php
			    $options = array(
		        'Pelajar'       => 'Pelajar',
		        'Mahasiswa'     => 'Mahasiswa',
		        'Umum' 			=> 'Umum'
				);

				echo form_dropdown('pendidikan', $options, 'Pelajar');
				?>
			    <!-- <input type="text" name="pendidikan" class="form-control" > -->
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Instansi</label>
			    <input type="text" name="nama_instansi" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">Reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>