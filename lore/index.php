<?php
// все файлы (страницы типо forum.html, news.html (короче все html из главной директории)) складываем в свои папки по аналогии с этим (т.е. forum.html в папку forum)
// файлы из четотам.html переименуем в index.php
require_once '../bootstrap/view.php'; // копируем во все файлы в САМОЕ начало (не забывай <?php и в конце аналогично)
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>История Хьюстона — HARD Roleplay</title>
    <!-- МЕНЯЙ ПУТИ К СТИЛЯМ И КАРТИНКАМ НА ГЛОБАЛЬНЫЕ!!! -->
    <link rel="icon" type="image/png" href="/logo.png?v=1">
    <link rel="stylesheet" href="/pages.css">
    <link rel="stylesheet" href="/toggle.css">
    <!-- СЛЕДУЮЩУЮ СТРОКУ ОБЯЗАТЕЛЬНО ДОБАВЛЯЕМ -->
    <link rel="stylesheet" href="/css/login.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">

    <style>
        .lore-reader-wrap {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 0 0 60px;
        }
        .lore-reader {
            width: min(900px, 94vw);
            height: min(760px, 80vh);
            background: #101010;
            border: 1px solid #363636;
            border-radius: 8px;
            box-shadow: 0 18px 50px #0008;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
            color: #e9e9e9;
        }
        .lore-reader * { box-sizing: border-box; }
        .lore-reader .lr-header {
            min-height: 62px;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #303030;
            background: #141414;
        }
        .lore-reader .lr-title {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .04em;
        }
        .lore-reader .lr-page {
            color: #e21d2f;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .15em;
        }
        .lore-reader .lr-content {
            flex: 1;
            overflow-y: auto;
            padding: 42px 56px 70px 52px;
            scrollbar-width: thin;
            scrollbar-color: #555 #171717;
        }
        .lore-reader .lr-content::-webkit-scrollbar { width: 10px; }
        .lore-reader .lr-content::-webkit-scrollbar-track { background: #171717; }
        .lore-reader .lr-content::-webkit-scrollbar-thumb {
            background: #555;
            border-radius: 10px;
            border: 2px solid #171717;
        }
        .lore-reader .lr-content::-webkit-scrollbar-thumb:hover { background: #777; }
        .lore-reader .lr-section { margin-bottom: 64px; }
        .lore-reader .lr-num {
            color: #e21d2f;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .22em;
            margin-bottom: 12px;
        }
        .lore-reader h1 {
            font-size: 42px;
            line-height: 1.05;
            margin: 0 0 28px;
            letter-spacing: -.03em;
            color: #e9e9e9;
        }
        .lore-reader h2 {
            font-size: 25px;
            margin: 0 0 18px;
            color: #e9e9e9;
        }
        .lore-reader p {
            color: #c7c7c7;
            font-size: 17px;
            line-height: 1.9;
            margin: 0 0 20px;
        }
        .lore-reader strong { color: #fff; }
        .lore-reader .lr-quote {
            border-left: 3px solid #e21d2f;
            padding: 13px 18px;
            margin: 28px 0 0;
            color: #f2f2f2;
            background: #191315;
            font-weight: 700;
            line-height: 1.55;
        }
        .lore-reader .lr-footer {
            min-height: 44px;
            border-top: 1px solid #303030;
            color: #777;
            display: flex;
            align-items: center;
            padding: 0 20px;
            font-size: 11px;
        }
        @media (max-width: 650px) {
            .lore-reader { height: 80vh; }
            .lore-reader .lr-header { padding: 0 16px; }
            .lore-reader .lr-content { padding: 28px 24px 50px; }
            .lore-reader h1 { font-size: 32px; }
            .lore-reader p { font-size: 16px; }
        }
    </style>
</head>
<body>
    <div class="main-bg"></div>
    <div class="main-bg-overlay"></div>

    <!-- блок <header> ... </header> ПОЛНОСТЬЮ удаляй и вставляй следующую строчку -->
    <?php renderHeader(); ?>

    <div class="page-container">
        <div class="lore-reader-wrap">
            <div class="lore-reader">
                <div class="lr-header">
                    <div class="lr-title">HARD | HOUSTON — ЛОР</div>
                    <div class="lr-page">Чтение</div>
                </div>

                <div class="lr-content" id="lr-content"></div>

                <div class="lr-footer">HARD | HOUSTON · OFFICIAL LORE</div>
            </div>
        </div>
    </div>

    <!-- МЕНЯЙ ПУТИ К СТИЛЯМ И КАРТИНКАМ НА ГЛОБАЛЬНЫЕ!!! -->
    <footer class="main-footer" id="main-page">
        <img src="/logo.png" alt="HARD" class="footer-logo">
        <div class="footer-brand">
            <span>HARD</span>
            <span class="footer-divider">|</span>
            <span>HOUSTON</span>
        </div>
    </footer>

    <!-- после футера следующую строчку пиши -->
    <?php renderLogin(); ?>

    <!-- МЕНЯЙ ПУТИ К СКРИПТАМ НА ГЛОБАЛЬНЫЕ!!! -->
    <script src="/toggle.js"></script>

    <!-- ============================================================
         РЕДАКТИРУЙТЕ ТЕКСТ ЛОРА ЗДЕСЬ.
         Правила:
           # Текст          → большой заголовок
           ## Текст         → подзаголовок
           **Текст**        → жирный
           > Текст          → красная цитата
           Пустая строка    → новый абзац
    ============================================================ -->
    <script id="lore-data" type="text/plain">
        ОСНОВАНИЕ
        # История города

        **Хьюстон — город, построенный на возможностях.**

        Город был основан 30 августа 1836 года братьями Августусом и Джоном Алленами и получил своё имя в честь Сэма Хьюстона. Исторически его развитие было связано с торговлей, транспортом и выгодным расположением у Buffalo Bayou.

        Прошли десятилетия, но главное правило Хьюстона осталось неизменным — город принадлежит тем, кто готов действовать. Здесь нет заранее определённой судьбы. Человек может приехать без денег, без связей и без имени, но благодаря труду, решениям и настойчивости получить собственное место в обществе.

        2026 год стал началом новой эпохи. Хьюстон превратился в огромный современный мегаполис, где рядом существуют финансовые компании, промышленные предприятия, частный бизнес, государственные учреждения, транспортные службы и тысячи обычных жителей.

        Экономика является основой города. Каждый день в Хьюстоне заключаются сделки, открываются предприятия, создаются рабочие места и развиваются новые направления бизнеса. Деньги здесь являются не просто средством существования, а частью системы, которая заставляет город двигаться вперёд.

        Бизнес в Хьюстоне — это возможность построить собственное имя. Маленькое предприятие может превратиться в крупную компанию, обычный сотрудник может стать руководителем, а человек без опыта способен начать собственное дело и постепенно добиться положения в обществе.

        Но успех всегда имеет цену. Чем выше положение человека, тем больше ответственности он несёт перед своими сотрудниками, партнёрами и городом. Любое решение способно изменить не только личную судьбу, но и жизнь окружающих.

        Государственная система Хьюстона является одной из главных опор города. Мэрия, городские службы, суды, полиция, пожарная служба и другие учреждения существуют для поддержания порядка и функционирования общества.

        Закон в Хьюстоне един для каждого. Независимо от должности, состояния или известности человек отвечает за свои поступки. Город предоставляет свободу действий, однако вместе со свободой приходит ответственность.

        Полиция является частью системы общественной безопасности. Её задача заключается в поддержании порядка, расследовании нарушений закона и защите жителей города.

        Пожарные и экстренные службы являются ещё одной важной частью городской системы. Их работа редко заметна в спокойные дни, однако именно они первыми оказываются там, где городу требуется помощь.

        Обычный житель является главным элементом Хьюстона. Водитель, врач, механик, предприниматель, юрист, строитель, сотрудник банка или государственный служащий — каждый занимает своё место в городской системе.

        У каждого человека есть возможность изменить своё положение. Новая работа может стать началом карьеры, знакомство — началом партнёрства, покупка первого автомобиля — первым шагом к независимости, а собственный бизнес — началом новой жизни.

        Хьюстон не обещает лёгкой жизни. Город предоставляет возможности, но не гарантирует результат. Здесь выигрывает не тот, кому всё досталось сразу, а тот, кто способен продолжать движение после неудач.

        Финансовая система города играет особую роль. Банки обеспечивают хранение средств, переводы, кредиты, вклады и обслуживание бизнеса.

        Каждое решение оставляет последствия. Потраченные деньги, заключённые сделки, выбранная профессия, созданный бизнес, отношения с людьми и репутация постепенно формируют историю каждого персонажа.

        Репутация в Хьюстоне имеет значение. Хорошее имя открывает двери к новым возможностям, а потеря доверия способна закрыть их.

        Город постоянно развивается. Новые предприятия появляются рядом со старыми зданиями, современные технологии меняют привычную жизнь, а новые поколения жителей создают собственное будущее.

        При этом Хьюстон не забывает своё прошлое. История города началась с небольшого поселения у Buffalo Bayou, которое постепенно стало торговым и транспортным центром.

        В 2026 году начинается новая глава этой истории. Теперь уже сами жители определяют, каким станет Хьюстон завтра.

        Здесь нет заранее написанного сценария. У каждого персонажа есть возможность выбрать собственный путь, построить карьеру, создать бизнес, приобрести имущество, завести связи и стать частью истории города.

        Хьюстон — это город, где прошлое встречается с будущим, а возможности существуют рядом с последствиями каждого решения.

        Главная идея HARD | HOUSTON проста: город не создаёт историю сам. Историю создают люди, которые в нём живут.

        > ОДИН ГОРОД. ОДНА ИСТОРИЯ. ТВОЙ ВЫБОР.
    </script>

    <!-- ЭТО ОБЯЗАТЕЛЬНО ДОБАВЛЯЕМ!!! -->

    <script src="/js/login.js"></script>

    <script>
        (function () {
            const raw = document.getElementById('lore-data').textContent;
            const container = document.getElementById('lr-content');
            const lines = raw.split(/\r?\n/);
            let html = '';
            let paragraph = [];

            const flush = () => {
                if (paragraph.length) {
                    let p = paragraph.join(' ')
                        .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>');
                    html += '<p>' + p + '</p>';
                    paragraph = [];
                }
            };

            for (let i = 0; i < lines.length; i++) {
                const line = lines[i].trim();

                if (line === '') { flush(); continue; }

                if (line.startsWith('## ')) {
                    flush();
                    html += '<h2>' + line.slice(3) + '</h2>';
                } else if (line.startsWith('# ')) {
                    flush();
                    html += '<h1>' + line.slice(2) + '</h1>';
                } else if (line.startsWith('> ')) {
                    flush();
                    html += '<div class="lr-quote">' + line.slice(2) + '</div>';
                } else if (/^[А-ЯA-Z0-9 /|—·]+$/.test(line) && line.length < 40 && !line.includes('.')) {
                    flush();
                    html += '<div class="lr-num">' + line + '</div>';
                } else {
                    paragraph.push(line);
                }
            }
            flush();
            container.innerHTML = html;
        })();
    </script>
</body>
</html>

<!-- Мне было больно менять этот нейрослоп :( (PS. Юля) -->
<!-- И сделай в гите публичный репозиторий (ток туда пароли от бд не отправляй) я тебе буду там приветы через PR отправлять) -->