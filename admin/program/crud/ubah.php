<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("Location:../../login/login.php");
	exit;
}
require "../function/functions.php";

$id_prog = $_GET['id_prog'];
// var_dump($id_prog);
$program = query("SELECT * FROM tb_program WHERE id_prog = $id_prog")[0];

if (isset($_POST['ubah'])) {
    // var_dump(ubah($_POST));
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Program berhasil diubah');
            document.location.href = '../index.php';
        </script>
        ";
    } elseif (ubah($_POST) == 0){
        echo "
        <script>
            alert('Tidak terjadi perubahan pada program');
            document.location.href = '../index.php';
        </script>
        ";
    } 
    else {
        echo "
        <script>
            alert('program gagal diubah');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ubah Program BPP Selaawi</title>
</head>
<body>
    <h2 class="text-center">Ubah Program</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_prog" value="<?=$program['id_prog']?>">
        <input type="hidden" name="gambar_lama" value="<?=$program['gmbr_prog']?>">
        <input type="hidden" name="judul_lama" value="<?=$program['jud_prog']?>">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td><img src="../assets/img/<?=$program['gmbr_prog']?>" alt="" style="width: 150px"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" value="<?=$program['gmbr_prog']?>"></td>
            </tr>
            <tr>
                <td>Judul Program</td>
                <td>:</td>
                <td><input type="text" name="jud_prog" value="<?=$program['jud_prog']?>"></td>
            </tr>
            <tr>
                <td>Konten Program</td>
                <td>:</td>
                <td><textarea id="konten_prog" name="konten_prog"><?=$program['konten_prog']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button name="ubah">Ubah Program</button></td>
            </tr>
        </table>

        <script src="../../../assets/plugin/ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('konten_prog');
	</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </form>
</body>
</html>