<?php
session_start();
require_once('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
    if ($password != $confirm_password) {
        echo "Пароли не совпадают.";
    } else {
        // Проверка, не существует ли уже пользователь с таким логином
        $sql_check = "SELECT id FROM users WHERE login = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $login);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            echo "Пользователь с таким логином уже существует.";
        } else {

            $sql_insert = "INSERT INTO users (login, password) VALUES (?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);


            $stmt_insert->bind_param("ssi", $login, $password);

            if ($stmt_insert->execute()) {
                $user_id = $conn->insert_id; 

                $_SESSION['user_id'] = $user_id;
                
                header("Location: index.php");
                exit();
            } else {
                echo "Ошибка при регистрации: " . $stmt_insert->error;
            }
        }
    }
}
?>