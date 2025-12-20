document.addEventListener("DOMContentLoaded", function () {
  // --- VARIABLES ---
  const mobileToggle = document.querySelector(".mobile-toggle");
  const navMenu = document.querySelector(".nav-menu");
  const dropdowns = document.querySelectorAll(".nav-item-dropdown");
  const navLinks = document.querySelectorAll(".nav-link");

  // --- 1. MENU TOGGLE (Full Screen Logic) ---
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      toggleMenu();
    });
  }

  function toggleMenu() {
    navMenu.classList.toggle("active");
    mobileToggle.classList.toggle("active");

    // Prevent body scrolling when menu is open
    if (navMenu.classList.contains("active")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "auto";
    }
  }

  function closeMenu() {
    navMenu.classList.remove("active");
    mobileToggle.classList.remove("active");
    document.body.style.overflow = "auto";
  }

  // --- 2. DROPDOWN LOGIC (Mobile Click) ---
  if (window.innerWidth <= 900) {
    dropdowns.forEach((dropdown) => {
      const link = dropdown.querySelector(".nav-link");

      if (link) {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          e.stopPropagation();

          // Check if this specific dropdown is already active
          const isActive = dropdown.classList.contains("active");

          // Close ALL dropdowns first (Accordion style)
          dropdowns.forEach((other) => other.classList.remove("active"));

          // If it wasn't active before, open it now
          if (!isActive) {
            dropdown.classList.add("active");
          }
        });
      }
    });
  }

  // --- 3. CLOSE MENU ON LINK CLICK ---
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      // If it's a regular link (not a dropdown toggle), close menu
      if (!link.closest(".nav-item-dropdown")) {
        closeMenu();
      }
      // If it IS a service box link (inside mega menu), close menu
      if (link.classList.contains("service-box")) {
        closeMenu();
      }
    });
  });

  // Handle clicks on sub-items (service-box) manually
  const subItems = document.querySelectorAll(".service-box");
  subItems.forEach((item) => {
    item.addEventListener("click", closeMenu);
  });

  // --- 4. FAQ LOGIC ---
  const faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach((item) => {
    const question = item.querySelector(".faq-question");
    const answer = item.querySelector(".faq-answer");
    if (question && answer) {
      question.addEventListener("click", () => {
        faqItems.forEach((other) => {
          if (other !== item && other.classList.contains("active")) {
            other.classList.remove("active");
            other.querySelector(".faq-answer").style.maxHeight = 0;
          }
        });
        item.classList.toggle("active");
        answer.style.maxHeight = item.classList.contains("active")
          ? answer.scrollHeight + "px"
          : 0;
      });
    }
  });

  // --- 5. ACTIVE TAB HIGHLIGHT ---
  const currentLocation = location.href;
  const menuLength = navLinks.length;
  for (let i = 0; i < menuLength; i++) {
    if (navLinks[i].href === currentLocation) {
      navLinks[i].classList.add("active");
    }
  }
});

function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  document.querySelectorAll(".dropdown-list").forEach((list) => {
    if (list.id !== id) list.classList.remove("show");
  });
  dropdown.classList.toggle("show");
}

// Update Phone Selection (Changes Image Src + Text Code)
function selectPhone(countryCode, dialCode) {
  // Update the flag image source
  document.getElementById(
    "selected-phone-flag"
  ).src = `https://flagcdn.com/w40/${countryCode}.png`;

  // Update the dial code text
  document.getElementById("selected-phone-code").innerText = dialCode;

  // Hide dropdown
  document.getElementById("phone-dropdown").classList.remove("show");
}

// Update Country Selection (Changes Image Src + Input Value)
function selectCountry(countryCode, countryName) {
  // Update the flag image source
  document.getElementById(
    "selected-country-flag"
  ).src = `https://flagcdn.com/w40/${countryCode}.png`;

  // Update the input value
  document.getElementById("country").value = countryName;

  // Hide dropdown
  document.getElementById("country-dropdown").classList.remove("show");
}

// Close when clicking outside
window.onclick = function (event) {
  if (!event.target.closest(".dropdown-trigger")) {
    var dropdowns = document.getElementsByClassName("dropdown-list");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

// =============================
//  Home PAge Contact form dropdown
// =============================

// Toggle Logic
function toggleJourneyDropdown(listId) {
  const list = document.getElementById(listId);
  // Close others
  document.querySelectorAll(".journey-section .dropdown-list").forEach((el) => {
    if (el.id !== listId) el.classList.remove("show");
  });
  list.classList.toggle("show");
}

// Select Phone Logic
function selectJourneyPhone(countryCode, dialCode) {
  // Update Flag and Code
  document.getElementById(
    "journey-phone-flag"
  ).src = `https://flagcdn.com/w40/${countryCode}.png`;
  document.getElementById("journey-phone-code").innerText = dialCode;
  // Close List
  document.getElementById("journey-phone-list").classList.remove("show");
}

// Select Country Logic
function selectJourneyCountry(countryCode, countryName) {
  // Update Flag and Input Value
  document.getElementById(
    "journey-country-flag"
  ).src = `https://flagcdn.com/w40/${countryCode}.png`;
  document.getElementById("journey-country-input").value = countryName;
  // Close List
  document.getElementById("journey-country-list").classList.remove("show");
}

// Close when clicking outside
window.addEventListener("click", function (e) {
  if (!e.target.closest(".dropdown-trigger")) {
    document
      .querySelectorAll(".journey-section .dropdown-list")
      .forEach((el) => {
        el.classList.remove("show");
      });
  }
});
