<?php
session_start();
require_once('datb.php');
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка Еды</title>
    <link rel="icon" href="tovarka/fons.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(56, 37, 2);
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
            color:rgb(22, 23, 24);
        }

        a:hover {
            color:rgb(22, 23, 24);
        }

        /* Шапка */
        header {
            background-color: #fff;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .header-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .header-nav li {
            margin-left: 20px;
        }

        .header-actions {
            display: flex;
            align-items: center;
        }

        .header-actions a {
            margin-left: 15px;
            padding: 8px 15px;
            border: 1px solid #007bff;
            border-radius: 5px;
        }

        .header-actions a:hover {
            background-color: #007bff;
            color: #fff;
        }


        /* Главный экран */
        .hero {
            text-align: center;
            padding: 40px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .search-form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .search-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            width: 300px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        /* Популярные рестораны */
        .popular-restaurants {
            margin-bottom: 30px;
        }

        .popular-restaurants h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
        }

        .restaurant-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            transition: box-shadow 0.2s ease;
        }

        .restaurant-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .restaurant-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .restaurant-card p {
            color: #666;
            margin-bottom: 10px;
        }

        .restaurant-card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .restaurant-card a:hover {
            background-color: #218838;
        }

        /* Категории */
        .categories {
            margin-bottom: 30px;
        }

        .categories h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
        }

        .category-list {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-list li {
            width: 150px; 
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.2s ease;
        }

        .category-list li:hover {
            background-color:rgb(172, 138, 138);
        }

        /* Footer */
        footer {
            background-color: #f0f0f0;
            padding: 20px 0;
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }
        .tort a:hover { 
            background-color:rgb(0, 179, 30);
            color: #fff;
        }
        .header-nav a:hover {
            background-color:rgb(89, 199, 184);
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav class="header-nav">
                <ul>
                    <li><a href="eda.php">Доставка Еды</a></li>
                </ul>
                <div class="header-actions">
                    <a href="regs.php">Создать аккаунт</a>
                    <a href="vxod.php">Войти</a>
                    <a href="#">Корзина (0)</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="hero">
            <h1>Вкусная еда у вас дома!</h1>
            <p>Закажите еду из лучших ресторанов Павловского Посада.</p>
            <img src="tovarka/fons.png" alt="" style="width: 10%; left: 295px; position: absolute; margin-top: -10%;">
            <form class="search-form">
                <ul>
                    <div class="tort" style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                        <li><a href="#start">🔔Доступные рестораны</a></li>
                    </div>
                </ul>
            </form>
        </section>

        <section class="popular-restaurants">
            <h2>Популярные рестораны</h2>

            <div class="restaurant-card">
                <h3>Мимино</h3>
                <p>Десерты,салаты,горячая еда. Доставка от 500р, среднее время доставки 45 мин.</p>
                <img src="tovarka/mimi.jpg" alt="тест" style="width: 15%; float: right; margin-top: -8%;">
                <a href="mimino.php">Перейти в ресторан</a>
            </div>

            <div class="restaurant-card">
                <h3>Пятёрочка</h3>
                <p>Пятёрочка - продукты питания. Доставка от 500р, реднее время доставки 20 мин.</p>
                <img src="id/pyt.jpg" alt="" style="width: 15%; float: right; margin-top: -7%;">
                <a href="#">Перейти в ресторан</a>
            </div>


        <section class="categories" id="start">
            <h2>Категории</h2>
            <ul class="category-list">
                <li><a href="mimino.php">Мимино</a></li>
                <li><a href="syhiwok.php">Суши Wok</a></li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="container">
            © 2025 furtus Доставка Еды. Все права защищены.
        </div>
    </footer>

</body>
</html>