// PARALLAX CLOUDS

// Fonction pour déplacer un élément en fonction de la position de défilement
function moveElementOnScroll(element, maxTranslation) {
  // Obtient la position de l'élément par rapport à la fenêtre de visualisation
  let rect = element.getBoundingClientRect();

  // Vérifie si l'élément est visible à l'écran
  if (rect.top < window.innerHeight && rect.bottom >= 0) {
    // Calcule la position de défilement relative à la hauteur de la fenêtre
    let scroll = Math.max(0, window.innerHeight - rect.top);

    // Déplace l'élément sur l'axe x en fonction de la position de défilement
    element.style.setProperty(
      "--cloudsPositionX",
      (-maxTranslation * scroll) / window.innerHeight + "px"
    );
  }
}

// Ajoute un écouteur d'événements pour l'événement de défilement
window.addEventListener("scroll", function () {
  // Sélectionne les éléments .big__cloud et .small__cloud
  let bigCloud = document.querySelector(".big__cloud");
  let smallCloud = document.querySelector(".small__cloud");

  // Si le grand nuage existe, déplace-le en fonction de la position de défilement
  if (bigCloud) moveElementOnScroll(bigCloud, 300);

  // Si le petit nuage existe, déplace-le en fonction de la position de défilement
  if (smallCloud) moveElementOnScroll(smallCloud, 300);
});
