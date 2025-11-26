<?php
// include | require | include_once | require_once
require 'koneksi.php'; // panggil file koneksi

// blok kode untuk form create / insert
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO tamu(nama, email, komentar) 
                VALUES ('$nama', '$email', '$komentar')";
    $query = $koneksi->query($sql); // eksekusi query 

    if ($query) {
        // echo "Berhasil menyimpan data";
        header("Location: index.php?p=bukutamu");
    } else {
        echo "Gagal menyimpan data!";
    }
}

// blok kode untuk update / edit 
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $id = $_POST['id'];

    $sql = "UPDATE tamu SET nama='$nama', email='$email', komentar='$komentar' WHERE id='$id'";
    $query = $koneksi->query($sql); // eksekusi query 

    if ($query) {
        header("Location: index.php?p=bukutamu");
    } else {
        echo "Gagal mengubah data!";
    }
}

// blok kode untuk hapus
if (isset($_GET['aksi']) == 'hapus') {
    $id = $_GET['id'];
    $query = $koneksi->query("DELETE FROM tamu WHERE id='$id'");

    if ($query) {
        header("Location: index.php?p=bukutamu");
    } else {
        echo "Gagal menghapus data!";
    }
}
