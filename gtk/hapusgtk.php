<?php
require 'functions.php';
$id = $_GET["id"];

if(hapusGtk($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil dihapus');
        window.location = 'gtk.php';
    </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert('data gagal dihapus')
            window.location = 'gtk.php';
        </script>
        ";
}

?>