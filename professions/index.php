<?php
require_once '../bootstrap/view.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профессии — HARD Roleplay</title>
    <link rel="icon" type="image/png" href="/logo.png?v=1">
    <link rel="stylesheet" href="/pages.css">
    <link rel="stylesheet" href="/toggle.css">
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-bg"></div>
    <div class="main-bg-overlay"></div>

    <?php renderHeader(); ?>

    <div class="page-container">
        <div class="page-label">03 / ПРОФЕССИИ</div>
        <h1 class="page-title">РАБОТА<br>В ГОРОДЕ.</h1>
        <p class="page-description">
            В Хьюстоне каждый может найти работу по душе. От простых профессий до элитных специальностей — 
            всё зависит от твоих навыков и амбиций.
        </p>

        <div class="cards-grid">
            <div class="content-card"><div class="card-number">БАЗОВЫЕ</div><h3 class="card-title">КУРЬЕР</h3><p class="card-text">Доставка грузов и посылок по городу. Стабильный доход, минимальные требования.</p></div>
            <div class="content-card"><div class="card-number">БАЗОВЫЕ</div><h3 class="card-title">ТАКСИСТ</h3><p class="card-text">Перевозка пассажиров. Знание города и хорошее вождение — твои главные навыки.</p></div>
            <div class="content-card"><div class="card-number">БАЗОВЫЕ</div><h3 class="card-title">МЕХАНИК</h3><p class="card-text">Ремонт автомобилей, тюнинг. Работа в автомастерской или своя СТО.</p></div>
            <div class="content-card"><div class="card-number">ЭЛИТНЫЕ</div><h3 class="card-title">БИЗНЕСМЕН</h3><p class="card-text">Открытие и управление бизнесом: кафе, магазин, автосалон.</p></div>
            <div class="content-card"><div class="card-number">ЭЛИТНЫЕ</div><h3 class="card-title">АДВОКАТ</h3><p class="card-text">Защита клиентов в суде, юридические консультации.</p></div>
            <div class="content-card"><div class="card-number">ЭЛИТНЫЕ</div><h3 class="card-title">ЖУРНАЛИСТ</h3><p class="card-text">Освещение событий города в СМИ.</p></div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="footer-brand"><span>HARD</span><span class="footer-divider">|</span><span>HOUSTON</span></div>
    </footer>

    <?php renderLogin(); ?>
    <script src="/toggle.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>