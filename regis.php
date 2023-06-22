<?php
    include 'koneksi.php';

    $namalengkap = $_POST["nama_lengkap"];
    $username = $_POST["username"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];

    $query = "INSERT INTO tb_user (id_user, nama_lengkap, username, alamat, no_hp, password) VALUES ('', '$namalengkap', '$username', '$alamat', '$no_hp', '$password')";

    $sql = mysqli_query($koneksi, $query);
?>

<script>
    alert("Pendaftaran Berhasil!");
    window.location = "index.php";
</script>




