<?php
require 'conn.php';

function query($query){
    
    global $conn;
    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function votes($data){
    global $conn;

    $nama = $data['nama_pemilih'];
    $kelas = $data['kelas'];
    $voting = $data['voting'];

    $query = "INSERT INTO pemilih VALUES(NULL,'$nama','$kelas','$voting')";
    mysqli_query($conn,$query);

}
?>