// Sélection du bouton burger et du menu de navigation
const burgerButton = document.querySelector('.header__burger');
const navMenu = document.querySelector('.header__nav');

// Fonction pour ouvrir/fermer le menu burger
function toggleNavMenu() {
    burgerButton.classList.toggle('active');
    navMenu.classList.toggle('active');
}

// Ajouter un gestionnaire d'événement au clic sur le bouton burger
burgerButton.addEventListener('click', toggleNavMenu);

// Sélectionner tous les liens dans le menu de navigation
const navLinks = document.querySelectorAll('.nav__list a');

// Ajouter un gestionnaire d'événement à chaque lien du menu
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Fermer le menu burger après un clic sur un lien
        burgerButton.classList.remove('active');
        navMenu.classList.remove('active');
    });
});
