<?php
    include 'koneksi.php';

    $nobuku = '';
    $judul = '';
    $penulis = '';

    if(isset($_GET['ubah'])){
        $nobuku = $_GET['ubah'];

        $query = "select * from databuku where no_buku = '$nobuku';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);
        
        $judul = $result['judul'];
        $penulis = $result['penulis'];

    }
?>