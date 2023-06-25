<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bolder" href="#">Tiki - Toko</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-auto">
                <a class="nav-link active mx-3" aria-current="page" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#team">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#order">Order</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <a class="btn btn-outline-dark ms-4" href="logout.php" role="button">Logout</a>
        </form>
        </div>
    </div>
    </nav>

    <!-- Main -->
    <main>
        <div class="p-md-5 m-md-3 bg-body"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body">
            <div class="p-lg-5 mx-auto my-auto">
                <h1 class="display-3 fw-bold">Selamat Datang, <?php echo $_SESSION["username"];?></h1>
                <h3 class="fw-normal text-muted mb-3">Selamat menjelajah di toko kami, semoga harimu menyenangkan!</h3>
            </div>
        </div>
        <div class="p-md-5 m-md-3 bg-body"></div>

        <!-- About -->
        <div class="p-md-5 m-md-0 bg-secondary" id="about"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-secondary">
            <div class="col-md-7 p-lg-5 mx-auto my-5">
                <h1 class="display-5 fw-bold text-white">About</h1>
                <h3 class="fw-normal text-white mb-3">
                    Tiki - Toko adalah toko yang menyediakan bahan kebutuhan anda, yang menarik dari toko ini 
                    adalah anda bisa meminta/memesan barang yang anda inginkan (Pre Order).
                </h3>
            </div>
        </div>
        <div class="p-md-5 m-md-0 bg-secondary"></div>

        <!-- Team -->
        <div class="p-md-3 m-md-0 bg-body" id="team"></div>
        <div class="position-relative overflow-hidden p-2 p-md-2 m-md-3 text-center bg-body">
            <div class="p-lg-5 mx-auto my-auto">
                <h1 class="display-4 fw-bold mb-4">Team</h1>
                <h2 class="fw-bold mb-4">Kelompok III</h2>
                <div class="row px-5">
                    <div class="col">
                        <img class="rounded-circle shadow-4-strong mb-3" style="width: 180px; box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8); border: 7px solid white;" alt="Foto" src="assets/kasim.jpg"/>
                        <h4 class="fw-bold mb-3">Laode Kasim</h4>
                    </div>                        
                    <div class="col">
                          <img class="rounded-circle shadow-4-strong mb-3" style="width: 180px; box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8); border: 7px solid white;" alt="Foto" src="assets/hajrin.jpg"/>
                        <h4 class="fw-bold mb-3">Hajrin</h4>
                    </div>
                    <div class="col">
                        <img class="rounded-circle shadow-4-strong mb-3" style="width: 180px; box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8); border: 7px solid white;" alt="Foto" src="assets/poto.jpg"/>
                        <h4 class="fw-bold mb-3">Dwi Ophi Ramadhan</h4>
                    </div>
                    <div class="col">
                        <img class="rounded-circle shadow-4-strong mb-3" style="width: 180px; box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8); border: 7px solid white; rotate: -40deg;" alt="Foto" src="assets/ryan.jpg"/>
                        <h4 class="fw-bold mb-3">Ryan Hardi Saputra</h4>
                    </div>
                    <div class="col">
                        <img class="rounded-circle shadow-4-strong mb-3" style="width: 180px; box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8); border: 7px solid white;" alt="Foto" src="assets/agil.jpg"/>
                        <h4 class="fw-bold mb-3">Muh. Said Agil</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-md-5 m-md-3 bg-body"></div>

        <!-- Order -->
        <div class="p-md-5 m-md-0 bg-secondary" id="order"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-secondary">
            <div class="col-md-9 p-lg-5 mx-auto my-auto">
                <h1 class="display-5 fw-bold text-white">Order</h1>
                <h3 class="fw-normal text-white mb-3">
                    Kami akan menyediakan barang yang anda inginkan!
                    silahkan pilih menu di bawah ini untuk melakukan pemesanan.
                </h3>
                <form class="" role="search">
                     <a class="btn btn-light mx-2" href="order.php" role="button">Buat Pesanan</a>
                     <a class="btn btn-light mx-2" href="data_barang.php" role="button">Pesanan Saya</a>
                </form>
            </div>
        </div>
        <div class="p-md-5 m-md-0 bg-secondary"></div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>