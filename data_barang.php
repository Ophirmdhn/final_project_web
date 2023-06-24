<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Pesanan</title>
</head>
<body>
    <div class="overflow-hidden p-3 p-md-5 mx-auto w-75 text-center">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Waktu Pemesanan</th>
            <th scope="col">Pilihan</th>
            </tr>
        </thead>

        <?php
            include 'koneksi.php';
            $query = "SELECT * FROM tb_barang";

            $hasil = mysqli_query($koneksi, $query);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $id_barang = $data['id_barang'];
                ?>
                <tbody>
                <tr>
                    <td><?php echo $data["id_barang"]; ?></td>
                    <td><?php echo $data["nama_barang"]; ?></td>
                    <td><?php echo $data["jenis_barang"]; ?></td>
                    <td><?php echo $data["jumlah_barang"]; ?></td>
                    <td><?php echo $data["keterangan"]; ?></td>
                    <td><?php echo $data["waktu"]; ?></td>
                    <td>
                        <a href="edit.php?id_barang=<?php echo $id_barang;?>" class="btn btn-warning" role="button">Edit Pesanan</a>
                        <a href="hapus.php?id_barang=<?php echo $id_barang;?>" class="btn btn-danger" role="button">Hapus Pesanan</a>
                    </td>
                </tr>
                </tbody>
                <?php
            }
        ?>
        </table>
        <a class="btn btn-dark mt-5" href="dashboard.php #order" role="button">Kembali</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>