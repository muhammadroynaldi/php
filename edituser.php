<?php
include 'koneksi.php';
if(isset($_GET['id'])){
$kode = $_GET['id'];
$query="SELECT * FROM user WHERE id='$kode'";
$sql=mysqli_query($conn, $query);
while ($hasil = mysqli_fetch_array ($sql)){
$username = $hasil['nama_user'];
$email = $hasil['email'];
$telepon = $hasil['telepon'];
$password = $hasil['password'];
$login_status = $hasil['peran'];
}
}
else{
die ("Error. NO Id Selected! ");
}
if(isset($_POST['sub'])){
$username = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$telepon = htmlspecialchars($_POST['telepon']);
$password = htmlspecialchars($_POST['password']);
$encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
$login_status = htmlspecialchars($_POST['peran']);
$query = "UPDATE user SET nama_user='$username', email='$email',
telepon='$telepon', password='$password', peran='$login_status' WHERE
id='$kode'";
$sql=mysqli_query($conn, $query);
if($sql){
header("location:user.php");
}
else{
    header("location:user.php");
    }
}
?>
<html>
<head>
    <title>Tambah Barang</title>
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
<h2 align="left" style="margin-bottom:30px"><b>Edit Data User</b></h2>
<form action="" method="POST">
    <div>
        <label for="nama">Username: </label><br>
        <input type="text" name="nama" readonly value="<?php echo
    $username;?>"><br>
    </div>
    <div>
        <label for="email">Email: </label><br>
        <input type="email" name="email" value="<?php echo
    $email;?>"><br>
    </div>
    <div>
        <label for="telepon">Telepon: </label><br>
        <input type="text" name="telepon" value="<?php echo
    $telepon;?>"><br>
    </div>
    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password" value="<?php echo
    $password;?>"><br>
    </div>
    <div>
        <label for="Peran">Peran: </label><br>
        <input type="text" name="peran" id="peran" value="<?php echo
    $login_status;?>">
    </div>
    <div>
        <input type="submit" name="sub" value="Update" class="tombol">
        <input type="submit" name="reset" value="Reset" class="tombol">
    </div>
</form>
</div>
</center>
</body>
</html>