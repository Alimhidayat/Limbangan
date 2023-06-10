<?php

$baseurl = "http://localhost/abdmas-limbangan/website-limbangan-main/admin/";
$baseurlLogo = "http://localhost/abdmas-limbangan/website-limbangan-main/assets/img/logo/logo-limbangan.png";
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$active = $uriSegments[4];
// print($active);
// echo "<br>";
// print_r($uriSegments);
// exit;


?>

<nav class="col-md-2 col-lg-2 bg-dark pb-5">
    <div class="sidebar-sticky">
        <center>
            <img class="logo mb-4 rounded" src="<?=$baseurlLogo?>" alt="Logo">
            <!-- <p class="h2"><b style="color: white;">Limbangan</b></p> -->
        </center>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php if ($active == 'index.php') echo "active"?>" href="<?=$baseurl;?>index.php">
                    <i class="bi bi-house-door"></i> Galeri
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($active == 'staf') echo "active"?>" href="<?=$baseurl;?>staf">
                    <i class="bi bi-people"></i> Staf
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($active == 'program') echo "active"?>" href="<?=$baseurl;?>program">
                    <i class="bi bi-geo-alt"></i> Program
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link logout" href="<?=$baseurl;?>login/logout.php">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>