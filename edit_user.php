<?php
    include "database.php";
    $data = editdata("user", $_GET['id']);
    

    if(isset($_POST['edit']))       {
        mysqli_query($koneksi, "update user set
        no_identitas = '$_POST[kno_identitas]',
        nama = '$_POST[nama]',
        status = '$_POST[status]',
        username = '$_POST[username]',
        password = '$_POST[password]',
        role = '$_POST[role]'
        where id = '$_GET[id]'");
        
        header("location: user.php");
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
    <?php  while($user = mysqli_fetch_array($data)) : ?>
    <form action="" method="POST">
        <input type="text" name="no_identitas" value="<?php echo $user['no_identitas'] ?>">
        <input type="text" name="nama" value="<?php echo $user['nama'] ?>">
        <input type="text" name="status" value="<?php echo $user['status'] ?>">
        <input type="text" name="username" value="<?php echo $user['username'] ?>">
        <input type="password" name="password" value="<?php echo $user['password'] ?>">
        <input type="text" name="role" value="<?php echo $user['role'] ?>">
        <input type="submit" name="edit">
    </form>
    <?php  endwhile ?>
</body>
</html>