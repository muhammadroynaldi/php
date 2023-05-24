<?php
include "koneksi1.php";
$id=$_GET['id'];
$sql = "DELETE FROM pelanggan WHERE id='$id'";
if($conn->query($sql) === TRUE){
    header("location:halaman1.php");
}
$conn->close();
echo "New records failed";
?>