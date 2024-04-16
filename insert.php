<?php
include 'koneksi.php';

// mengambil data dari form
$nobuku = $_POST['nobuku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];

//jika data kosong tidak akan dimasukkan ke database
if (empty($nobuku) || empty($judul) || empty($penulis)) {
    exit();
}

// query masukkan data ke database
$sql = "INSERT INTO databuku (no_buku, judul, penulis) VALUES ('$nobuku', '$judul', '$penulis')";
if ($conn->query($sql) === FALSE) {
    echo "Error: ". $sql. "<br>". $conn->error;
} else {
    header("location: index.php");
}

$conn->close();
?>