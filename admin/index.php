<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:login/login.php");
    exit;
}

// session untuk index
// if (isset($_POST['ubah']) and isset($_POST['tambah'])) {
//     $_SESSION['galeri'] = true;
// }



require 'function/functions.php';
// Pagination
$jumlahDataPerHalaman = 6;
$jumlahData = count(query("SELECT * FROM tb_limbvid ORDER BY id_vid DESC"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$data_vid = query("SELECT * FROM tb_limbvid ORDER BY id_vid DESC
                    LIMIT $awalData, $jumlahDataPerHalaman");

// var_dump($data_vid);
// var_dump($data_vid);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Galeri</title>
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

        .thumbnail {
            margin-bottom: 30px;
        }

        .card {
            height: 450px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card-body {
            overflow: hidden;
        }

        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .btn-group {
            margin-top: auto;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .col-sm-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        /* Center Pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php require_once "sidebar/sidebar.php" ?>

            <div class="col-md-10 col-lg-10 ml-sm-auto px-4">
                <h1 class="text-center my-5">Halaman Galeri</h1>
                <?php
                $i = 0;
                echo "<div class='row'>";
                foreach ($data_vid as $row):
                    if ($i % 3 === 0 && $i > 0) {
                        echo '</div><div class="row">';
                    }
                    ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                        <div class="card mb-3 rounded-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <?= $row['link_vid'] ?>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?= $row['jud_vid'] ?>
                                </h4>
                                <p class="card-text ">
                                    <?= $row['des_vid'] ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group">
                                    <a href="crud/ubah.php?id_vid=<?= $row['id_vid'] ?>" class="btn btn-primary">Ubah</a>
                                    <a href="crud/hapus.php?id_vid=<?= $row['id_vid'] ?>" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Awal Pagination -->

                <?php if ($jumlahHalaman > 1): ?>
                    <div class="pagination-container">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <?php if ($halamanAktif > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                                    <?php if ($i == $halamanAktif): ?>
                                        <li class="page-item active">
                                            <a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($halamanAktif < $jumlahHalaman): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                    <br>
                <?php endif; ?>
                <!-- Akhir Pagination -->

                <div class="row mx-auto mt-3 mb-5" style="height: 20px;">
                    <a href="crud/tambah.php" class="btn btn-primary">Tambah Video</a>
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