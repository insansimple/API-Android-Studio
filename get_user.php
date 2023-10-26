<?php

require_once "koneksi.php";

$result = $db->query("SELECT * FROM `user`");

$data = [];

while ($row = $result->fetchArray()) {
    $data[] = [
        "user_id" => $row["user_id"],
        "username" => $row["username"],
        "password" => $row["password"],
        "nama_lengkap" => $row["nama_lengkap"],
    ];
}

$db->close();

header('Content-Type: application/json');
echo json_encode($data);
