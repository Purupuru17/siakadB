<link rel="stylesheet" href="<?= base_url('include/bootstrap.min.css') ?>">

<h1 class="text-primary">DATA MAHASISWA</h1>
<hr>

<a class="btn btn-primary" href="<?= site_url('mahasiswa/tambah') ?>" >Tambah Data</a>

<br><br>
<table class="table table-bordered">
	<!-- TABLE HEAD -->
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PROGRAM STUDI</th>
		<th>JENIS KELAMIN</th>
		<th>AKSI</th>
	</tr>
	<!-- TABLE DATA -->
	<tr>
		<td>1</td>
		<td>123110016</td>
		<td>Galih Bayu</td>
		<td>T. Informatika</td>
		<td>Laki-Laki</td>
		<td>
			<a class="btn btn-warning" href="<?= site_url('mahasiswa/ubah') ?>" >Ubah</a>
			<a class="btn btn-danger" href="<?= site_url('mahasiswa/hapus') ?>" >Hapus</a>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>123110017</td>
		<td>Niluh Ajeng</td>
		<td>Ekonomi</td>
		<td>Perempuan</td>
		<td>
			<a class="btn btn-warning" href="<?= site_url('mahasiswa/ubah') ?>" >Ubah</a>
			<a class="btn btn-danger" href="<?= site_url('mahasiswa/hapus') ?>" >Hapus</a>
		</td>
	</tr>
</table>

<?= print_r($data_mhs) ?>

