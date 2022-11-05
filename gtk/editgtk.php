<?php 

require 'functions.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editGtk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data berhasil diubah');
            window.location = 'gtk.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal diubah');
            window.location = 'gtk.php';
        </script>
        ";
    }
}

?>

<link rel="stylesheet" href="style.css">
<div class="main">
    <div class="box">
        <h1>Edit Data</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>">
            
            <label for="nama_lengkap">nama lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"]; ?>"><br><br>

            <label for="roles">Roles</label>
            <select name="roles" class="form-control" value="<?= $gtk["roles"]; ?>">
                <option value="Kepala sekolah">Kepala sekolah</option>
                <option value="Wakil Kepala sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">guru</option>
            </select><br><br>

            <label for="foto">foto</label>
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $gtk["foto"]; ?>"><br><br>

            <button type="submit" name="kirim">Edit</button>
        </form>
    </div>
</div>