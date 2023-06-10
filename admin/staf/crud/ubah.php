<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:../../login/login.php");
    exit;
}

require "../function/functions.php";

$id_staf = $_GET['id_staf'];
$staf = query("SELECT * FROM tb_staf WHERE id_staf = $id_staf")[0];
if (isset($_POST['ubah'])) {
    if (ubah($_POST)) {
        echo "
        <script>
            alert('Data staf berhasil diubah');
            document.location.href = '../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Staf gagal diubah');
            document.location.href = '../index.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Staf</title>

    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-5">
        <h3 class="mt-4 mb-3 text-center">Halaman Ubah Staf</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_staf" value="<?= $staf['id_staf'] ?>">
            <input type="hidden" name="gambar_lama" value="<?= $staf['gambar'] ?>">
            <div class="form-group">
                <label for="gambar">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar"
                            value="<?= $staf['gambar'] ?>">
                        <label class="custom-file-label" for="gambar">Pilih Foto</label>
                    </div>
                </div>
                <small class="form-text text-muted">Foto saat ini:</small>
                <img src="../assets/img/<?= $staf['gambar'] ?>" alt="" class="img-fluid rounded img-thumbnail" style="max-width: 400px">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $staf['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $staf['jabatan'] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
        </form>
    </div>

    <!-- Tambahkan Bootstrap JS (opsional, hanya jika Anda menggunakan fitur JavaScript Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>