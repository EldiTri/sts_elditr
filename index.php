<?php
require_once('database.php');

// Mulai session hanya jika belum dimulai sebelumnya
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['status']) && $_SESSION['status'] == "login") { 
    header("location:home.php");
} else {
    if (isset($_POST['masuk'])) {  
        $username = $_POST['username'];
        if (cek_login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $username; 
            $_SESSION['status'] = "login"; 
            if ($_SESSION['role'] == "admin") { 
                header("location:home.php"); 
            } else if ($_SESSION['role'] == "member") {
                header("location:home.php"); 
            }
        } else {
            header("location:index.php?msg=gagal");
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STS - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #6a0dad; /* Warna ungu */
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #8a2be2; /* Warna ungu tua */
            border-color: #8a2be2; /* Warna ungu tua */
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #9400d3; /* Warna ungu lebih gelap */
            border-color: #9400d3; /* Warna ungu lebih gelap */
        }
        .form-check-label {
            color: #ffffff; /* Warna hitam */
        }
        .form-check-input:checked + .form-check-label::before {
            background-color: #8a2be2; /* Warna ungu tua */
            border-color: #8a2be2; /* Warna ungu tua */
        }
    </style>
</head>
<body>
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <h1 class="text-center text-blue">login</h1> <!-- Text hitam -->
                    <hr style="border-color: #ffffff;"> <!-- Garis hitam -->
                    <label for="username" class="form-label text-black">Username</label> <!-- Text hitam -->
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-balck">Password</label> <!-- Text hitam -->
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-white" for="exampleCheck1">Remember me</label> <!-- Text hitam -->
                </div>
                <button type="submit" class="btn btn-primary w-100" name="masuk">Masuk</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
