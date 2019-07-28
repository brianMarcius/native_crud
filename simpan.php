<?php 
include "koneksi.php";

$nim = $_POST['nim'];
$name = $_POST['name'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];

$sql = "INSERT into mahasiswa(nim,nama,fakultas,prodi,kelas) values ('$nim','$name','$fakultas','$prodi','$kelas')";
$insert = mysqli_query($koneksi,$sql);

if($insert) {
    header("Location: tampil.php");
}else{
    echo mysqli_error($koneksi);
}

?>