<?php
    include 'koneksi.php';

    if(isset($_GET['hapus'])){
        $nobuku = $_GET['hapus'];
        $query = "delete from databuku where no_buku = '$nobuku'";
        $sql = mysqli_query($conn, $query);
    
        if($conn->query($sql) === FALSE){
            header("location: index.php");
        } else {
            echo $query;
        }
    }


    if(isset($_POST['aksi'])){    

        $nobuku = $_POST['nobuku'];     
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];

        $query = "update databuku set judul = '$judul', penulis = '$penulis' where no_buku = $nobuku;";
        
        $sql = mysqli_query($conn, $query);

        if($conn->query($sql) === FALSE){
            header("location: index.php");
        } else {
            echo $query;
        }
    } 
?>