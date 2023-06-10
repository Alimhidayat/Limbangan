<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location:../../login/login.php");
  exit;
}

require "../function/functions.php";

$id_prog = $_GET['id_prog'];

if (hapus($id_prog) > 0) {
    echo "
        <script>
            alert('Program berhasil dihapus');
            document.location.href = '../index.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('program gagal dihapus');
            document.location.href = '../index.php';
        </script>
        ";
}
?>