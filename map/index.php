<?php
require_once '../bootstrap/view.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта города — HARD Roleplay</title>
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
        <div class="page-label">04 / КАРТА ГОРОДА</div>
        <h1 class="page-title">КАРТА<br>ХЬЮСТОНА.</h1>
        <p class="page-description">
            Изучи ключевые локации города — от делового центра до опасных районов. 
            На карте отмечены важные объекты: больницы, полицейские участки, бизнесы.
        </p>

        <div class="empty-state">
            <div class="empty-icon">🗺️</div>
            <h3 class="empty-title">КАРТА В РАЗРАБОТКЕ</h3>
            <p class="empty-text">Интерактивная карта города появится в ближайшее время. Следите за обновлениями в разделе «Новости».</p>
        </div>

        <div class="cards-grid" style="margin-top: 40px;">
            <div class="content-card"><div class="card-number">ЗОНА 01</div><h3 class="card-title">ДАУНТАУН</h3><p class="card-text">Деловой центр города. Офисы, банки, рестораны.</p></div>
            <div class="content-card"><div class="card-number">ЗОНА 02</div><h3 class="card-title">ПОРТ</h3><p class="card-text">Промышленная зона с доками. Контрабанда, чёрный рынок, склады.</p></div>
            <div class="content-card"><div class="card-number">ЗОНА 03</div><h3 class="card-title">ПРИГОРОД</h3><p class="card-text">Спокойные жилые районы. Здесь живут обычные семьи.</p></div>
            <div class="content-card"><div class="card-number">ЗОНА 04</div><h3 class="card-title">ГЕТТО</h3><p class="card-text">Опасный район. Банды, наркотики, перестрелки.</p></div>
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