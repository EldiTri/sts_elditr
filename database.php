<?php 
session_start(); // Mulai session

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');
define ('DB_NAME', 'sts_elditr');

$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Periksa koneksi database
if (mysqli_connect_errno()) {
    die("Gagal terhubung dengan Database: " . mysqli_connect_error());
}

function tampildata() {
    global $koneksi;
    $hasil = mysqli_query($koneksi,"SELECT id, kode_brg, nama_brg, kategori, merk, jumlah from barang ");
    $rows = [];
    if ($hasil) {
        while($row = mysqli_fetch_assoc($hasil)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function tampildataUser() {
    global $koneksi;
    $hasil = mysqli_query($koneksi,"SELECT id, no_identitas, nama, status, username, password, role from user ");
    $rows = [];
    if ($hasil) {
        while($row = mysqli_fetch_assoc($hasil)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function show_barang() {
    global $koneksi;
    $hasil = mysqli_query($koneksi,"SELECT barang.id, barang.kode_brg, barang.nama_brg, barang.kategori, barang.merk, barang.jumlah from barang");
    $rows = [];
    if ($hasil) {
        while($row = mysqli_fetch_assoc($hasil)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function show_catatan_user($id_user) {
    global $koneksi;
    $hasil = mysqli_query($koneksi,"SELECT * FROM notes WHERE id_user='$id_user';");
    $rows = [];
    if ($hasil) {
        while($row = mysqli_fetch_assoc($hasil)) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function inputdata($inputdata) {
    global $koneksi;
    $sql = mysqli_query($koneksi, $inputdata);
    return $sql;
}

function Editdata($tablename, $id) {
    global $koneksi;
    $hasil = mysqli_query($koneksi,"select * from $tablename where id='$id'");
    return $hasil;
}

function update($table, $data, $id) {
    global $koneksi;
    $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}

function Delete($tablename, $id) {
    global $koneksi;
    $hasil = mysqli_query($koneksi,"delete from $tablename where id='$id'");
    return $hasil;
}

function cek_login($username, $password) {
    global $koneksi; 
    $uname = $username;
    $upass = $password;      
    $hasil = mysqli_query($koneksi,"select * from user where username='$uname' and password=md5('$upass')");
    $cek = mysqli_num_rows($hasil);
    if ($cek > 0 ) {
        $query = mysqli_fetch_array($hasil);
        $_SESSION['id'] = $query['id'];
        $_SESSION['username'] = $query['username'];
        $_SESSION['role'] = $query['role'];
        return true;        
    } else {
        return false;
    }   
}

?>  
