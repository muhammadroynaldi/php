<?php
include "koneksi1.php";
$id=$_GET['id'];
$sql="SELECT * FROM pelanggan WHERE id='$id'";
$hasil=$conn->query($sql);
while($row=$hasil->fetch_assoc()){
$nama=$row["nama"];
$alamat=$row["alamat"];
$telp=$row["telp"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-
    1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body background="background.jpg">
<style>
 .topnav{
    overflow: hidden;
    background-color: black;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    opacity: 0.7;
    }
    .topnav a{
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 16.5px 40px;
    text-decoration: none;
    }
    .topnav a:hover{
    background-color: grey;
    color: black;
    }
    .panjang{
    width: 70%;
    margin-top: 100px;
    }
</style>
    <div class="topnav">
        <b><a href="home.php">Home</a></b>
        <b><a href="login1.php">Login</a></b>
        <b><a href="logout.php">Logout</a></b>
    </div>
<center>
<div class="panjang">
<h1 align="left" style="margin-bottom:30px">Edit Data Pelanggan</h1>
<form action="updPlg.php" method="post" enctype="multipart/form-data">
    <table class="table table-dark table-hover cols-6 rows-6">
    <tr>
        <td>ID</td>
        <td>:</td>
        <td><input type="text" name="tid" id="tid" value="<?= $id; ?>"readonly></td>
        <td></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="tnama" id="tnama" value="<?= $nama;
        ?>"></td>
        <td></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="talamat" id="talamat" value="<?= $alamat;
        ?>"></td>
        <td></td>
    </tr>
    <tr>
        <td>Telp</td>
        <td>:</td>
        <td><input type="text" name="ttelp" id="ttelp" value="<?= $telp;
        ?>"></td>
        <td></td>
    </tr>
    </table>
    <input type="submit" value="update">
</form>
</div>
</center>
</body>
</html>