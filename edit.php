<h1>Edit Buku Tamu</h1>
<?php
require 'koneksi.php';
$id = $_GET['key'];
$edit = $koneksi->query("SELECT * FROM tamu WHERE id='$id'");
$data = $edit->fetch_assoc();
?>
<form action="proses.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $data['email'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="komentar" class="form-label">Komentar</label>
        <textarea class="form-control" id="komentar" rows="3" name="komentar"><?= $data['komentar'] ?></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="update" class="btn btn-primary">
        <a href="index.php?p=bukutamu" class="btn btn-secondary">List Tamu</a>
    </div>
</form>