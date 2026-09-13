<?php

function renderHeader() {?>
    <header class="main-header">
            <div class="header-left" onclick="goBackToLanding()" title="Вернуться на стартовую">
                <img src="/logo.png" alt="HARD Roleplay" class="header-logo">
                <div class="header-brand">
                    <span class="brand-hard">HARD</span>
                    <span class="brand-divider">|</span>
                    <span class="brand-houston">HOUSTON</span>
                </div>
            </div>

            <nav class="header-nav">
                <a href="/" class="nav-link">Главное меню</a>
                <a href="/lore" class="nav-link">Лор города</a>
                <a href="/fractions" class="nav-link">Фракции и правила</a>
                <a href="/professions" class="nav-link">Профессии</a>
                <a href="/map" class="nav-link">Карта города</a>
                <a href="/news" class="nav-link">Новости</a>
                <a href="/changes" class="nav-link">Изменения</a>
                <a href="/forum" class="nav-link">Форум</a>
           </nav>

            <div class="header-right">
                <div class="theme-toggle-box"></div>
                <button class="btn-login" id="openLoginBtn">ВОЙТИ</button>
            </div>
        </header>
<?php }

function renderLogin() {?>
    <div class="modal-overlay" id="loginModal">
        <div class="modal-window">
            <button class="modal-close" id="closeLoginBtn">✕</button>
            
            <div class="modal-tabs">
                <button class="modal-tab active" data-tab="login">Вход</button>
                <button class="modal-tab" data-tab="register">Регистрация</button>
            </div>

            <form method="POST" action="/auth.php" class="modal-form active" id="form-login">
              <h2>Вход в аккаунт</h2>
              <input type="hidden" name="action" value="login">
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Пароль" required>
              <button type="submit" class="btn-primary">Войти</button>
           </form>

            <form method="POST" action="/auth.php" class="modal-form" id="form-register">
              <h2>Регистрация</h2>
                <input type="hidden" name="action" value="register">
                <input type="text" name="first_name" placeholder="Имя" required>
                <input type="text" name="last_name" placeholder="Фамилия" required>
                <input type="number" name="age" placeholder="Возраст" min="14" max="99" required>
               <input type="text" name="steam_id" placeholder="Steam ID" required>
               <input type="email" name="email" placeholder="Email" required>
               <input type="password" name="password" placeholder="Пароль" required>
               <input type="password" name="password2" placeholder="Повторите пароль" required>
               <button type="submit" class="btn-primary">Создать аккаунт</button>
           </form>
        </div>
    </div>
<?php }

?>