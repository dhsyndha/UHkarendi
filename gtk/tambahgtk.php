<?php
                         
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahGtk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data berhasil ditambahkan');
            window.location = 'gtk.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal ditambahkan');
            window.location = 'gtk.php';
        </script>
        ";
    }
}

?>

<link rel="stylesheet" href="style.css">
    <div class="box">
        <h1>Tambah data</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control"><br><br>

            <label for="job">job</label>
            <input type="text" name="job" class="form-control"><br><br>

            <label for="roles">Roles</label>
            <select name="roles" class="form-control">
                <option value="Kepala sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakepsek</option>
                <option value="Guru">Guru</option>
            </select><br><br>

            <label for="foto">foto</label>
            <input type="file" name="foto" id="foto" class="form-control"><br><br>

            <button type="submit" name="kirim">Tambah</button>
        </form>
    </div>