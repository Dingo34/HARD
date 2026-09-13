const loginModal = document.getElementById('loginModal');
const openLoginBtn = document.getElementById('openLoginBtn');
const closeLoginBtn = document.getElementById('closeLoginBtn');

const modalTabs = document.querySelectorAll('.modal-tab');
const modalForms = document.querySelectorAll('.modal-form');


function openLogin(tab = 'login') {
    if (!loginModal) return;

    modalTabs.forEach(t => {
        t.classList.toggle('active', t.dataset.tab === tab);
    });

    modalForms.forEach(f => {
        f.classList.toggle('active', f.id === `form-${tab}`);
    });

    loginModal.style.display = 'flex';

    // Чтобы браузер успел применить display:flex
    requestAnimationFrame(() => {
        loginModal.classList.add('active');
    });
}


function closeLogin() {
    if (!loginModal) return;

    loginModal.classList.remove('active');

    /*
     * Если в CSS есть transition закрытия,
     * даём ему немного времени.
     */
    setTimeout(() => {
        if (!loginModal.classList.contains('active')) {
            loginModal.style.display = 'none';
        }
    }, 300);
}


// ВАЖНО:
// при загрузке любой страницы логин гарантированно скрыт
if (loginModal) {
    loginModal.style.display = 'none';
}


openLoginBtn?.addEventListener('click', () => {
    openLogin('login');
});


closeLoginBtn?.addEventListener('click', () => {
    closeLogin();
});


loginModal?.addEventListener('click', (e) => {
    if (e.target === loginModal) {
        closeLogin();
    }
});


document.addEventListener('keydown', (e) => {
    if (
        e.key === 'Escape' &&
        loginModal?.classList.contains('active')
    ) {
        closeLogin();
    }
});


modalTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const tabName = tab.dataset.tab;

        modalTabs.forEach(t => {
            t.classList.remove('active');
        });

        modalForms.forEach(f => {
            f.classList.remove('active');
        });

        tab.classList.add('active');

        document
            .getElementById(`form-${tabName}`)
            ?.classList.add('active');
    });
});


function stepAction(index) {
    if (index === 0) {
        openLogin('register');
    }

    else if (index === 1) {
        document
            .getElementById('features-section')
            ?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
    }

    else if (index === 2) {
        document
            .getElementById('stats-section')
            ?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
    }
}


// Только логика главной страницы
window.addEventListener('wheel', (e) => {
    const landingPage = document.getElementById('landing-page');

    // lore/news/forum/etc
    if (!landingPage) return;

    if (loginModal?.classList.contains('active')) return;

    if (
        e.deltaY > 0 &&
        typeof enterMainPage === 'function'
    ) {
        enterMainPage();
    }
});


document.querySelectorAll('.nav-link, .btn-login').forEach(button => {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        ripple.classList.add('ripple');

        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);

        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = `${size}px`;
        ripple.style.height = `${size}px`;
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;

        this.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 700);
    });
});


function scrollToTop(e) {
    e.preventDefault();

    document.querySelector('.main-body')?.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}


window.addEventListener('load', () => {
    const hash = window.location.hash;

    const landing = document.getElementById('landing-page');
    const mainPage = document.getElementById('main-page');

    // Только главная
    if (
        landing &&
        mainPage &&
        (hash === '#main' || hash === '#login')
    ) {
        landing.style.display = 'none';
        mainPage.style.display = 'flex';
    }

    // Работает на любой странице
    if (hash === '#login') {
        openLogin('login');
    }
});