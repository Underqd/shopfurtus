<?php
$servername = "localhost";
$username = "Имя базы";
$password = "Пароль базы";
$database = "Имя базы";

// тут соеденяем подкл..
$conn = new mysqli($servername, $username, $password, $database);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

?>
