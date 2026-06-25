<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $koneksi,
        "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit;
    }else{
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | Travel Agent Lokal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-wrapper">

<div class="login-box">

<div class="login-icon">
✈️
</div>

<h2>Travel Agent Lokal</h2>

<p>Selamat datang kembali</p>

<?php
if(isset($error)){
    echo "<p style='background:#ef4444;
    color:white;
    padding:10px;
    border-radius:10px;
    margin-bottom:20px;'>$error</p>";
}
?>

<form method="POST">

<input
type="text"
name="username"
placeholder="👤 Username"
required>

<input
type="password"
name="password"
placeholder="🔒 Password"
required>

<button
type="submit"
name="login"
class="login-btn">
Masuk
</button>

</form>

<div class="footer-login">
© 2026 Travel Agent Lokal
</div>

</div>

</div>

</body>
</html>