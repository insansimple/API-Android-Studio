<?php

require_once "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

$result = $db->exec(sprintf("INSERT INTO `user`(username, `password`, nama_lengkap) VALUES('%s','%s','%s')", $username, $password, $nama_lengkap));
if ($result) {
    $result = array(
        'status' => 1,
        'message' => 'Data User Disimpan!'
    );
} else {
    $result = array(
        'status' => 0,
        'message' => $db->lastErrorMsg()
    );
}

$db->close();

header('Content-Type: application/json');
echo json_encode($result);
