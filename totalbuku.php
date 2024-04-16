<?php
    include 'koneksi.php';
    
    $query = 'select * from databuku';
    $sql = mysqli_query($conn, $query);

    $hitungdata = mysqli_num_rows($sql);
?>