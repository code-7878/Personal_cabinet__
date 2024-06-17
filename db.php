<?php
$servername = "localhost"; // адрес сервера базы данных
$username = "root"; // имя пользователя базы данных
$password = "root"; // пароль пользователя базы данных
$dbname = "cabinet"; // название базы данных

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>