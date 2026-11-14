/* =====================================================
   Dr. Ashish Kumar Goyal - Main Script
   (loaded with defer, after Bootstrap bundle)
   ===================================================== */
document.addEventListener("DOMContentLoaded", function () {
  var WHATSAPP_NUMBER = "917805965989";

  /* 1. Header shadow on scroll */
  var header = document.querySelector(".nav-row");
  function onScroll() {
    if (!header) return;
    header.style.boxShadow =
      window.scrollY > 10
        ? "0 6px 18px rgba(0,0,0,.12)"
        : "0 4px 14px rgba(0,0,0,.06)";
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* 2. Close mobile menu after clicking a link */
  var mobileMenu = document.getElementById("mobileMenu");
  if (mobileMenu && window.bootstrap) {
    mobileMenu
      .querySelectorAll("a[href]:not([data-bs-toggle])")
      .forEach(function (link) {
        link.addEventListener("click", function () {
          var instance = bootstrap.Offcanvas.getInstance(mobileMenu);
          if (instance) instance.hide();
        });
      });
  }

  /* 3. Auto-highlight active nav link based on current page */
  var path = window.location.pathname.split("/").pop() || "index.html";
  document
    .querySelectorAll(".navbar-nav .nav-link[href]")
    .forEach(function (link) {
      var href = link.getAttribute("href");
      if (href.charAt(0) === "#") return;
      var isHome = href === "/" && (path === "" || path === "index.html");
      var isMatch = href === path;
      link.classList.toggle("active", isHome || isMatch);
      if (isHome || isMatch) link.setAttribute("aria-current", "page");
      else link.removeAttribute("aria-current");
    });

  /* 3b. Highlight "Specialities" when a child page is open */
  var childActive = document.querySelector(
    '.nav-row .dropdown-menu a[href="' + path + '"]',
  );
  if (childActive) {
    var dd = childActive.closest(".dropdown");
    var parentLink = dd && dd.querySelector(".nav-link");
    if (parentLink) parentLink.classList.add("active");
  }

  /* 4. Pause hero carousel when browser tab is hidden */
  var hero = document.getElementById("heroCarousel");
  if (hero && window.bootstrap) {
    var carousel = bootstrap.Carousel.getOrCreateInstance(hero);
    var reduceMotion =
      window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (reduceMotion) carousel.pause();
    document.addEventListener("visibilitychange", function () {
      if (document.hidden) carousel.pause();
      else if (!reduceMotion) carousel.cycle();
    });
  }

  /* 5. Appointment form -> WhatsApp */
  var form = document.getElementById("appointmentForm");
  var dateInput = document.getElementById("appointmentDate");

  if (dateInput) {
    var today = new Date();
    var yyyy = today.getFullYear();
    var mm = String(today.getMonth() + 1).padStart(2, "0");
    var dd2 = String(today.getDate()).padStart(2, "0");
    dateInput.min = yyyy + "-" + mm + "-" + dd2; // local date, not UTC
  }

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      function val(id) {
        var el = document.getElementById(id);
        return el ? el.value.trim() : "";
      }

      var lines = [
        "Hello Dr. Goyal, I would like to book an appointment.",
        "",
        "Name: " + val("patientName"),
        "Phone: " + val("patientPhone"),
      ];

      if (val("patientEmail")) lines.push("Email: " + val("patientEmail"));
      lines.push("Treatment: " + val("patientService"));
      lines.push("Preferred Date: " + val("appointmentDate"));
      if (val("appointmentTime"))
        lines.push("Preferred Time: " + val("appointmentTime"));
      if (val("patientMessage"))
        lines.push("Concern: " + val("patientMessage"));

      var url =
        "https://wa.me/" +
        WHATSAPP_NUMBER +
        "?text=" +
        encodeURIComponent(lines.join("\n"));

      window.open(url, "_blank", "noopener");
      form.reset();
    });
  }

  /* 6. Back-to-Top Button */
  var backToTopBtn = document.getElementById("backToTop");
  if (backToTopBtn) {
    window.addEventListener(
      "scroll",
      function () {
        if (window.scrollY > 400) {
          backToTopBtn.classList.add("active");
        } else {
          backToTopBtn.classList.remove("active");
        }
      },
      { passive: true }
    );

    backToTopBtn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* 7. Testimonials Swiper Slider */
  function initTestimonialSlider() {
    if (typeof Swiper !== "undefined" && document.querySelector(".testimonialSwiper")) {
      new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        speed: 700,
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: ".testimonial-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".testimonial-next",
          prevEl: ".testimonial-prev",
        },
        breakpoints: {
          576: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 28,
          },
        },
      });
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initTestimonialSlider);
  } else {
    initTestimonialSlider();
  }
});
