<?php
include "table.php";
$host = '141.11.252.8';
$dbname = 'server_kharkiv';
$user = 'server_kharkiv';
$pass = '7Xcb2PYiipK4irML';
$charset = 'utf8';

$dsn = "mysql:host=$host;port=3306;dbname=$dbname;charset=$charset";
$opt = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $db = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    die('[FRANON_JONSON] Подключение не удалось: ' . $e->getMessage());
}

$sql = "SELECT * FROM ucp_settings";
$statement = $db->prepare($sql);
$statement->execute ();
$ucp_settings = $statement->fetch();