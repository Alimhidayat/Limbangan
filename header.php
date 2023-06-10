<?php 
$baseurl = "http://localhost/abdmas-limbangan/website-limbangan-main/";
$baseurlLogo = "http://localhost/abdmas-limbangan/website-limbangan-main/assets/img/logo/logo-limbangan.png";
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$active = $uriSegments[3];


?>


<li class="<?php if ($active == 'index.php') echo 'active'?>"><a href="index.php">Beranda</a></li>
<li class="<?php if ($active == 'about-us.php') echo 'active'?>"><a href="about-us.php">Tentang Kami</a></li>
<li class="<?php if ($active == 'progam.php') echo 'active'?>"><a href="progam.php">Program</a></li>
<li class="<?php if ($active == 'team.php') echo 'active'?>"><a href="team.php">Profile</a></li>
<li class="<?php if ($active == 'gallery.php') echo 'active'?>"><a href="gallery.php">Galeri</a></li>
<li class="<?php if ($active == 'contact.php') echo 'active'?>"><a href="contact.php">Hubungi kami</a></li>