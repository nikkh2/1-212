<?php
// данные бд 
$host = 'localhost'; // айпи локальный, бд и сайт на одном сервере
$dbname = 'u3076068_mamy_trahal';
$username = 'u3076068_dima228';
$password = 'loaderaw12';
// подключение к вашей бд, можете юзать ее для бота и приложения
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>