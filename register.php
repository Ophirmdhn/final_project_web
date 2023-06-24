<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Akun!</h1>
        <p>Silahkan isi form dibawah ini</p>
        <form action="regis.php" method="POST">
            <p>Nama Lengkap</p>
            <input type="text" placeholder="Masukan nama lengkap" name="nama_lengkap">
            <p>Username</p>
            <input type="text" placeholder="Masukan username" name="username">
            <p>Alamat</p>
            <input type="text" placeholder="Masukan alamat" name="alamat">
            <p>No. Hp</p>
            <input type="text" placeholder="Masukan No. telepon" name="no_hp">
            <p>Buat Password</p>
            <input type="text" placeholder="Masukan Password" name="password">
            <button type="submit" name="register">Daftar</button>
       </form>
    
        <div class="register"></div>
    </form>
</body>
</html>