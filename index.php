<?php
require_once 'bootstrap/view.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HARD Roleplay - Вход</title>
    <link rel="icon" type="image/png" href="logo.png?v=1">
    <link rel="icon" type="image/png" sizes="32x32" href="logo.png?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png?v=1">
    <link rel="shortcut icon" type="image/png" href="logo.png?v=1">
    <link rel="apple-touch-icon" href="logo.png?v=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="toggle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <div id="main-page" class="page-content">
        
        <div class="main-bg"></div>
        <div class="main-bg-overlay"></div>

        <?php renderHeader(); ?>

        <main class="main-body">

            <section class="steps-section">
                <div class="section-label">01 / С ЧЕГО НАЧАТЬ</div>
                <h2 class="section-title">ТРИ ШАГА<br>В ГОРОД.</h2>

                <div class="steps-grid">
                    <div class="step-card" onclick="stepAction(0)">
                        <div class="step-num">01</div>
                        <h3 class="step-title">СОЗДАЙ ПЕРСОНАЖА</h3>
                        <p class="step-text">Определи его характер, цели, профессию и место в городе.</p>
                    </div>
                    <div class="step-card" onclick="stepAction(1)">
                        <div class="step-num">02</div>
                        <h3 class="step-title">НАЙДИ СВОЙ РАЙОН</h3>
                        <p class="step-text">Изучи город и выбери среду, которая подходит твоей истории.</p>
                    </div>
                    <div class="step-card" onclick="stepAction(2)">
                        <div class="step-num">03</div>
                        <h3 class="step-title">НАЧНИ ИСТОРИЮ</h3>
                        <p class="step-text">Знакомься, работай, развивайся и влияй на окружающий мир.</p>
                    </div>
                </div>
            </section>

            <section class="welcome-section">
                <div class="welcome-left">
                    <div class="section-label">02 / О ПРОЕКТЕ</div>
                    <h2 class="welcome-title">Первая страница<br>для новых игроков</h2>
                    <p class="welcome-subtitle">Ознакомление с проектом и информация</p>
                </div>
                <div class="welcome-right">
                    <p class="welcome-description">
                        HARD Roleplay — это город, где каждый играет свою роль. 
                        Здесь ты найдёшь своё место среди копов, бандитов, бизнесменов 
                        и обычных жителей. Изучи правила, выбери сторону и начни свою историю.
                    </p>
                    <p class="welcome-description" style="margin-top: 15px;">
                        Наш проект создан для тех, кто ценит атмосферу, реализм и живую игру. 
                        Добро пожаловать в Хьюстон.
                    </p>
                </div>
            </section>

            <section class="features-section" id="features-section">
                <div class="section-label">03 / ПРОФЕССИИ И ВОЗМОЖНОСТИ</div>
                <h2 class="section-title">ЧТО ТЕБЯ<br>ЖДЁТ.</h2>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15 9H22L16 14L18 21L12 17L6 21L8 14L2 9H9L12 2Z" stroke="#d12c2c" stroke-width="1.8" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">УНИКАЛЬНЫЙ ЛОР</h3>
                        <p class="feature-text">Глубокая история города Хьюстон, прописанная до мелочей. Каждый район — своя атмосфера и свои правила.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="9" cy="7" r="4" stroke="#d12c2c" stroke-width="1.8"/>
                                <path d="M2 21V19C2 16.8 3.8 15 6 15H12C14.2 15 16 16.8 16 19V21" stroke="#d12c2c" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M16 3.13C17.5 3.5 18.5 4.8 18.5 6.3C18.5 7.8 17.5 9.1 16 9.5" stroke="#d12c2c" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M22 21V19C22 17.4 21 16 19.5 15.5" stroke="#d12c2c" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">ЖИВОЕ СООБЩЕСТВО</h3>
                        <p class="feature-text">Сотни игроков каждый день создают свои истории. Фракции, семьи, бизнес — всё взаимосвязано.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="6" width="20" height="12" rx="2" stroke="#d12c2c" stroke-width="1.8"/>
                                <path d="M2 10H22" stroke="#d12c2c" stroke-width="1.8"/>
                                <circle cx="6" cy="14" r="1.5" fill="#d12c2c"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">ЭКОНОМИКА</h3>
                        <p class="feature-text">Реалистичная экономика: работа, бизнес, инвестиции. Стань успешным или потеряй всё.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L3 7V12C3 17 7 21.5 12 22C17 21.5 21 17 21 12V7L12 2Z" stroke="#d12c2c" stroke-width="1.8" stroke-linejoin="round"/>
                                <path d="M9 12L11 14L15 10" stroke="#d12c2c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">ЧЕСТНАЯ ИГРА</h3>
                        <p class="feature-text">Администрация следит за порядком. Никакого читерства и нарушений — только честная ролевая игра.</p>
                    </div>
                </div>
            </section>

            <section class="stats-section" id="stats-section">
                <div class="section-label">04 / МОНИТОРИНГ</div>
                <h2 class="section-title">СТАТИСТИКА<br>СЕРВЕРА.</h2>

                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-icon"><span class="stat-symbol">0</span></div>
                        <div class="stat-caption">ГОРОД</div>
                        <div class="stat-name">Айпи</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon"><span class="stat-symbol">0</span></div>
                        <div class="stat-caption">КЛЮЧЕВЫХ РАЙОНОВ</div>
                        <div class="stat-name">Пик</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon"><span class="stat-symbol">0</span></div>
                        <div class="stat-caption">ИСТОРИЙ ИГРОКОВ</div>
                        <div class="stat-name">Онлайн</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-icon"><span class="stat-symbol">0</span></div>
                        <div class="stat-caption">ЭПОХА ПРОЕКТА</div>
                        <div class="stat-name">Время</div>
                    </div>
                </div>
                <div class="stats-note">Онлайн за день</div>
            </section>
            <footer class="main-footer">
                <img src="logo.png" alt="HARD" class="footer-logo">
                <div class="footer-brand">
                    <span>HARD</span>
                    <span class="footer-divider">|</span>
                    <span>HOUSTON</span>
                </div>
            </footer>

        </main>
    </div>

    <?php renderLogin(); ?>

    <div id="landing-page" class="landing-wrapper">
        <div class="animated-bg"></div>
        <div class="background-overlay"></div>
        
        <div class="particles">
            <span class="particle" style="--x: 8%;  --d: 0s;   --dur: 14s;"></span>
            <span class="particle" style="--x: 18%; --d: 3s;   --dur: 18s;"></span>
            <span class="particle" style="--x: 28%; --d: 6s;   --dur: 16s;"></span>
            <span class="particle" style="--x: 40%; --d: 1s;   --dur: 20s;"></span>
            <span class="particle" style="--x: 52%; --d: 8s;   --dur: 15s;"></span>
            <span class="particle" style="--x: 64%; --d: 4s;   --dur: 19s;"></span>
            <span class="particle" style="--x: 75%; --d: 10s;  --dur: 17s;"></span>
            <span class="particle" style="--x: 85%; --d: 2s;   --dur: 22s;"></span>
            <span class="particle" style="--x: 92%; --d: 7s;   --dur: 16s;"></span>
            <span class="particle" style="--x: 50%; --d: 12s;  --dur: 21s;"></span>
        </div>
        
        <div class="content">
            <div class="top-section">
                <h1 class="title">
                    <span class="white-text">HARD</span> 
                    <span class="red-text">Roleplay</span>
                </h1>
                <p class="subtitle">
                    Город, для заранее написанного фильма. Здесь встречаются копы, банды, обычные люди и тысячи других историй.
                </p>
            </div>

            <div class="bottom-section">
                <div class="buttons-row">
                    <button onclick="enterMainPage()" class="btn-primary">ВОЙТИ В ИСТОРИЮ</button>
                    <a href="https://discord.gg/sxBZKVJTCb" target="_blank" class="discord-link">
                        <img src="https://cdn-icons-png.flaticon.com/512/5968/5968756.png" alt="Discord" class="discord-icon">
                    </a>
                </div>
            </div>

            <div class="arrow-container" onclick="enterMainPage()">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5V19M12 19L19 12M12 19L5 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>

    <script>
        let isTransitioning = false;

        function enterMainPage() {
            if (isTransitioning) return;
            const mainPage = document.getElementById('main-page');
            if (mainPage.style.display === 'flex') return;
            isTransitioning = true;

            const landing = document.getElementById('landing-page');
            const mainBody = document.querySelector('.main-body');
            
            mainPage.style.display = 'flex';
            if (mainBody) mainBody.scrollTop = 0;
            
            landing.classList.add('slide-up');
            
            setTimeout(() => {
                landing.style.display = 'none';
                isTransitioning = false;
            }, 1000);
        }

        function goBackToLanding() {
            if (isTransitioning) return;
            const landing = document.getElementById('landing-page');
            if (landing.style.display === 'flex') return;
            isTransitioning = true;

            const mainPage = document.getElementById('main-page');
            landing.style.display = 'flex';
            void landing.offsetWidth;
            landing.classList.remove('slide-up');
            
            setTimeout(() => {
                mainPage.style.display = 'none';
                isTransitioning = false;
            }, 1000);
        }
    </script>
    <script src="toggle.js"></script>
    <script src="/js/login.js"></script>
</body>
</html>