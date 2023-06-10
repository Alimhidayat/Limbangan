<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location:../login/login.php");
	exit;
}



require '../function/functions.php';
$id_vid = $_GET['id_vid'];

// query data komoditas berdasarkan id
$ubah_data = query("SELECT * FROM tb_limbvid WHERE id_vid = $id_vid")[0];



if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = '../index.php';
        </script>
        ";
    } else {
        // var_dump(ubah($_POST));
        echo "
        <script>
            alert('Data Gagal Diubah');
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

    <title></title>
</head>

<body>
    <div class="centered-form m-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ubah Video</h5>
                <?=$ubah_data['link_vid']?>
                <form class="form-horizontal" action="" method="post">
                    <input type="hidden" name="id_vid" value="<?=$ubah_data['id_vid']?>">
                    <div class="form-group">
                        <label class="col-form-label">Link Video</label>
                        <textarea name="link_video" rows="4" class="form-control" readonly><?=$ubah_data['link_vid']?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Judul Video</label>
                        <input type="text" name="judul_video" value="<?=$ubah_data['jud_vid']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Deskripsi Video</label>
                        <textarea name="deskripsi_video" rows="4" class="form-control" maxlength="120"><?=$ubah_data['des_vid']?></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
