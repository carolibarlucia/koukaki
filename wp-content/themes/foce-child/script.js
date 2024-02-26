window.addEventListener("DOMContentLoaded", () => {
  // CARROUSEL SWIPER JS
  src = "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js";

  // <!-- Initialize Swiper -->
  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 3,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  // MOUVEMENT NUAGE AU SCROLL DANS SECTION PLACE
  let nuage = document.getElementById("nuage");
  let place = document.getElementById("place");

  function transformCloud() {
    nuage.forEach(function (e) {
      let clientTop = e.getBoundingClientRect().top;
      let windowHeight = window.innerHeight;
      if (clientTop < windowHeight * 0.8) {
        e.classList.add("slide__title");
      } else {
        e.classList.remove("slide__title");
      }
    });
  }

  document.addEventListener("scroll", function (e) {
    transformTitle();
    if (isInViewport(nuage)) {
      nuage.classList.add("cloud");
    } else {
      nuage.classList.remove("cloud");
    }
  });

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // APPARITION DES SECTIONS AU SCROLL
  var options = {
    rootMargin: "0px",
    threshold: 0.5,
  };

  const target1 = document.querySelectorAll(".section1");
  const sectionVisible = function (entries, observer1) {
    entries.forEach(function (entry) {
      if (entry.intersectionRatio > 0.5) {
        entry.target.classList.add("section2");
      }
    });
  };

  const observer1 = new IntersectionObserver(sectionVisible, options);
  target1.forEach(function (target) {
    observer1.observe(target);
  });

  // / effet d'apparition des titres
  let mainTitle = document.querySelectorAll(".main_title");
  function transformTitle() {
    mainTitle.forEach(function (e) {
      let clientTop = e.getBoundingClientRect().top;
      let windowHeight = window.innerHeight;
      if (clientTop < windowHeight * 0.8) {
        e.classList.add("slide__title");
      } else {
        e.classList.remove("slide__title");
      }
    });
  }

  // PARALLAXE LOGO

  let imagelogo = document.getElementById("image-logo");
  let banner = document.getElementById("banner");

  document.addEventListener("scroll", function (e) {
    if (isInViewport(banner)) {
      imagelogo.classList.add("flottement-logo");
      imagelogo.classList.remove("logosticky");
    } else {
      imagelogo.classList.remove("flottement-logo");
      imagelogo.classList.add("logosticky");
    }
  });

  // APPARITION DU MENU AU CLICK

  let menu = document.getElementById("menu");
  let myButton = document.getElementById("myButton");
  let clicStory = document.getElementById("clicStory");
  let clicCharacters = document.getElementById("clicCharacters");
  let clicPlace = document.getElementById("clicPlace");
  let clicStudio = document.getElementById("clicStudio");

  function menuVisible() {
    menu.classList.toggle("visible-menu");
  }
  function burger_cross() {
    myButton.classList.toggle("burger");
    myButton.classList.toggle("cross");
  }

  myButton.addEventListener("click", function () {
    menuVisible();
    burger_cross();
  });

  clicStory.addEventListener("click", function () {
    menuVisible();
    burger_cross();
  });

  clicCharacters.addEventListener("click", function () {
    menuVisible();
    burger_cross();
  });

  clicPlace.addEventListener("click", function () {
    menuVisible();
    burger_cross();
  });

  clicStudio.addEventListener("click", function () {
    menuVisible();
    burger_cross();
  });
});
