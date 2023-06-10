<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location:../login/login.php");
	exit;
}


require '../function/functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST)>0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../index.php';
        </script>
        ";
    } else{
        echo "gagal ditambahkan";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">

    <style>
        .centered-form {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .centered-form .card {
            width: 500px;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>

    <title>Tambah Video</title>
</head>

<body>
    <div class="centered-form m-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Tambah Video</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="link_video">Link Video</label>
                        <textarea name="link_video" id="link_video" rows="4" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="judul_video">Judul Video</label>
                        <input type="text" name="judul_video" id="judul_video" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_video">Deskripsi Video</label>
                        <textarea name="deskripsi_video" id="deskripsi_video" rows="4" class="form-control" maxlength="120"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>

