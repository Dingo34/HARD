const FORUM_CATEGORIES = [
    {
        id: "complaints-players",
        cat: "Жалобы",
        icon: "💬",
        title: "Жалобы на игроков",
        desc: "Подача жалоб на игроков проекта",
        topics: "8,1К",
        messages: "20,4К",
        lastUser: "abracadabra",
        lastTime: "32 мин. назад",
        lastText: "Жалоба на игрока №1772 #1526",
        formTitle: "Жалоба на игрока",
        formFields: [
            { name: "nick", label: "Ник нарушителя", type: "text", required: true },
            { name: "rule", label: "Пункт правил", type: "text", required: true },
            { name: "desc", label: "Описание ситуации", type: "textarea", required: true },
            { name: "proof", label: "Доказательства (ссылка)", type: "text", required: true }
        ]
    },
    {
        id: "complaints-admins",
        cat: "Жалобы",
        icon: "💬",
        title: "Жалобы на администрацию",
        desc: "Подача жалоб на администрацию проекта",
        topics: "2,7К",
        messages: "5,6К",
        lastUser: "fool",
        lastTime: "Сегодня в 17:20",
        lastText: "Жалоба на администратора",
        formTitle: "Жалоба на администратора",
        formFields: [
            { name: "nick", label: "Ник администратора", type: "text", required: true },
            { name: "desc", label: "Описание ситуации", type: "textarea", required: true },
            { name: "proof", label: "Доказательства (ссылка)", type: "text", required: true }
        ]
    },
    {
        id: "complaints-leaders",
        cat: "Жалобы",
        icon: "💬",
        title: "Жалобы на лидеров фракций",
        desc: "Подача жалоб на лидеров фракций",
        topics: "295",
        messages: "650",
        lastUser: "Лидер Marabou",
        lastTime: "Вчера в 22:22",
        lastText: "Лидер Marabou",
        formTitle: "Жалоба на лидера фракции",
        formFields: [
            { name: "fraction", label: "Фракция", type: "text", required: true },
            { name: "nick", label: "Ник лидера", type: "text", required: true },
            { name: "desc", label: "Описание ситуации", type: "textarea", required: true },
            { name: "proof", label: "Доказательства (ссылка)", type: "text", required: true }
        ]
    },
    {
        id: "questions",
        cat: "Разделы",
        icon: "❓",
        title: "Вопросы",
        desc: "Здесь задают вопросы по игре и получают ответы",
        topics: "1,2К",
        messages: "4,3К",
        lastUser: "player01",
        lastTime: "5 мин. назад",
        lastText: "Как получить лицензию?",
        formTitle: "Новый вопрос",
        formFields: [
            { name: "title", label: "Тема вопроса", type: "text", required: true },
            { name: "desc", label: "Ваш вопрос", type: "textarea", required: true }
        ]
    },
    {
        id: "bugs",
        cat: "Разделы",
        icon: "⚠️",
        title: "Баги",
        desc: "Сообщения о найденных багах и ошибках",
        topics: "430",
        messages: "1,1К",
        lastUser: "tester",
        lastTime: "1 ч. назад",
        lastText: "Баг с текстурами в порту",
        formTitle: "Баг-репорт",
        formFields: [
            { name: "title", label: "Краткое описание бага", type: "text", required: true },
            { name: "steps", label: "Как воспроизвести", type: "textarea", required: true },
            { name: "proof", label: "Скриншот / видео (ссылка)", type: "text", required: false }
        ]
    }
];