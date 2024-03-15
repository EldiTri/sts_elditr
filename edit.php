<?php
    include "database.php";
    $data = editdata("barang", $_GET['id']);
    

    if(isset($_POST['edit']))       {
        mysqli_query($koneksi, "update barang set
        kode_brg = '$_POST[kode_brg]',
        nama_brg = '$_POST[nama_brg]',
        kategori = '$_POST[kategori]',
        merk = '$_POST[merk]',
        jumlah = '$_POST[jumlah]'
        where id = '$_GET[id]'");
        
        header("location: barang.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  while($barang = mysqli_fetch_array($data)) : ?>
    <form action="" method="POST">
        <input type="text" name="kode_brg" value="<?php echo $barang['kode_brg'] ?>">
        <input type="text" name="nama_barang" value="<?php echo $barang['nama_brg'] ?>">
        <input type="text" name="kategori" value="<?php echo $barang['kategori'] ?>">
        <input type="text" name="merek" value="<?php echo $barang['merk'] ?>">
        <input type="number" name="jumlah" value="<?php echo $barang['jumlah'] ?>">
        <input type="submit" name="edit">
    </form>
    <?php  endwhile ?>
</body>
</html>