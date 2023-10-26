<?php

require_once "koneksi.php";

$user_id = $_GET['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

$result = $db->query(sprintf("UPDATE `user` SET username='%s', `password`='%s', nama_lengkap='%s' WHERE user_id='%s'", $username, $password, $nama_lengkap, $user_id));
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
