<?php
echo "<br><br><br>";
include "koneksi.php";
if(isset($_GET['id'])){
$kode = $_GET['id'];
}
else{
die ("Error. NO Id Selected! ");
}
?>
<html>
<head>
    <title>Delete Barang</title>
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
<?php
if (!empty($kode) && $kode != "") {
$query = "DELETE FROM user WHERE id='$kode'";
$sql = mysqli_query ($conn,$query);
if ($sql) {
echo "<h2><font color=blue>Data telah berhasil
dihapus</font></h2>";
}
else {
echo "<h2><font color=red>Data gagal dihapus</font></h2>";
}
echo "Klik <a href='user.php'>disini</a> untuk kembali ke halaman
display user";
}
else {
die ("Access Denied");
}
?>
</body>
</html>