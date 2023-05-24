<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
<div class="data">
<form action="" method="POST">
<div>
<label for="email">Email: </label><br>
<input type="email" name="email"><br>
</div>
<div>
<label for="password">Password:</label><br>
<input type="password" name="password"><br>
</div>
<div>
<label for="peran">Login Sebagai: </label><br>
<input type="text" name="peran" id="peran">
</div>
<div>
<input type="submit" name="login" value="Login" class="tombol">
</div>
</form>
<p>Belum memiliki akun? Silahkan <a href="register.php">Register</a></p>
<?php
if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $login_status = $_POST['peran'];
    $alldata = mysqli_query($conn, "SELECT * FROM user");
    $query = mysqli_query($conn, "SELECT email, peran from user WHERE email='$email' AND peran='$login_status'");
    $count = mysqli_num_rows($query);
if($count > 0){
    //jika email ditemukan dan ada di database
    $data = mysqli_fetch_array($query);
    $data2 = mysqli_fetch_array($alldata);
    //mengecek password sesuai atau tidak
    if(password_verify($password, $data2['password'])){
    //cek jika user login sebagai Admin
    if($data['peran']=="user"){
    header("location:home.php");
    }
    else{
    echo "your password invalid";
    }
    }
    }
    else{
    echo "your account not exist <a href=register.php>klik untuk
    registrasi</a>";
    }
}
?>
</div>
</body>
</html>