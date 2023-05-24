<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <b><a href="#">Home</a></b>
        <b><a href="login1.php">Login</a></b>
        <b><a href="logout.php">Logout</a></b>
    </div>
    <br><br><br><br><br>
    <div class="kotak1">
        <center>
        <button type="button" class="btn btn-outline-dark"><a href="halaman1.php">Edit pelanggan</a></button>
        </center>
    </div>
    <br><br>
    <div class="kotak2">
        <center>
        <button type="button" class="btn btn-outline-dark"><a href="user.php">Edit user</a></button>
        </center>
    </div>
</body>
</html>