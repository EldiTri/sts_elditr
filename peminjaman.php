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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<center><h1>PEMINJAMAN</h1></center>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="booking-form">
                <form>
                    <div class="form-group">
                        <label for="destination" class="form-label">Nama</label>
                        <input id="destination" class="form-control" type="text" placeholder="">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="checkin" class="form-label">Tgl_peminjaman</label>
                                <input id="checkin" class="form-control" type="date" required>
                            </div>
                        </div>
                    <div class="col-sm-4">
    <div class="form-group">
        <label for="rooms" class="form-label">Nama_brg</label>
        <input id="rooms" class="form-control" type="text" value="1">
    </div>
</div>

                        <div class="col-sm-4">
    <div class="form-group">
        <label for="adults" class="form-label">Jenis</label>
        <input id="adults" class="form-control" type="text" placeholder="">
    </div>
</div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="children" class="form-label">Jumlah</label>
                                <select id="children" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select
                            </div>
                        </div>
                    </div>
                    <div class="form-btn text-center">
                        <button class="btn btn-primary">PINJAM</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>