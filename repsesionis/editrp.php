<?php 

require 'functions.php';

$id = $_GET["id"];
$repse = query("SELECT * FROM resepsionis WHERE id_repsesionis = '$id'")[0];

if(isset($_POST["submit"])){
    if(editRepse($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data berhasil diubah');
            window.location = 'repse.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gagal diubah');
            window.location = 'repse.php';
        </script>
        ";
    }
}

?>

<link rel="stylesheet" href="style.css">
<div class="main">
    <div class="box">
        <h1>Edit Data</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_repsesionis" value="<?= $repse["id_repsesionis"]; ?>">

            <label for="username">username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $repse["username"]; ?>"><br><br>
            
            <label for="nama_lengkap">nama_lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $repse["nama_lengkap"]; ?>"><br><br>

            <label for="kelas">kelas</label>
            <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $repse["kelas"]; ?>"><br><br>

            <label for="password">password</label>
            <input type="password" name="password" id="password" class="form-control" value="<?= $repse["password"]; ?>"><br><br>

            <label for="roles">Roles</label>
            <select name="roles" class="form-control" value="<?= $repse["roles"]; ?>">
                <option value="repsesionis">repsesionis</option>
                <option value="murid">murid</option>
            </select><br><br>

            <button type="submit" name="submit">Edit</button>
        </form>
    </div>
</div>