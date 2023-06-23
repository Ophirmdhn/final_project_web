<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Waktu Pemesanan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $tampil = mysqli_query ($koneksi, "SELECT * FROM tb_barang");
        while ($data = mysqli_fetch_array($tampil)):
        ?>
        <tr>
            
            <td><?php echo $data['id_barang']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['jenis_barang']; ?></td>
            <td><?php echo $data['jumlah_barang']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td><?php echo $data['waktu']; ?></td>
        </tr>
    </tbody>
    </table> 
</body>
</html>