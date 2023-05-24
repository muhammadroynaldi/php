<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
</head>
<body background="background.jpg">
    <style>
    body{
    background: lightgrey;
    font-family: 'Times New Roman', Times, serif;
    }
    .data{
    padding: 1em;
    margin: 2em auto;
    width: 17em;
    background: lightblue;
    border-radius: 8px;
    border: 5px solid black;
    }
    input[type="text"], [type="email"], [type="password"], [type="radio"]{
    padding: 8px;
    width: 94%;
    background: whitesmoke;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
    }
    .tombol{
    background: aqua;
    color: black;
    border: 2;
    padding: 5px 8px;
    }
    </style>
<center>
    <h2>==== Registrasi ====</h2>
    <p>Hallo, Silahkan Registrasi di Sini</p>
</center>
<div class="data">
<form action="" method="POST">
<div>
<label for="nama">Username: </label><br>
<input type="text" name="nama"><br>
</div>
<div>
<label for="email">Email: </label><br>
<input type="email" name="email"><br>
</div>
<div>
<label for="telepon">Telepon: </label><br>
<input type="text" name="telepon"><br>
</div>
<div>
<label for="password">Password:</label><br>
<input type="password" name="password"><br>
</div>
<div>
<label for="Peran">Peran: </label><br>
<input type="text" name="peran" id="peran">
</div>
<div>
<input type="submit" name="register" value="Register"
class="tombol">
</div>
</form>
<?php
if(isset($_POST['register'])){
$username = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$telepon = htmlspecialchars($_POST['telepon']);
$password = htmlspecialchars($_POST['password']);
$encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
$login_status = htmlspecialchars($_POST['peran']);
//mengecek ada email yang sama atau tidak
$query = mysqli_query($conn, "SELECT email from user WHERE
email='$email'");
$count = mysqli_num_rows($query);
if($count > 0){
echo "Tidak bisa melakukan registrasi karena email ini sudah
terdaftar, silahkan <a href=login1.php>Login</a>";
}
else{
    $queryinsert = mysqli_query($conn, "INSERT INTO user
(nama_user, email, telepon, password, peran) VALUES ('$username', '$email',
'$telepon', '$encryptedpassword', '$login_status')");
if($queryinsert){
echo "Anda Sudah Register, Silahkan <a
href=login1.php>Login</a>";
}
}
}
?>
</div>
</body>
</html>