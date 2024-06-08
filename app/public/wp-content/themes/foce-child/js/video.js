document.addEventListener("DOMContentLoaded", function() {
    const image = document.querySelector('.image');
    const video = document.getElementById('background-video');

    if (image) {
        image.classList.add('active');

        // Afficher la vidéo après une courte période
        setTimeout(() => {
            image.classList.remove('active');
            if (video) {
                video.classList.add('active');
                video.play();
            }
        }, 3000); // Affiche l'image pendant 3 secondes

        // Afficher l'image une fois la vidéo terminée
        video.addEventListener('ended', () => {
            video.classList.remove('active');
            image.classList.add('active');
        });
    }
});