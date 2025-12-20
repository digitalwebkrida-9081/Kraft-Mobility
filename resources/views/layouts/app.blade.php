<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Kraft Mobility')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    {{-- Core styles (place these files in public/ the same as in your static site) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('index.css') }}" />
    <link rel="stylesheet" href="{{ asset('services/services.css') }}" />

    @stack('styles')
  </head>
  <body>
    <header class="main-header">
      <div class="header-container">
        <a href="{{ route('home') }}">
          <div class="logo-wrapper">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="logo-image" />
          </div>
        </a>

        <nav class="nav-menu">
          <a href="{{ route('home') }}" class="nav-link">Home</a>
          <a href="{{ route('about') }}" class="nav-link">About Us</a>

          <div class="nav-item-dropdown location-dropdown">
            <a href="#" class="nav-link">Location</a>
            <img
              class="dropdown-arrow"
              src="{{ asset('assets/images/dropdown-header-icon.svg') }}"
              alt="arrow"
            />

            <div class="mega-menu">
              <div class="mega-menu-grid">
                {{-- These still point to static HTML files under public/locations --}}
                <a href="{{ url('locations/mumbai.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/home-mumbai-location.png') }}"
                      alt="Mumbai"
                    />
                  </div>
                  <span>Mumbai</span>
                </a>

                <a href="{{ url('locations/bengaluru.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/bengluru-home-location.png') }}"
                      alt="Bengaluru"
                    />
                  </div>
                  <span>Bengaluru</span>
                </a>

                <a href="{{ url('locations/pune.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/pune-home-location.png') }}"
                      alt="Pune"
                    />
                  </div>
                  <span>Pune</span>
                </a>

                <a href="{{ url('locations/chennai.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/chennai-home-location.png') }}"
                      alt="Chennai"
                    />
                  </div>
                  <span>Chennai</span>
                </a>

                <a href="{{ url('locations/hydrabad.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/hydrabad-home-location.png') }}"
                      alt="Hyderabad"
                    />
                  </div>
                  <span>Hyderabad</span>
                </a>

                <a href="{{ url('locations/delhi.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/delhi-home-location.png') }}"
                      alt="Delhi"
                    />
                  </div>
                  <span>Delhi</span>
                </a>

                <a href="{{ url('locations/ahmedabad.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/ahmedabad-home-location.png') }}"
                      alt="Ahmedabad"
                    />
                  </div>
                  <span>Ahmedabad</span>
                </a>

                <a href="{{ url('locations/kolakata.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/kolakata-home-location.png') }}"
                      alt="Kolkata"
                    />
                  </div>
                  <span>Kolkata</span>
                </a>
              </div>
            </div>
          </div>

          <div class="nav-item-dropdown services-dropdown">
            <a href="#" class="nav-link">Services</a>
            <img
              class="dropdown-arrow"
              src="{{ asset('assets/images/dropdown-header-icon.svg') }}"
              alt="arrow"
            />

            <div class="mega-menu">
              <div class="mega-menu-grid">
                {{-- Static HTML service pages under public/services --}}
                <a href="{{ url('services/destination-service.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/destination-service-icon.png') }}"
                      alt="Destination"
                    />
                  </div>
                  <span>Destination Service</span>
                </a>

                <a href="{{ url('services/immigration-service.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/immigration-service-icon.png') }}"
                      alt="Immigration"
                    />
                  </div>
                  <span>Immigration Service</span>
                </a>

                <a
                  href="{{ url('services/shipment-household-service.html') }}"
                  class="service-box"
                >
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/shipment-household-service-icon.png') }}"
                      alt="Shipment"
                    />
                  </div>
                  <span>Shipment &amp; Household</span>
                </a>

                <a
                  href="{{ url('services/tax-advisory-service.html') }}"
                  class="service-box"
                >
                  <div class="icon-wrapper">
                    <img src="{{ asset('assets/images/tax-advisory-icon.png') }}" alt="Tax" />
                  </div>
                  <span>Tax Advisory Service</span>
                </a>

                <a
                  href="{{ url('services/furniture-rental-service.html') }}"
                  class="service-box"
                >
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/furniture-service-icon.png') }}"
                      alt="Furniture"
                    />
                  </div>
                  <span>Furniture Rental</span>
                </a>

                <a href="{{ url('services/car-rental-service.html') }}" class="service-box">
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/car-rental-service-icon.png') }}"
                      alt="Car"
                    />
                  </div>
                  <span>Car Rental Service</span>
                </a>

                <a
                  href="{{ url('services/corporate-housing-service.html') }}"
                  class="service-box"
                >
                  <div class="icon-wrapper">
                    <img
                      src="{{ asset('assets/images/corporate-housing-service-icon.png') }}"
                      alt="Housing"
                    />
                  </div>
                  <span>Corporate Housing</span>
                </a>
              </div>
            </div>
          </div>

          <a href="{{ route('blog') }}" class="nav-link">Blogs</a>
          <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
        </nav>

        <div class="auth-section">
          <a href="{{ route('login') }}" class="btn-login">Log In</a>
        </div>

        <div class="mobile-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

    @yield('content')

    <footer class="main-footer">
      <div class="footer-content">
        <div class="footer-logo-wrapper">
          <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="logo-image" />
        </div>

        <div class="footer-divider-small"></div>

        <div class="footer-text">
          <h3>Relocation is an emotional journey</h3>
          <p>“Finding a sense of belonging in unfamiliar surroundings”</p>
        </div>

        <div class="social-links">
          <a href="#" class="social-icon facebook" aria-label="Facebook">f</a>
          <a href="#" class="social-icon instagram" aria-label="Instagram">in</a>
          <a href="#" class="social-icon linkedin" aria-label="LinkedIn">li</a>
          <a href="#" class="social-icon twitter" aria-label="Twitter">x</a>
        </div>
      </div>

      <div class="footer-bottom">
        <p class="copyright">
          Copyright © 2025 kraftmobility - All Rights Reserved.
        </p>
        <a href="#" class="privacy-policy">Privacy Policy</a>
      </div>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('scripts')
  </body>
</html>


