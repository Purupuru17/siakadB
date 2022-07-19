<link rel="stylesheet" href="<?= base_url('include/bootstrap.min.css') ?>">
<style>
	th, td {
		text-align: center;
	}
</style>
<h1 class="text-primary">DATA MAHASISWA</h1>
<hr>

<a class="btn btn-sm btn-primary" href="<?= site_url('mahasiswa/tambah') ?>" >Tambah Data</a>

<br><br>
<table class="table table-bordered">
	<!-- TABLE HEAD -->
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PROGRAM STUDI</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>AKSI</th>
	</tr>
	<!-- TABLE DATA -->
	<!-- AWAL PERULANGAN -->
	<?php
	$nomor = 1;
	foreach($data_mhs as $value){
	?>
	<tr>
		<td><?= $nomor ?></td>
		<td><?= $value['nim'] ?></td> 
		<td><?= $value['nama_mhs'] ?></td>
		<td><?= $value['prodi'] ?></td>
		<td><?= $value['jk_mhs'] ?></td>
		<td><?= $value['agama_mhs'] ?></td>
		<td>
			<a class="btn btn-xs btn-warning" href="<?= site_url('mahasiswa/ubah/'.$value['id_mhs']) ?>" >Ubah</a>
			<a class="btn btn-xs btn-danger" href="<?= site_url('mahasiswa/hapus/'.$value['id_mhs']) ?>" onclick="return confirm('Yakin mau hapus ?')" >Hapus</a>
		</td>
	</tr>
	<!-- AKHIR PERULANGAN -->
	<?php
		$nomor = $nomor + 1;
		//baru = 2   //lama = 1, + 1
	}
	?>
</table>