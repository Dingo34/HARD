<?php
require_once '../bootstrap/view.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>НАЗВАНИЕ — HARD Roleplay</title>
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
        <!-- СЮДА ВСТАВЬ СОДЕРЖИМОЕ ИЗ СТАРОГО HTML (между <header> и <footer>) -->
    </div>

    <footer class="main-footer">
        <div class="footer-brand"><span>HARD</span><span class="footer-divider">|</span><span>HOUSTON</span></div>
    </footer>

    <?php renderLogin(); ?>

    <script src="/toggle.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>