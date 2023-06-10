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

// TAMBAH DATA KOMODITAS
function tambah($data){
    global $conn;
    
    $jud_prog = htmlspecialchars($data['jud_prog']);
    $konten_prog = $data['konten_prog'];
    // $gambar = $data['gambar'];

    // CEK APAKAH PROGRAM TERSEBUT SUDAH ADA
    $result = mysqli_query($conn, "SELECT jud_prog from tb_program WHERE jud_prog = '$jud_prog'");

    if ( mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('Program $jud_prog sudah tersedia');
        </script>
        ";
        return false;
    }

    // upload gambar
    $gambar = upload();
    if ($gambar == false)
    if (!$gambar ) {
        // echo "
        // <script>
        //     alert('Gambar belum ditambahkan');
        // </script>
        // ";
        return false;
    }

    $query = "INSERT INTO tb_program
                VALUES
                ('', '$gambar', '$jud_prog', '$konten_prog')";
    
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
        // return 'default.jpeg';
        return false;
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

    $id_prog = $data['id_prog'];
    $jud_prog = htmlspecialchars($data['jud_prog']);
    $konten_prog = $data['konten_prog'];

    // judul_lama
    $judul_lama = htmlspecialchars($data['judul_lama']);

    // gambar_lama
    $gambar_lama = $data['gambar_lama'];

    // var_dump($judul_lama);


     // JIKA TIDAK ADA PERUBAHAN JUDUL
     if ($jud_prog == $judul_lama) {
        $jud_prog = $judul_lama;
    } else{
        // CEK APAKAH JUDUL TERSEBUT SUDAH ADA
        $result = mysqli_query($conn, "SELECT jud_prog from tb_program WHERE jud_prog = '$jud_prog'");

        if ( mysqli_fetch_assoc($result)) {
            echo "
            <script>
                alert('Program $jud_prog sudah tersedia');
            </script>
            ";
            return -1;
        }
    }

    

    // upload gambar
   // cek apakah user memilih gambar baru atau tidak
   if($_FILES['gambar']['error'] == 4){
        $gambar = $gambar_lama;
    } else {
        $gambar = upload();
    }

    // var_dump($gambar);
    $query = "UPDATE tb_program SET
                gmbr_prog = '$gambar',
                jud_prog = '$jud_prog',
                konten_prog = '$konten_prog'
                WHERE id_prog = $id_prog";
    
    mysqli_query($conn, $query);
    

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn; 

    $query = "DELETE FROM tb_program WHERE id_prog = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}