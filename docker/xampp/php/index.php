<?php
$host = 'db';
$dbname = 'testdb';
$user = 'testuser';
$pass = 'testpass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "接続に成功しました<br>";
} catch(PDOExcepton $e) {
    echo "接続エラー：" . $e->getMessage();
}

$stmt = $pdo->query("SELECT * FROM sample");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['id'] . " : " . $row['name'] . " : " . $row['price'];
    echo "<br>";
}

$pdo = null;
?>