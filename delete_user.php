<?php

require_once "koneksi.php";

$user_id = $_GET['user_id'];

$result = $db->query(sprintf("DELETE FROM `user` WHERE user_id = %d", $user_id));
if ($result) {
    $result = array(
        'status' => 1,
        'message' => 'Data User Dihapus!'
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
