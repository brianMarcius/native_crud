<?php 
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['name'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];

$sql = "UPDATE mahasiswa set nama='$nama',fakultas='$fakultas',prodi='$prodi',kelas='$kelas' where nim='$nim'";
$update = mysqli_query($koneksi,$sql);
if($update) {
    header("Location: tampil.php");
}else{
    echo mysqli_error($koneksi);
}

?>
