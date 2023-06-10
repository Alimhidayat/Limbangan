<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location:../login/login.php");
  exit;
}

require 'function/functions.php';

$jumlahDataPerHalaman = 6;
$jumlahData = count(query("SELECT * FROM tb_program ORDER BY id_prog DESC"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$program = query("SELECT * FROM tb_program ORDER BY id_prog DESC
                  LIMIT $awalData, $jumlahDataPerHalaman");



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Program BPP Selaawi</title>

  <!-- Link ke Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- Kode CSS Tambahan -->
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

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card {
      min-height: 350px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .card .card-body {
      height: 200px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php require_once "../sidebar/sidebar.php" ?>

      <div class="col-md-10 col-lg-10 ml-sm-auto px-4">
        <h2 class="text-center">Halaman Program BPP Selaawi</h2><br>
        <div class="container">
          <div class="row">
            <?php foreach ($program as $row): ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <img src="assets/img/<?= $row['gmbr_prog'] ?>" class="card-img-top" alt="<?= $row['jud_prog'] ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?= $row['jud_prog'] ?>
                    </h5>
                    <p class="card-text text-truncate">
                      <?= substr($row['konten_prog'], 0, 100) ?>
                    </p>
                    <!-- <p class="card-text text-overflow"><?= $row['konten_prog'] ?></p> -->
                  </div>
                  <div class="card-footer">
                    <a href="crud/hapus.php?id_prog=<?= $row['id_prog'] ?>"
                      class="btn btn-danger btn-sm float-start">Hapus</a>
                    <a href="crud/ubah.php?id_prog=<?= $row['id_prog'] ?>"
                      class="btn btn-primary btn-sm float-end">Ubah</a>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>
          </div>
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

          <div class="row mx-auto justify-content-center align-items-center my-4" style="margin-top: -30px;">
            <a href="crud/tambah.php" class="btn btn-primary">Tambah Program</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer py-3 bg-light">
    <div class="container text-center">
      <span class="text-muted">BPPLimbangan.com</span>
    </div>
  </footer>

  <!-- Link ke Bootstrap JS dan Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5