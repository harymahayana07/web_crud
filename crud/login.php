<?php
session_start();
require 'conn.php';
if(isset($_POST['login'])){

$username = $_POST['txtusername'];
$password = sha1($_POST['txtpassword']);

$query = mysqli_query($koneksi ,"SELECT * FROM users WHERE username='$username' and password='$password'");

if(mysqli_num_rows($query)===1){
    $data = mysqli_fetch_object($query);
    $_SESSION['login']=true;
    $_SESSION['fullname']=$data->fullname;
    $_SESSION['role']=$data->role;

    header('location:index.php');
}
echo $error = 'Username atau password salah';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <div class="card card-body">
                <h3>Login Form</h3>
                <form action="" method="post">
                     <input type="text" name="txtusername" class="form-control mb-3" placeholder="Masukan Username">
                     <br>
                        <input type="password" name="txtpassword" class="form-control mb-3" placeholder="Masukan Password">
                        <br>
                         <input type="submit" value="login" name="login" class="btn btn-primary">
                         </form>
                </div>
            </div>
        </div>
</div>
   
</body>
</html>