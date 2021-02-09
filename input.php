<?php
include "koneksi.php";

$nama =$_POST['nama'];
$prodi =$_POST['prodi'];
$semester =$_POST['semester'];
$pesan =$_POST['pesan'];

$sql = "INSERT INTO `pesankontak` (`nama`, `prodi`, `semester`, `pesan`) VALUES ('$nama', '$prodi', '$semester', '$pesan');";

$masuk = mysqli_query($conn, $sql);

if($masuk) {
	echo '<script>alert("Berhasil");document.location="index.php";</script>';
    
    mysqli_close($conn);
} else {
	echo '<script>alert("Gagal");document.location="index.php";</script>';
	
	mysqli_close($conn);
}
?>