document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target); // Arrêter d'observer après l'animation
        }
      });
    }, {
      threshold: 0.1 // Déclenchement lorsque 10% de l'élément est visible
    });
  
    const elements = document.querySelectorAll('.scroll');
    elements.forEach(element => {
      observer.observe(element);
    });
  });