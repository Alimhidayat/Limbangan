<?php
// Melakukan koneksi
require_once __DIR__."../../../koneksi.php";

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;

}

// TAMBAH DATA GALERI
function tambah($data){
    global $conn;
    
    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);


    // CEK APAKAH JUDUL TERSEBUT SUDAH ADA
    // $result = mysqli_query($conn, "SELECT judul_inf from tb_informasi WHERE judul_inf = '$judul_inf'");

    // if ( mysqli_fetch_assoc($result)) {
    //     echo "
    //     <script>
    //         alert('Informasi dengan judul $judul_inf sudah tersedia');
    //     </script>
    //     ";
    //     return false;
    // }

    // upload gambar
    $gambar = upload();
    if ($gambar == false)
    if (!$gambar ) {
        return false;
    }

    $query = "INSERT INTO tb_staf 
                VALUES
                ('', '$nama', '$jabatan', '$gambar')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    // Cek apakah gambar tidak di upload
    if ($error == 4) {
        echo "<script>
            alert('Anda tidak memilih gambar');
        </script>";
        return 'default.jpeg';
    }

    // Cek Ekstensi gambar valid
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Upload Gambar jpg,jpeg atau png');
        </script>";
        return false;
    }

    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    // Lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}

function ubah($data){
    global $conn; 

    $id_staf = $data['id_staf'];
    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);


    // gambar_lama
    $gambar_lama = $data['gambar_lama'];

    // var_dump($judul_lama);
    

    // upload gambar
   // cek apakah user memilih gambar baru atau tidak
   if($_FILES['gambar']['error'] == 4){
        $gambar = $gambar_lama;
    } else {
        $gambar = upload();
    }

    // var_dump($gambar);
    $query = "UPDATE tb_staf SET
                nama = '$nama',
                jabatan = '$jabatan',
                gambar = '$gambar'
                WHERE id_staf = $id_staf";
    
    mysqli_query($conn, $query);
    

    return mysqli_affected_rows($conn);

}



function hapus($id){
    global $conn;

    $query = "DELETE FROM tb_staf WHERE id_staf = $id";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}


?>