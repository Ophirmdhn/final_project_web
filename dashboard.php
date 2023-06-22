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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
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
                <a class="nav-link active mx-3" aria-current="page" href="#contact">Contact</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <a class="btn btn-outline-primary ms-5" href="logout.php" role="button">Logout</a>
        </form>
        </div>
    </div>
    </nav>

    <main>
        <div class="p-md-5 m-md-3 bg-body"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body">
            <div class="p-lg-5 mx-auto my-auto">
                <h1 class="display-3 fw-bold">Selamat Datang, <?php echo $_SESSION["username"];?></h1>
                <h3 class="fw-normal text-muted mb-3">Selamat menjelajah di toko kami, semoga harimu menyenangkan!</h3>
            </div>
        </div>
        <div class="p-md-5 m-md-3 bg-body"></div>

        <div class="p-md-5 m-md-0 bg-secondary"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-secondary">
            <div class="col-md-7 p-lg-5 mx-auto my-5">
                <h1 class="display-5 fw-bold text-white" id="about">About</h1>
                <h3 class="fw-normal text-white mb-3">
                    Tiki - Toko adalah toko yang menyediakan bahan kebutuhan anda, yang menarik dari toko ini 
                    adalah anda bisa meminta/memesan barang yang anda inginkan (Pre Order).
                </h3>
                <form class="" role="search">
                     <a class="btn btn-light" href="#" role="button">Buat Pesanan</a>
                </form>
            </div>
        </div>
        <div class="p-md-5 m-md-0 bg-secondary"></div>

        <div class="p-md-5 m-md-3 bg-body"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body" id="team">
            <div class="p-lg-5 mx-auto my-auto">
                <h1 class="display-5 fw-bold">Team</h1>
                <h3 class="fw-normal text-muted mb-3">Utiwi</h3>
            </div>
        </div>
        <div class="p-md-5 m-md-3 bg-body"></div>

        <div class="p-md-5 m-md-0 bg-secondary"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-secondary" id="contact">
            <div class="col-md-7 p-lg-5 mx-auto my-5">
                <h1 class="display-5 fw-bold text-white">Contact</h1>
                <h3 class="fw-normal text-white mb-3">
                    Utiwi
                </h3>
            </div>
        </div>
        <div class="p-md-5 m-md-0 bg-secondary"></div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>