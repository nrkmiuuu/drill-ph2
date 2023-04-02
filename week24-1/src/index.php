<?php

$host = "db"; #ここにhostを指定する
$dbname = "posse";
$user = "root";
$password = "password";

try {
    $pdo = new PDO(
        "mysql:dbname=$dbname;host=$host;charset=utf8mb4",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
    echo("接続成功");
} catch (PDOException $e) {
    exit($e->getMessage()); 
}

// docker compose upするとエラーが発生します
// エラー解消するためにはindex.phpの3行目でhost指定をする必要があります。
// 適切なhostを指定してください。
// hostを指定し、画面に接続成功と表示されること
