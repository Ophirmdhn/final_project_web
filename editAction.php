<?php
    include 'koneksi.php';
    $id_barang = $_GET['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $keterangan = $_POST['keterangan'];

    echo $nama_barang;
    $query = "UPDATE tb_barang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', jumlah_barang = '$jumlah_barang', keterangan = '$keterangan', waktu = current_timestamp() WHERE tb_barang.id_barang = '$id_barang'";
    if($hasil = mysqli_query($koneksi, $query)){
        ?>
        <script>
            alert('Pesanan Berhasil Diedit')
            window.location = 'data_barang.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Pesanan Gagal Diedit')
        </script>
        <?php
    }
?>