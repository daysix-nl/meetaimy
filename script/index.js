// try {
//   window.addEventListener("scroll", () => {
//     const scrollpos = window.scrollY;
//     const headerShadow = document.querySelector(".block-header");

//     if (scrollpos > 100) {
//       headerShadow.classList.add("active");
//     } else {
//       headerShadow.classList.remove("active");
//     }
//   });
// } catch (error) {}

try {
  const buttonMobileNavbar = document.querySelector(".button-mobile-navbar");
  const mobileNavbar = document.querySelector(".mobile-navbar");
  buttonMobileNavbar.addEventListener("click", () => {
    buttonMobileNavbar.classList.toggle("open");
    mobileNavbar.classList.toggle("open");
  });
} catch (error) {}

try {
  const buttonFunctionaliteitenNavbar = document.querySelector(
    ".functionaliteiten-navbar-button"
  );
  const functionaliteitenNavbar = document.querySelector(
    ".functionaliteiten-navbar"
  );
  const functionaliteitenNavbarClose = document.querySelector(
    ".terug-navbar-mobile-button"
  );
  const buttonMobileNavbar = document.querySelector(".button-mobile-navbar");

  buttonFunctionaliteitenNavbar.addEventListener("click", () => {
    functionaliteitenNavbar.classList.add("open");
  });
  functionaliteitenNavbarClose.addEventListener("click", () => {
    functionaliteitenNavbar.classList.remove("open");
  });
  buttonMobileNavbar.addEventListener("click", () => {
    functionaliteitenNavbar.classList.remove("open");
  });
} catch (error) {}

try {
  /**********************/
  /**** accordion ***/
  /**********************/
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) {}

try {
  const navItem = document.querySelector(".button-dropdown");
  const navDropdown = document.querySelector(".nav-dropDown");
  navItem.addEventListener("mouseover", () => {
    navItem.classList.add("active");
    navDropdown.classList.add("active");
  });

  const navItemsLink = document.querySelectorAll("header .hover-remove");

  for (let i = 0; i < navItemsLink.length; i++) {
    navItemsLink[i].addEventListener("mouseover", () => {
      navItem.classList.remove("active");
      navDropdown.classList.remove("active");
    });
  }

  window.addEventListener("resize", () => {
    if (window.innerWidth < 992) {
      navItem.classList.remove("active");
      navDropdown.classList.remove("active");
    }
  });

  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;
    if (scrollpos > 100) {
      navItem.classList.remove("active");
      navDropdown.classList.remove("active");
    }
  });

  document.querySelector("main").addEventListener("mouseover", () => {
    navItem.classList.remove("active");
    navDropdown.classList.remove("active");
  });
} catch (error) {}

try {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  const hiddenElements = document.querySelectorAll(".animation-fade-in");
  hiddenElements.forEach((el) => observer.observe(el));
} catch (error) {}

try {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  const hiddenElements = document.querySelectorAll(".animation-block");
  hiddenElements.forEach((el) => observer.observe(el));
} catch (error) {}

try {
  let labels = ["Widget", "Whatsapp", "Agenda", "Kassa"];
  var mainSwiper = new Swiper(".swiper-container", {
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination_simple",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + labels[index] + "</span>";
      },
    },
  });

  var pagingSwiper = new Swiper(".swiper-container", {
    pagination: {
      el: ".swiper-pagination2",
      type: "progressbar",
    },
  });

  mainSwiper.controller.control = pagingSwiper;
} catch (error) {}

try {
  const swiperMobile = new Swiper(".swiper-mobile", {
    loop: true,
    // loopedSlides: 10,
    centeredSlides: true,
    slideToClickedSlide: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    slidesPerView: "auto",
    preventClicks: true,
    spaceBetween: 20,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  swiperMobile.on("slideChange", function () {
    setTimeout(() => {
      const getInnerHTMLPTagg = document.querySelector(
        ".swiper-slide-prev h3"
      ).innerHTML;
      document.querySelector(".pushHtml-prev").innerHTML = getInnerHTMLPTagg;

      const getInnerHTMLPTaggNext = document.querySelector(
        ".swiper-slide-next h3"
      ).innerHTML;
      document.querySelector(".pushHtml-next").innerHTML =
        getInnerHTMLPTaggNext;
    }, 100);
  });

  const getInnerHTMLPTagg = document.querySelector(
    ".swiper-slide-prev h3"
  ).innerHTML;
  document.querySelector(".pushHtml-prev").innerHTML = getInnerHTMLPTagg;

  const getInnerHTMLPTaggNext = document.querySelector(
    ".swiper-slide-next h3"
  ).innerHTML;
  document.querySelector(".pushHtml-next").innerHTML = getInnerHTMLPTaggNext;
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.5,
    loop: true,
    spaceBetween: 10,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });
} catch (error) {}

try {
  addEventListener("DOMContentLoaded", (event) => {
    const inner = document.querySelector(".inner-hero");
    const section = document.querySelector(".section-hero");

    const innerIMG = document.querySelector(".inner-img");
    const sectionIMG = document.querySelector(".section-stop-img");

    // const sectionIMGMobile = document.querySelector(".section-stop-img-mobile");

    addEventListener("scroll", (event) => {
      if (section) {
        let value = window.scrollY / 2 / section.offsetTop + 1;
        inner.style.transform = `scale(${value})`;
      }

      if (sectionIMG) {
        let valueScale = window.scrollY / sectionIMG.offsetTop + 1;
        innerIMG.style.transform = `scale(${3 - valueScale})`;
      }
    });
  });
} catch (error) {}

