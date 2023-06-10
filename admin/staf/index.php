<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:../login/login.php");
    exit;
}

require "function/functions.php";
$staf = query("SELECT * FROM tb_staf");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staf</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <style>
        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: white;
            text-decoration: none;
        }

        .sidebar-sticky {
            margin-top: 20px;
        }

        .nav-link.active {
            background-color: rgba(0, 0, 0, 0.15) !important;
        }

        .nav-link {
            padding: 10px 16px;
            margin-top: 10px;
            text-align: left;
            border-radius: 10px;
        }

        .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.15) !important;
        }

        .nav-link.logout {
            background-color: rgb(255 0 0 / 58%) !important;
        }

        .nav-link.logout:hover {
            background-color: rgb(255 0 0 / 68%) !important;
        }

        .logo {
            margin-top: 20px;
            height: 100px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php require_once "../sidebar/sidebar.php" ?>
            <div class="col-md-10 col-lg-10 ml-sm-auto px-4">
                <h2 class="text-center mt-5 mb-4">Daftar Staf</h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-sm table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($staf as $row): ?>
                                <tr>
                                    <th scope="row" class="pt-3">
                                        <?= $i ?>
                                    </th>
                                    <td><img src="assets/img/<?= $row['gambar'] ?>" alt="" style="width: 170px"></td>
                                    <td style="vertical-align: middle;">
                                        <?= $row['nama'] ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <?= $row['jabatan'] ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <a href="crud/hapus.php?id_staf=<?= $row['id_staf'] ?>"
                                            class="btn btn-danger">Hapus</a>
                                        <a href="crud/ubah.php?id_staf=<?= $row['id_staf'] ?>"
                                            class="btn btn-primary" name="ubah">Ubah</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mb-5">
                    <a href="crud/tambah.php" class="btn btn-primary" name="tambah">Tambah Staf</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">BPPLimbangan.com</span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>