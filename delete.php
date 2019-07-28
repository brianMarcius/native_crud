<?php
include "koneksi.php";

$nim = $_GET['nim'];
$sql = "DELETE from mahasiswa where nim='$nim'";
$delete = mysqli_query($koneksi,$sql);

if ($delete) {
    header("Location: tampil.php");
}else{
    echo mysqli_error($koneksi);
}

?>