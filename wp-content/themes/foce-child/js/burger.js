// HAMBURGER MENU

// Sélectionne l'élément avec la classe "hamburger" dans le DOM
const hamburger = document.querySelector(".hamburger");

// Sélectionne les éléments à basculer lors du clic sur le hamburger
const elementsToToggle = [
  document.querySelector(".nav_menu"),
  document.querySelector(".logo_menu"),
  document.querySelector(".flowers_menu"),
  document.querySelector(".cats_menu"),
  document.querySelector(".text_menu"),
];

// Ajoute un écouteur d'événements pour le clic sur le hamburger
hamburger.addEventListener("click", toggleMenu);

// Ajoute des écouteurs d'événements pour le clic sur chaque élément à basculer
elementsToToggle.forEach((element) =>
  element.addEventListener("click", toggleMenu)
);

// Ajoute des écouteurs d'événements pour le clic sur chaque lien de navigation
document
  .querySelectorAll(".nav_link")
  .forEach((link) => link.addEventListener("click", closeMenu));

// Fonction pour basculer l'état actif du menu
function toggleMenu() {
  hamburger.classList.toggle("active");
  elementsToToggle.forEach((element) => element.classList.toggle("active"));
}

// Fonction pour fermer le menu en retirant la classe "active"
function closeMenu() {
  hamburger.classList.remove("active");
  elementsToToggle.forEach((element) => element.classList.remove("active"));
}
