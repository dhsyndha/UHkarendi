<?php
session_start();
require 'functions.php';

$repse = query("SELECT * FROM resepsionis");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Repsesionis</title>
</head>
<body>
    <div class="box">
    <h1>DATA REPSESIONIS SMK JP 1</h1>
    <a href="tambahrp.php" class="tambah">Tambah Data</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>username</th>
            <th>nama lengkap</th>
            <th>kelas</th>
            <th>roles</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($repse as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="editrp.php?id=<?= $data["id_repsesionis"];?>" class="edit">edit</a>
                    <a href="hapusrp.php?id=<?= $data["id_repsesionis"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
    </div>
</body>
</html>