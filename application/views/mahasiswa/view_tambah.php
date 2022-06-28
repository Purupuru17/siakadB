<link rel="stylesheet" href="<?= base_url('include/bootstrap.min.css') ?>">

<h1 class="text-success">TAMBAH MAHASISWA</h1>
<hr>
<form method="POST" name="form" action="<?= site_url('mahasiswa/tambah_aksi') ?>"> 
	NIM : <input type="text" name="nim" placeholder="Masukkan NIM Anda" >
	<br>
	NAMA : <input type="text" name="nama" placeholder="Masukkan Nama Anda" >
	<br><br>
	<input class="btn btn-success" type="submit" name="submit" value="Simpan Data">
	<input class="btn btn-default" type="reset" name="reset" value="Reset Form">
</form>