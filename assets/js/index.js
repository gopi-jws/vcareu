let currentSlide = 0;
const totalSlides = 6; // Update if you have a different number of slides

function moveSlide(index) {
  const wrapper = document.getElementById("carouselSlides");
  const slideWidth = wrapper.firstElementChild.offsetWidth + 20; // Adjusted width of each card including margin
  currentSlide = index;

  // Calculate translateX based on the current slide
  wrapper.style.transform = `translateX(-${slideWidth * index}px)`;

  // Update active dot
  updateActiveDot(index);
}

function updateActiveDot(index) {
  const dots = document.querySelectorAll(".dot");
  dots.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });
}

// Set the first dot as active on load
updateActiveDot(currentSlide);
var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 20,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  autoplay: {
    delay: 3000, // 3 seconds delay
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    // 1000: {
    //   slidesPerView: 5,
    // },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".image-card-slider");
  let scrollAmount = 0;
  const scrollStep = 250; // Adjust the scroll step to control the scroll distance
  const maxScroll = slider.scrollWidth - slider.clientWidth;

  function autoScrollSlider() {
    if (scrollAmount >= maxScroll) {
      scrollAmount = 0; // Reset scroll position when reaching the end
    } else {
      scrollAmount += scrollStep;
    }
    slider.scrollTo({
      top: 0,
      left: scrollAmount,
      behavior: "smooth",
    });
  }

  // Set interval for auto-scrolling
  setInterval(autoScrollSlider, 3000); // Adjust time in milliseconds
});
var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 20,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    // 1000: {
    //   slidesPerView: 4,
    // },
  },
});
