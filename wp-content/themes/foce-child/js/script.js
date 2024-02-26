// TITLE ANIMATION

// Je séléctionne tout les titres
const animationTitles = document.querySelectorAll(".title__animation");

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

// SWIPER

const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  coverflowEffect: {
    rotate: 30,
    slideShadows: false,
    modifier: 1,
  },
  slidesPerView: 3,
  spaceBetween: 30,
  direction: "horizontal",
  centeredSlides: true,
  loop: true,
  speed: 1000,
  spaceBetween: 100,
  grabCursor: true,
  autoplay: {
    delay: 1000,
  },
});

// PARALLAX CLOUDS

document.addEventListener("DOMContentLoaded", function () {
  // Sélectionne tous les éléments avec les classes "big__cloud" et "small__cloud"
  const layers = document.querySelectorAll(".big__cloud, .small__cloud");
  // Ajuste cela pour le décalage de défilement souhaité
  const scrollOffset = 300;

  // Fonction pour mettre à jour le parallaxe
  function updateParallax() {
    // Pour chaque couche (nuage) dans la liste
    layers.forEach((layer) => {
      // Obtient la vitesse de défilement spécifique à chaque nuage depuis l'attribut data-speed
      const speed = layer.getAttribute("data-speed");
      // Obtient les dimensions et la position du nuage par rapport à la fenêtre
      const rect = layer.getBoundingClientRect();
      // Vérifie si le nuage est actuellement visible dans la vue
      const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

      // Si le nuage est visible, effectue le déplacement parallaxe
      if (isVisible) {
        // Calcule la position verticale en fonction du défilement et de la vitesse du nuage
        const yPos = -((window.scrollY * speed) / 100);
        // Calcule les coordonnées pour la propriété backgroundPosition
        const coords = `calc(50% - ${scrollOffset}px) ${yPos}px`;

        // Applique la transformation (décalage horizontal et vertical) et les coordonnées du fond
        layer.style.transform = `translateX(-${scrollOffset}px) translateY(${yPos}px)`;
        layer.style.backgroundPosition = coords;
      }
    });
  }

  // Ajoute un écouteur d'événements pour déclencher la fonction de mise à jour lors du défilement
  window.addEventListener("scroll", updateParallax);

  // Appelle la fonction de mise à jour une fois au chargement initial de la page
  updateParallax();
});

// HAMBURGER MENU

const hamburger = document.querySelector(".hamburger");
const elementsToToggle = [
  document.querySelector(".nav_menu"),
  document.querySelector(".logo_menu"),
  document.querySelector(".flowers_menu"),
  document.querySelector(".cats_menu"),
  document.querySelector(".text_menu"),
];

hamburger.addEventListener("click", toggleMenu);
elementsToToggle.forEach((element) =>
  element.addEventListener("click", toggleMenu)
);
document
  .querySelectorAll(".nav_link")
  .forEach((link) => link.addEventListener("click", closeMenu));

function toggleMenu() {
  hamburger.classList.toggle("active");
  elementsToToggle.forEach((element) => element.classList.toggle("active"));
}

function closeMenu() {
  hamburger.classList.remove("active");
  elementsToToggle.forEach((element) => element.classList.remove("active"));
}
