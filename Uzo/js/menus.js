document.addEventListener("DOMContentLoaded", function () {
 

// Update data attributes and class names
const allNavbars = document.querySelectorAll(".navbar-interactive");
const allBurgerMenus = document.querySelectorAll(".nav-burger-menu");
const allMobileMenus = document.querySelectorAll(".nav-mobile-menu");

// Loop through navbars and add event listeners
allNavbars.forEach((navbar) => {
  const burgerBtn = navbar.querySelector(".nav-work-with-us1");
  const mobileMenu = navbar.querySelector(".nav-mobile-menu");
  const closeBtn = mobileMenu.querySelector(".nav-menu-close");

  if (!burgerBtn || !mobileMenu || !closeBtn) {
    return;
  }

  burgerBtn.addEventListener("click", () => {
    console.log("Burger button clicked");
    mobileMenu.classList.toggle("teleport-show");
  });

  closeBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("teleport-show");
  });
});

});
