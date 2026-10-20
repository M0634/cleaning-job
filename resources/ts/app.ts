const menuButton = document.querySelector<HTMLButtonElement>('[data-menu-button]');
const mobileMenu = document.querySelector<HTMLElement>('[data-mobile-menu]');

menuButton?.addEventListener('click', () => {
    const isOpen = !mobileMenu?.classList.toggle('hidden');
    menuButton.setAttribute('aria-expanded', String(isOpen));
});

mobileMenu?.querySelectorAll<HTMLAnchorElement>('a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuButton?.setAttribute('aria-expanded', 'false');
    });
});
