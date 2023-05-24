<?php
include "koneksi1.php";
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$alamat=$_POST['talamat'];
$telp=$_POST['ttelp'];
{
$sql = "UPDATE pelanggan SET nama='$nama', alamat='$alamat', telp='$telp' WHERE id='$id'";
}
if($conn->query($sql)===TRUE){
$conn->close();
header("location:Halaman1.php");
}
else{
$conn->close();
header("location:Halaman1.php");
}
?>