<?php
session_start();
require 'functions.php';

$gtk = query("SELECT * FROM gtk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GTK</title>
</head>
<body>
    <div class="box">
    <h1>DATA GTK SMK JP 1</h1>
    <a href="tambahgtk.php" class="tambah">Tambah Data</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>nama lengkap</th>
            <th>roles</th>
            <th>foto</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($gtk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td><img src="../foto/<?= $data["foto"]; ?>" width="80px" alt=""></td>
                <td>
                    <a href="editgtk.php?id=<?= $data["id_gtk"];?>" class="edit">edit</a>
                    <a href="hapusgtk.php?id=<?= $data["id_gtk"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
    </div>
</body>
</html>