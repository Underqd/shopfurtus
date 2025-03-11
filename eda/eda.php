<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас -  Доставка Еды "Furtus"</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(0, 0, 0);
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #116080;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .restaurant-card {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #68bb1b;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 10px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .feature img {
            width: 100px;
            height: auto;
            margin-right: 20px;
            border-radius: 50%;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.8em;
        }
        .icon-back {
            width: 95px; 
            height: auto;
        }
        .restaurant-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            opacity: 0; 
            transform: translateY(20px); 
            transition: opacity 0.6s ease, transform 0.6s ease; 
        }

        .restaurant-card h3 {
            margin-top: 0;
            color: #333;
        }

        .restaurant-card p {
            color: #666;
            line-height: 1.4;
        }

        .restaurant-card img {
            width: 15%;
            float: right;
            margin-top: -8%;
            border-radius: 4px; 
        }

        .restaurant-card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }


        .restaurant-card.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>


    <header>
        <h1>О нас - Доставка Еды "Furtus"</h1>
        <a href="/index.php" class="nazad">
            <img src="id/img.png" alt="" class="icon-back">
        </a>
    </header>

    <div class="restaurant-card">
        <h2>О нас</h2>
        <p>Добро пожаловать в "Furtus" - службу доставки еды, созданную с любовью к кулинарии и заботой о вашем комфорте. Мы стремимся принести вам самые вкусные и свежие блюда прямо к вашему порогу.</p>

        <p>Наша команда - это увлеченные профессионалы, которые любят готовить и делают это с удовольствием. Мы используем только отборные продукты, уделяя особое внимание качеству и свежести ингредиентов.  Каждое блюдо готовится по проверенным рецептам, чтобы удовлетворить самые изысканные вкусы.</p>

        <h2>Почему выбирают "Furtus"?</h2>

        <div class="feature">
            <img src="id/katch.png" alt="">
            <div>
                <h3>Качество и Свежесть</h3>
                <p>Мы тщательно отбираем продукты у проверенных поставщиков, чтобы гарантировать высокое качество каждого ингредиента.  Ваше здоровье и удовольствие - наш главный приоритет.</p>
            </div>
        </div>

        <div class="feature">
            <img src="id/raz.jpg" alt="">
            <div>
                <h3>Разнообразное Меню</h3>
                <p>Наше меню предлагает широкий выбор блюд на любой вкус: от классических закусок и горячих блюд до изысканных десертов и напитков.  Мы постоянно обновляем наше меню, чтобы радовать вас новыми гастрономическими открытиями.</p>
            </div>
        </div>

        <div class="feature">
            <img src="id/kyr.png" alt="">
            <div>
                <h3>Быстрая и Удобная Доставка</h3>
                <p>Мы ценим ваше время, поэтому обеспечиваем быструю и надежную доставку в указанное вами место.  Наши курьеры всегда вежливы и пунктуальны.  Мы используем современные технологии для отслеживания заказов и оптимизации маршрутов.</p>
            </div>
        </div>


        <h2>Наши преимущества:</h2>
        <ul>
            <li>Широкий ассортимент блюд</li>
            <li>Использование свежих и качественных продуктов</li>
            <li>Быстрая и удобная доставка</li>
            <li>Приятные цены и акции</li>
            <li>Профессиональные повара и вежливые курьеры</li>
        </ul>

        <h2>Контакты</h2>
        <p>
            Телефон:  <br>
            Email:  <br>
            Адрес:  [Адрес]
        </p>
    </div>

    <script>
        function animateCards() {
            const cards = document.querySelectorAll('.restaurant-card');

            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('show');
                }, index * 200); 
            });
        }


        window.onload = animateCards;
    </script>


</body>
</html>
