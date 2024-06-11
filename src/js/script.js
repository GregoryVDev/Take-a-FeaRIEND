const nav = document.getElementById("nav");
const menuBurger = document.getElementById("burger");

menuBurger.addEventListener("click", () => {
  nav.classList.toggle("active");
  menuBurger.classList.toggle("active");
});

// Fonction pour afficher ou masquer la flèche en fonction du défilement
function toggleScrollTopButton() {
  var scrollButton = document.getElementById("scroll-to-top");
  if (window.scrollY > 500 && scrollButton.style.display !== "block") {
    scrollButton.style.display = "block";
  } else if (window.scrollY <= 500 && scrollButton.style.display !== "none") {
    scrollButton.style.display = "none";
  }
}