/**********************/
/*** Hide Menu on Scroll ***/
/**********************/
try {
  let prevScrollpos = window.scrollY;
  window.addEventListener("scroll", () => {
    let currentScrollPos = window.scrollY;
    const scrollpos = window.scrollY;
    const buttonMobileNavbar = document.querySelector(".button-mobile-navbar");
    const mobileNavbar = document.querySelector(".mobile-navbar");
    if (prevScrollpos > currentScrollPos) {
      document.querySelector("header").style.top = "0";
    } else if (scrollpos > 200) {
      document.querySelector("header").style.top = "-200px";
      buttonMobileNavbar.classList.remove("open");
      mobileNavbar.classList.remove("open");
    }
    prevScrollpos = currentScrollPos;
  });
} catch (error) {}

try {
  const menuButton = document.getElementById("menu-button");
  const menu = document.querySelector(".menu-item");
  const svgElement = menuButton.querySelector("svg");

  window.addEventListener("DOMContentLoaded", (event) => {
    // Get the first filter element
    const firstFilter = document.querySelector(".filter");

    // Check if it exists and set its display to 'grid'
    if (firstFilter) {
      firstFilter.style.display = "grid";
    }
  });

  const toggleMenu = () => {
    menu.hidden = !menu.hidden;
    if (!menu.hidden) {
      menu.style.opacity = "0";
      menu.style.transform = "scale(0.95)";
      menu.style.transition = "0.2s ease, transform 0.2s ease";
      setTimeout(() => {
        menu.style.opacity = "1";
        menu.style.transform = "scale(1)";
      }, 50);
      svgElement.style.transform = "rotate(180deg)";
    } else {
      menu.style.opacity = "0";
      menu.style.transform = "scale(0.95)";
      menu.style.transition = "none";
      menu.style.transition = "0.2s ease, transform 0.2s ease";
      svgElement.style.transform = "rotate(0deg)";
    }
  };

  const closeMenu = () => {
    menu.hidden = true;
    menu.style.opacity = "0";
    menu.style.transform = "scale(0.95)";
    menu.style.transition = "none";
    svgElement.style.transform = "rotate(0deg)";
  };

  menuButton.addEventListener("click", toggleMenu);

  document.addEventListener("click", (event) => {
    const isClickInsideMenu = menu.contains(event.target);
    const isClickInsideButton = menuButton.contains(event.target);

    if (!isClickInsideMenu && !isClickInsideButton) {
      closeMenu();
    }
  });

  const options = document.querySelectorAll(".menu-item li");
  options.forEach((option) => {
    option.addEventListener("click", (event) => {
      event.preventDefault();
      // Reset all filters display to 'none'
      const filters = document.querySelectorAll(".filter");
      filters.forEach((filter) => {
        filter.style.display = "none";
      });

      const selectedOption = option.textContent.trim();
      const filterData = selectedOption.replace(/\s/g, "").toLowerCase();

      const filter = document.getElementById(`filter-${filterData}`);
      console.log(filter);
      filter.style.display = "grid";
      menuButton.querySelector("span").textContent = selectedOption;
      closeMenu();
    });
  });
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper-functionaliteit", {
    // centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 25,
    // loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      845: {
        slidesPerView: 2,
      },
      1328: {
        slidesPerView: 3,
        loop: false,
      },
    },
  });
} catch (error) {
  console.error(error);
}

try {
  var swiper = new Swiper(".mySwiper-overons", {
    slidesPerView: 1,
    spaceBetween: 25,
    // loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      845: {
        slidesPerView: 2,
      },
      1328: {
        slidesPerView: 4,
        loop: false,
      },
    },
  });
} catch (error) {
  console.error(error);
}

try {
  var swiper = new Swiper(".mySwiper-klantencase", {
    slidesPerView: 2,
    spaceBetween: 25,
    // loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      845: {
        slidesPerView: 3,
      },
      1328: {
        slidesPerView: 4,
        loop: false,
      },
    },
  });
} catch (error) {
  console.error(error);
}

try {
  var swiper = new Swiper(".mySwiper-case", {
    slidesPerView: "auto",
    spaceBetween: 12,
  });
} catch (error) {
  console.error(error);
}

try {
  function animateValue(obj, start, end, duration, type) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML =
        Math.floor(progress * (end - start) + start) +
        (type === "percent" ? "%" : "");
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }

  window.onload = function () {
    let counters = document.getElementsByClassName("counter");
    for (let counter of counters) {
      let endCount = parseInt(counter.getAttribute("data-count"));
      let duration = parseInt(counter.getAttribute("data-duration"));
      let type = counter.getAttribute("data-type");
      animateValue(counter, 0, endCount, duration, type);
    }
  };
} catch (error) {}

try {
  addEventListener("DOMContentLoaded", (event) => {
    const desktopVideo = document.getElementById("desktop-video");
    const desktopPlayButton = document.getElementById("desktop-play-button");
    if (desktopPlayButton) {
      desktopPlayButton.addEventListener("click", function () {
        if (desktopVideo.paused) {
          desktopVideo.play();
          desktopPlayButton.style.display = "none";
        } else {
          desktopVideo.pause();
          desktopPlayButton.style.display = "block";
        }
      });
    }

    const mobileVideo = document.getElementById("mobile-video");
    const mobilePlayButton = document.getElementById("mobile-play-button");
    if (mobilePlayButton) {
      mobilePlayButton.addEventListener("click", function () {
        if (mobileVideo.paused) {
          mobileVideo.play();
          mobilePlayButton.style.display = "none!important";
        } else {
          mobileVideo.pause();
          mobilePlayButton.style.display = "block";
        }
      });
    }
  });
} catch (error) {}
