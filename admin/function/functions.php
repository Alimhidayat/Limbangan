<?php
// $conn = mysqli_connect('localhost', 'root', '', 'limbangan');

require_once __DIR__."../../koneksi.php";

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;

}
  

function tambah($data){
    global $conn; 

    $link_video = $data['link_video'];
    $judul_video = $data['judul_video'];
    $deskripsi_video = $data['deskripsi_video'];

    // $iframe_code = "<iframe style='width: 100%;' height='315' src='" . $link_video . "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
    // $iframe_code = '<iframe style="width: 100%;" height="315" src="' . $link_video . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    // $iframe_code = '<iframe style="width: 100%;" height="315" src="' . $link_video . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    // $iframe_code = '<iframe width="100%" height="300" src="' . $link_video . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

    // $link_video = "https://www.youtube.com/embed/GPwc6VpNkQs";
    // https://youtu.be/GPwc6VpNkQs
    // $width = "100%";
    // $iframe_code = '<iframe width="' . $width . '" height="315" src="' . convertToEmbedLink($link_video) . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    $query = "INSERT INTO tb_limbvid
                VALUES ('', '$link_video', '$judul_video', '$deskripsi_video')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

// HAPUS VIDEO
function hapus($id){
    global $conn; 
    mysqli_query($conn, "DELETE FROM tb_limbvid WHERE id_vid = $id");

    return mysqli_affected_rows($conn);
}

// ubah video
function ubah($data){
    global $conn; 

    $id_vid = $data['id_vid'];
    $link_video = $data['link_video'];
    $judul_video = $data['judul_video'];
    $deskripsi_video = $data['deskripsi_video'];
    // var_dump($deskripsi_video);

    $query = "UPDATE tb_limbvid 
                SET link_vid = '$link_video',
                    jud_vid = '$judul_video',
                    des_vid = '$deskripsi_video'
                WHERE id_vid = $id_vid";
    // var_dump($query);
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>