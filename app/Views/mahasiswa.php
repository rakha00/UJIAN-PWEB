<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ujian PWEB - Rakhadinar Jaladara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <br>
        <h1>Data Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_mahasiswa as $mahasiswa) : ?>
                    <tr>
                        <td><?= $mahasiswa->nama_lengkap ?></td>
                        <td><?= $mahasiswa->npm ?></td>
                        <td><?= $mahasiswa->kelas ?></td>
                        <td><?= $mahasiswa->jurusan ?></td>
                        <td><?= $mahasiswa->fakultas ?></td>
                        <td>
                            <a href="<?= base_url('edit_data_mahasiswa').'/'.$mahasiswa->id ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?= base_url('delete_data_mahasiswa').'/'.$mahasiswa->id ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_mahasiswa') ?>" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>