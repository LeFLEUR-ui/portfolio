const btn = document.getElementById('menu-btn');
btn.addEventListener('click', () => {
    btn.classList.toggle('open');
    document.getElementById('mobile-menu')?.classList.toggle('hidden');
});

/* to make navbbar disapper, when mag sscroll pababa,
         then popout when mag sscroll pataas */
let lastScrollTop = 0;
const navbar = document.querySelector('nav');

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.transform = 'translateY(-100%)';
        navbar.style.transition = 'transform 0.3s ease-in-out';
    } else {
        navbar.style.transform = 'translateY(0)';
        navbar.style.transition = 'transform 0.3s ease-in-out';
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

document.addEventListener('contextmenu', event => event.preventDefault());
document.addEventListener('keydown', function(e) {
    if (e.key === "F12" || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) || (e.ctrlKey && e.key === 'U')) {
        e.preventDefault();
    }
});
