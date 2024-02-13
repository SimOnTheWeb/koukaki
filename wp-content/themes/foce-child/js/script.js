// Je séléctionne tout les titres
const animationTitles = document.querySelectorAll(".title_animation");

// Création de l'observer
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
      return;
    }
  });
});

// Je dis au navigateur de surveiller chaque <span> pour un affichage des titres en 2 parties
animationTitles.forEach((span) => observer.observe(span));
