<?php
    include 'koneksi.php';
    $id_barang = $_GET['id_barang'];
    $query ="DELETE FROM tb_barang WHERE id_barang = '$id_barang'";
    $hasil = mysqli_query($koneksi, $query);
 
    if($hasil){
        echo"
        <script>
        alert('Pesanan Berhasil Dihapus')
        window.location = 'data_barang.php'
        </script>";
 
    } else {
        echo"
        <script>
        alert('Pesanan Gagal Dihapus!')
        window.location = 'data_barang.php'
        </script>";
    }
?>