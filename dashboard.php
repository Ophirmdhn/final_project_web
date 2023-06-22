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
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bolder" href="#">Tiki - Toko</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-auto">
                <a class="nav-link active mx-3" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#">Service</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <button class="btn btn-primary ms-5" type="submit"><a href="logout.php">Logout</a></button>
        </form>
        </div>
    </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>