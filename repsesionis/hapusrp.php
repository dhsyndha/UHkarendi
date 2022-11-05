<?php
require 'functions.php';
$id = $_GET["id"];


if(hapusRepse($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil dihapus');
        window.location = 'repse.php';
    </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert('data gagal dihapus')
            window.location = 'repse.php';
        </script>
        ";
}

?>