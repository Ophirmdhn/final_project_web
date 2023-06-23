<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Buat Pesanan!</h1>
        <p>Silahkan isi form dibawah ini</p>
        <form action="pesan.php" method="POST">
            <p>Nama Barang</p>
            <input type="text" placeholder="Masukan nama barang" name="nama_barang">
            <p>Jenis Barang</p>
            <input type="text" placeholder="Masukan jenis barang" name="jenis_barang">
            <p>Jumlah Barang</p>
            <input type="text" placeholder="Masukan jumlah barang" name="jumlah_barang">
            <p>Keterangan</p>
            <input type="text" placeholder="Pilih kerterangan (PCS/PCK)" name="keterangan">
            <button type="submit" name="buat_pesanan">Pesan</button>
       </form>
    
        <div class="register"></div>
    </form>
</body>
</html>
