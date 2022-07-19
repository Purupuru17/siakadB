<link rel="stylesheet" href="<?= base_url('include/bootstrap.min.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>
<form method="POST" name="form" action="<?= $action ?>"> 
	NIM : <input required value="<?= $data_mhs['nim'] ?>" type="text" name="nim" placeholder="Masukkan NIM Anda" >
	<br>
	NAMA LENGKAP : <input required value="<?= $data_mhs['nama_mhs'] ?>" type="text" name="nama" placeholder="Masukkan Nama Anda" >
	<br>
	JENIS KELAMIN : 						<!-- logika if        ?   if benar : if salah -->
	<input required value="Laki-Laki" <?= $data_mhs['jk_mhs'] == 'Laki-Laki' ? 'checked' : null ?> type="radio" name="jenis"> Laki-Laki
	<input required value="Perempuan" <?= $data_mhs['jk_mhs'] == 'Perempuan' ? 'checked' : null ?> type="radio" name="jenis"> Perempuan
	<br>
	AGAMA : 
	<select required name="agama">
		<option value="">--> Pilih Agama <--</option>
		<option <?= $data_mhs['agama_mhs'] == 'Islam' ? 'selected' : null ?> value="Islam">Islam</option>
		<option <?= $data_mhs['agama_mhs'] == 'Kristen' ? 'selected' : null ?> value="Kristen">Kristen</option>
		<option <?= $data_mhs['agama_mhs'] == 'Katolik' ? 'selected' : null ?> value="Katolik">Katolik</option>
		<option <?= $data_mhs['agama_mhs'] == 'Hindu' ? 'selected' : null ?> value="Hindu">Hindu</option>
		<option <?= $data_mhs['agama_mhs'] == 'Budha' ? 'selected' : null ?> value="Budha">Budha</option>
	</select>

	<br><br>
	<input class="btn btn-sm btn-success" type="submit" name="submit" value="Simpan Data">
	<input class="btn btn-sm btn-default" type="reset" name="reset" value="Reset Form">
</form>