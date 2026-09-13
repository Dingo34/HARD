// ============ АВТО-ВСТАВКА ПЕРЕКЛЮЧАТЕЛЯ + СМЕНА ТЕМЫ ============
(function () {
    // HTML переключателя
    const toggleHTML = `
        <label class="day-night">
            <input type="checkbox" class="themeCheckbox" aria-label="Переключить день и ночь">
            <span class="outer-glow"></span>
            <span class="sun-external-glow"></span>
            <span class="track">
                <span class="backdrop-softener-left"></span>
                <span class="backdrop-softener-right"></span>
                <span class="night-sky">
                    <span class="night-sky-glow"></span>
                    <span class="stars"></span>
                    <span class="red-star r1"></span>
                    <span class="red-star r2"></span>
                    <span class="red-star r3"></span>
                </span>
                <span class="day-sky">
                    <span class="day-gradient"></span>
                    <span class="sun-haze"></span>
                </span>
                <span class="horizon-glow"></span>
                <span class="mountains-back"></span>
                <span class="skyline"></span>
                <span class="hill-mid"></span>
                <span class="hill-front"></span>
                <span class="orb-container">
                    <span class="sun-rays"></span>
                    <span class="orb-aura"></span>
                    <span class="orb">
                        <span class="moon-texture"></span>
                        <span class="crater c1"></span>
                        <span class="crater c2"></span>
                        <span class="crater c3"></span>
                        <span class="crater c4"></span>
                        <span class="crater c5"></span>
                        <span class="crater c6"></span>
                        <span class="crater c7"></span>
                        <span class="orb-highlight"></span>
                    </span>
                </span>
            </span>
        </label>
    `;

    // Функция инициализации
    function initToggle() {
        // Восстанавливаем тему из localStorage
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            document.body.classList.add('light-theme');
        }

        // Находим все контейнеры .theme-toggle-box и вставляем в них переключатель
        document.querySelectorAll('.theme-toggle-box').forEach(box => {
            if (!box.querySelector('.day-night')) {
                box.innerHTML = toggleHTML;
            }
        });

        // Привязываем обработчики
        document.querySelectorAll('.themeCheckbox').forEach(checkbox => {
            // Устанавливаем состояние в соответствии с сохранённой темой
            if (savedTheme === 'light') {
                checkbox.checked = true;
            }

            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    document.body.classList.add('light-theme');
                    localStorage.setItem('theme', 'light');
                } else {
                    document.body.classList.remove('light-theme');
                    localStorage.setItem('theme', 'dark');
                }
            });
        });
    }

    // Запускаем после загрузки DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initToggle);
    } else {
        initToggle();
    }
})();