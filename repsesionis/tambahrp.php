<?php
session_start();                            
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahRepse($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data berhasil ditambahkan');
            window.location = 'repse.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal ditambahkan');
            window.location = 'repse.php';
        </script>
        ";
    }
}

?>
<link rel="stylesheet" href="style.css">
    <div class="box">
        <h1>Tambah data</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control"><br><br>

            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control"><br><br>

            <label for="kelas">kelas</label>
            <input type="text" name="kelas" class="form-control"><br><br>

            <label for="password">password</label>
            <input type="password" name="password" class="form-control"><br><br>

            <label for="roles">Roles</label>
            <select name="roles" class="form-control">
                <option value="repsesionis">repsesionis</option>
                <option value="admin">admin</option>
            </select><br><br>

            <button type="submit" name="kirim">Tambah</button>
        </form>
    </div>