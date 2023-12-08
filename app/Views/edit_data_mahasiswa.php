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
        <h1>Edit Data mahasiswa</h1>
        <form action="<?= base_url('proses_edit_mahasiswa')?>" method="POST">
            <input type="hidden" class="form-control" id="id_mahasiswa" name="id_mahasiswa" value="<?= $data_mahasiswa->id ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $data_mahasiswa->nama_lengkap ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" value="<?= $data_mahasiswa->npm ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $data_mahasiswa->kelas ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $data_mahasiswa->jurusan ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?= $data_mahasiswa->fakultas ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>