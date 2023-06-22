<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION ['username'])){
    header ("Location : dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Login</title>
    </head>
    <body>
    <div class="container">
        <h1>Selamat Datang!</h1>
        <p>Silahkan masuk ke akun anda</p>
        <form action="" method="POST"> <!-- hapus action kalau ingin menggabung file login ke index-->
            <p>Username</p>
            <input type="text" placeholder="Masukan Username" name="username">
            <p>Password</p>
            <input type="password" placeholder="Masukan Password" name="password">
       
            <button type="submit" name="submit">Login</button>
        
        <div class="register">
        Belum punya akun? <a href="register.php">Daftar disini!</a>
        </div>
        </form>
    </div>
    </body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
        $sql = mysqli_query($koneksi, $query);

        if ($sql -> num_rows > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['username'] = $row['username'];
            ?>
            <script>
                alert("Login Berhasil!");
                window.location = 'dashboard.php';
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Username atau Password anda salah! silahkan coba lagi.");
                window.location = 'index.php';
            </script>
            <?php
        }
    }
?>
