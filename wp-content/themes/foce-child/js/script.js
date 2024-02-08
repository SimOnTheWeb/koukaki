// Création de l'observer
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("title_animation");
      return;
    }
  });
});

// Je choisis la classe que le navigateur devra surveiller
const animationTitles = document.querySelectorAll(".title");

// Je dis au navigateur de surveiller chaque titre
animationTitles.forEach((title) => observer.observe(title));
