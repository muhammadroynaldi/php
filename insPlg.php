<?php
include "koneksi1.php";
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$alamat=$_POST['talamat'];
$telp=$_POST['ttelp'];
{
$sql = "INSERT INTO pelanggan (id, nama, alamat, telp) VALUES ('$id','$nama','$alamat','$telp')";
if($conn->query($sql) === TRUE){
$conn->close();
header("location:halaman1.php");
}
else{
$conn->close();
echo "New records failed";
}
}
?>