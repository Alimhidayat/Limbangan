<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:../../login/login.php");
    exit;
}
require "../function/functions.php";

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Staf baru berhasil ditambahkan');
            document.location.href = '../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Staf baru gagal ditambahkan');
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
    <title>Tambah Staf</title>

    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container mb-5">
        <div class="h3 text-center mt-4 mb-3">Halaman Tambah Staf BPPLimbangan</div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="gambar">Foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar"
                            onchange="updateFileName()" required>
                        <label class="custom-file-label" for="gambar" id="gambarLabel">Pilih Foto</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" required>
            </div>

            <button type="submit" class="btn btn-primary" name="tambah">Tambah Staf</button>
        </form>
    </div>

    <!-- Tambahkan Bootstrap JS (opsional, hanya jika Anda menggunakan fitur JavaScript Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        function updateFileName() {
            var input = document.getElementById('gambar');
            var label = document.getElementById('gambarLabel');
            label.textContent = input.files[0].name;
        }
    </script>
</body>

</html>