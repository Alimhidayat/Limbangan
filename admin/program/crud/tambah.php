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
            alert('Program berhasil ditambahkan');
            document.location.href = '../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('program gagal ditambahkan');
            document.location.href = '../index.php';
        </script>
        ";

    }
    // var_dump($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Program BPP Selaawi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-5">
        <h3 class="mt-3 mb-4 text-center">Tambah Program</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar"
                            onchange="updateFileName()">
                        <label class="custom-file-label" for="gambar" id="gambarLabel">Pilih Gambar</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jud_prog" class="col-sm-2 col-form-label">Judul Program</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jud_prog" name="jud_prog">
                </div>
            </div>
            <div class="form-group row">
                <label for="konten_prog" class="col-sm-2 col-form-label">Konten Program</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="konten_prog" name="konten_prog"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="tambah">Tambah Program</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../../../assets/plugin/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('konten_prog');

        function updateFileName() {
            var input = document.getElementById('gambar');
            var label = document.getElementById('gambarLabel');
            label.textContent = input.files[0].name;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>