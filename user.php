<?php
require_once('database.php');
$data = tampildataUser();
$nomor = 0;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Warna abu-abu muda */
        }
        .navbar {
            background-color: #6a0dad; /* Warna ungu */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* Warna putih */
        }
        .navbar-toggler-icon {
            background-color: #ffffff; /* Warna putih */
        }
        .table {
            background-color: #ffffff; /* Warna putih */
        }
        th, td {
            color: #212529; /* Warna hitam */
        }
        .btn-outline-dark {
            color: #212529; /* Warna hitam */
            border-color: #212529; /* Warna hitam */
        }
        .btn-outline-dark:hover {
            color: #ffffff; /* Warna putih */
            background-color: #212529; /* Warna hitam */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="user.php">User</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="barang.php">Barang</a></li>
                        <li><a class="dropdown-item" href="data_peminjaman.php">Data Peminjaman</a></li>
                        <li><a class="dropdown-item" href="peminjaman.php">Peminjaman</a></li>
                        <li><a class="dropdown-item" href="pengembalian.php">Pengembalian</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled</a>
                </li>
            </ul>
            <div class="container justify-content-end">
                <a href="logout.php"><button type="button" class="btn btn-outline-dark">Log Out</button></a>
            </div>
    </div>
</nav>
<h1 class="text-center" style="color: pink;">Data USER</h1>
<div class="container">
    <hr>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="color: black;">No</th>
                    <th scope="col" style="color: black;">id</th>
                    <th scope="col" style="color: black;">no_identitas</th>
                    <th scope="col" style="color: black;">nama</th>
                    <th scope="col" style="color: black;">status</th>
                    <th scope="col" style="color: black;">username</th>
                    <th scope="col" style="color: black;">password</th>
                    <th scope="col" style="color: black;">role</thred>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $item) : ?>
                    <?php $nomor++; ?>
                    <tr>
                        <th scope="row" style="color: pink;"><?php echo $nomor; ?></th>
                        <td style="color: pink;"><?php echo $item['id']; ?></td>
                        <td style="color: pink;"><?php echo $item['no_identitas']; ?></td>
                        <td style="color: pink;"><?php echo $item['nama']; ?></td>
                        <td style="color: pink;"><?php echo $item['status']; ?></td>
                        <td style="color: pink;"><?php echo $item['username']; ?></td>
                        <td style="color: pink;"><?php echo $item['password']; ?></td>
                        <td style="color: pink;"><?php echo $item['role']; ?></td>
                        <td>
                            <?php echo "<a href='edit_user.php?id=$item[id]' style='color: orange;'>Edit</a> | <a href='delete.php?id=$item[id]' style='color: red;'>Delete</a>"; ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
