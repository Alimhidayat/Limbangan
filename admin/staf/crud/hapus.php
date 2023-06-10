<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("Location:../../login/login.php");
	exit;
}
require "../function/functions.php";

$id_staf = $_GET['id_staf'];

if (hapus($id_staf) > 0) {
    echo "
    <script>
        alert('Staf Berhasil Dihapus');
        document.location.href = '../index.php';
    </script>";
} else{
    echo "
    <script>
        alert('Staf Gagal Terhapus');
        document.location.href = '../index.php';
    </script>
    ";
} 

?>