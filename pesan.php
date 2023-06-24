<?php
    include 'koneksi.php';

    $namaBarang = $_POST["nama_barang"];
    $jenisBarang = $_POST["jenis_barang"];
    $jumlahBarang = $_POST["jumlah_barang"];
    $keterangan = $_POST["keterangan"];
    
    $query = "INSERT INTO tb_barang (id_barang, nama_barang, jenis_barang, jumlah_barang, keterangan, waktu) VALUES ('', '$namaBarang', '$jenisBarang', '$jumlahBarang', '$keterangan', current_timestamp())";
    $sql = mysqli_query($koneksi, $query);
      
?>

<script>
    alert("Berhasil Memesan!");
    window.location = "dashboard.php #order";   
</script>