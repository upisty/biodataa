<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('asset/css/bootstrap.css') ?>>
    <title>Upi</title>
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">Form Data Diri</h2>
  <form>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan email">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
    </div>
    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggal_lahir">
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <select class="form-control" id="jenis_kelamin">
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="pekerjaan">Pekerjaan:</label>
      <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan pekerjaan">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>