<?php

require '../koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
function tambahRepse($data){
    global $conn;

    $username = ($data["roles"]);
    $username = ($data["username"]);
    $nama_lengkap = ($data["nama_lengkap"]);
    $kelas = ($data["kelas"]);
    $roles = ($data["roles"]);
    
    $query = "INSERT INTO resepsionis VALUES(NULL, '$username','$nama_lengkap','$kelas','$password','$roles')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapusRepse($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM resepsionis WHERE id_repsesionis ='$id'");
    return mysqli_affected_rows($conn);
}
function editRepse($data){
    global $conn;

    $id = htmlspecialchars($data["id_repsesionis"]);
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $roles = ($data["roles"]);

    $query = "UPDATE resepsionis SET
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    roles = '$roles' WHERE id_repsesionis = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>
