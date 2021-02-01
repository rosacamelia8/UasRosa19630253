<?php
    include "koneksi.php";
    $id = $_GET['idsiswa'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mhs WHERE idsiswa='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-kampus/data_mahasiswa.php'>";
?>