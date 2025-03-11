<html>

<meta content="Павловский Посад доставка еды. Павловский Посад еда" name="description">
<link rel="icon" href="img/dark.png" type="image/png">
<head>
    <title>Регистрация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('id/eds.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 95vh;
        }
        .container {
            background: DarkGrey;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 860px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="password"] {
            width: 120%;
            padding: 8px;
            margin-bottom: 14px;
            border: 9px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .button {
            display: block;
            margin-top: 50px;
            color: #007bff;
            text-decoration: none;
        }
        .button:hover {
            text-decoration: underline;
        }
        input {
            color:rgb(253, 30, 0);
        }
        .register-button {
            background-color: #4CAF50; 
            color: white; 
            padding: 15px 30px;
        }

        .register-button:hover {
            background-color: #367C39; 
        }
        .buttons {
            background-color:rgb(11, 3, 80); 
            color: white; 
            padding: 15px 30px;
        }
        label {
            color: black;
        
        }
        .icon-back {
            width: 95px; /* Или любой нужный размер кнопка "назад-фото" */
            height: auto;
        }
        
    </style>
</head>
<body>
    <form action="register.php" method="post">
        <label for="login">Логин:</label><br>
        <input type="text" id="login" name="login"><br><br>

        <label for="pass">Пароль:</label><br>
        <input type="password" id="password" name="password"><br><br> 
    </span>

        <label for="confirm_password">Подтвердите пароль:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>

        <button type="submit" class="register-button">Зарегистрироваться</button>

        <a href="vxod.php" class="buttons">Есть аккаунт</a><br>

        <a href="/index.php" class="nazad">
            <img src="id/img.png" alt="" class="icon-back">
        </a>

    </form>
</body>



</html>
