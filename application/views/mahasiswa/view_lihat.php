<link rel="stylesheet" href="<?= base_url('include/bootstrap.min.css') ?>">

<h1 class="text-primary">DATA MAHASISWA</h1>
<hr>

<a class="btn btn-primary" href="<?= site_url('mahasiswa/tambah') ?>" >Tambah Data</a>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John <a class="btn btn-warning" href="<?= site_url('mahasiswa/ubah') ?>" >Ubah Data</a>
        <a class="btn btn-danger" href="<?= site_url('mahasiswa/hapus') ?>" >Hapus Data</a></td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>