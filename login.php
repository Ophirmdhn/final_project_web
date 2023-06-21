<?php
    // include 'koneksi.php';
    // session_start();

    // if (isset($_SESSION['username'])) {
    //     header("Location : dashboard.php");
    // }
?>

<?php
    include 'koneksi.php';
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
            </script>
            <?php
        }
    }
?>