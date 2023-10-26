<?php

try {
    $db = new SQLite3('database.db');
    if (!$db) {
        $response = array(
            "status" => 0,
            "message" => "Koneksi Gagal!"
        );
    }
} catch (Exception $e) {
    $response = array(
        "status" => 0,
        "message" => "Koneksi Gagal"
    );
}

header("Content-Type: application/json");
echo $response;

if (isset($response)) exit;
