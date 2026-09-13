<?php
require_once '../bootstrap/view.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фракции и правила — HARD Roleplay</title>
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
        <div class="page-label">02 / ФРАКЦИИ И ПРАВИЛА</div>
        <h1 class="page-title">ФРАКЦИИ<br>И ПРАВИЛА.</h1>
        <p class="page-description">
            В Хьюстоне существуют десятки фракций — от законопослушных до криминальных. 
            Каждая фракция имеет свою иерархию, цели и кодекс. Прежде чем вступить — изучи правила.
        </p>

        <div class="cards-grid">
            <div class="content-card"><div class="card-number">ГОСУДАРСТВО</div><h3 class="card-title">ПОЛИЦИЯ</h3><p class="card-text">Защита порядка, борьба с преступностью, патрулирование улиц. Строгая иерархия: от кадета до шефа.</p></div>
            <div class="content-card"><div class="card-number">ГОСУДАРСТВО</div><h3 class="card-title">МЕДИЦИНА</h3><p class="card-text">Скорая помощь, больница, спасатели. Работают в любое время суток, спасают жизни жителей города.</p></div>
            <div class="content-card"><div class="card-number">КРИМИНАЛ</div><h3 class="card-title">БАНДЫ</h3><p class="card-text">Уличные группировки, делящие территорию. Оружие, наркотики, грабежи — их основной доход.</p></div>
            <div class="content-card"><div class="card-number">КРИМИНАЛ</div><h3 class="card-title">МАФИЯ</h3><p class="card-text">Организованная преступность. Контролируют бизнес, игорный бизнес и контрабанду.</p></div>
            <div class="content-card"><div class="card-number">ПРАВИЛА</div><h3 class="card-title">ОСНОВНЫЕ ПРАВИЛА</h3><p class="card-text">Запрещено: DM, RK, TK, NonRP, MetaGaming. Обязательно: отыгрыш роли, уважение к игрокам.</p></div>
            <div class="content-card"><div class="card-number">ПРАВИЛА</div><h3 class="card-title">НАКАЗАНИЯ</h3><p class="card-text">За нарушение правил выдаются предупреждения, мут, бан. Апелляции рассматриваются в разделе «Форум».</p></div>
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