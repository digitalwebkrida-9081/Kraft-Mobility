@extends('layouts.app')

@section('title', 'Kraft Mobility - Home')

@section('content')
  <section class="home-hero">
    <img
      src="{{ asset('assets/images/Home-hero-bg.jpg') }}"
      alt="Global Future"
      class="hero-bg-img"
    />

    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1>Build Your Global Future with Kraft Mobility</h1>

      <p class="hero-services">
        Visa &amp; Immigration • Relocation • House Hold Good Shipment •
        Expatriate Tax Advisory • Travel Assistance
      </p>

      <p class="hero-description">
        We help professionals, students, and families relocate worldwide with
        seamless documentation, expert guidance, and transparent processes.
      </p>

      <div class="hero-buttons">
        <a href="#" class="btn btn-outline">Check Eligibility</a>
        <a href="{{ route('contact') }}" class="btn btn-primary">
          Book Free Consultation
        </a>
      </div>
    </div>
  </section>

  <section class="location-section">
    <div class="location-header">
      <h2 class="location-title">LOCATION</h2>
      <p class="location-subtitle">Global Reach, Local Expertise</p>
    </div>
    <div class="location-grid">
      <a href="{{ url('locations/mumbai.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/home-mumbai-location.png') }}"
              alt="Mumbai Icon"
            />
          </div>
          <h3 class="city-name">Mumbai</h3>
        </div>
      </a>
      <a href="{{ url('locations/bengaluru.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/bengluru-home-location.png') }}"
              alt="Bengaluru Icon"
            />
          </div>
          <h3 class="city-name">Bengaluru</h3>
        </div>
      </a>
      <a href="{{ url('locations/pune.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img src="{{ asset('assets/images/pune-home-location.png') }}" alt="Pune Icon" />
          </div>
          <h3 class="city-name">Pune</h3>
        </div>
      </a>
      <a href="{{ url('locations/chennai.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/chennai-home-location.png') }}"
              alt="Chennai Icon"
            />
          </div>
          <h3 class="city-name">Chennai</h3>
        </div>
      </a>
      <a href="{{ url('locations/hydrabad.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/hydrabad-home-location.png') }}"
              alt="Hyderabad Icon"
            />
          </div>
          <h3 class="city-name">Hyderabad</h3>
        </div>
      </a>
      <a href="{{ url('locations/delhi.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/delhi-home-location.png') }}"
              alt="Delhi Icon"
            />
          </div>
          <h3 class="city-name">Delhi</h3>
        </div>
      </a>
      <a href="{{ url('locations/ahmedabad.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/ahmedabad-home-location.png') }}"
              alt="Ahmedabad Icon"
            />
          </div>
          <h3 class="city-name">Ahmedabad</h3>
        </div>
      </a>
      <a href="{{ url('locations/kolakata.html') }}">
        <div class="city-card">
          <div class="city-icon">
            <img
              src="{{ asset('assets/images/kolakata-home-location.png') }}"
              alt="Kolkata Icon"
            />
          </div>
          <h3 class="city-name">Kolkata</h3>
        </div>
      </a>
    </div>
  </section>

  <section class="services-section">
    <div class="services-header">
      <h2 class="services-title">SERVICES</h2>
      <p class="services-subtitle">Your Needs, Our Expertise</p>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="card-image">
          <img src="{{ asset('assets/images/service-home-1.jpg') }}" alt="Schengen Visa" />
        </div>
        <div class="card-content">
          <h3>Schengen Visa Assistance</h3>
          <p class="main-desc">Tourist | Business | Family Visit</p>
          <p class="sub-desc">
            Full support—from documentation to appointment &amp; itinerary
            planning.
          </p>
        </div>
      </div>

      <div class="service-card">
        <div class="card-image">
          <img
            src="{{ asset('assets/images/service-home-2.jpg') }}"
            alt="Global Relocation"
          />
        </div>
        <div class="card-content">
          <h3>Global Relocation Support</h3>
          <p class="main-desc">
            Moving countries made easy—relocation planning, documentation,
            pre-arrival &amp; post-landing assistance
          </p>
        </div>
      </div>

      <div class="service-card">
        <div class="card-image">
          <img src="{{ asset('assets/images/service-home-3.jpg') }}" alt="Business Visa" />
        </div>
        <div class="card-content">
          <h3>Business &amp; Corporate Visa Solutions</h3>
          <p class="main-desc">
            Tailored solutions for companies sending employees abroad.
          </p>
        </div>
      </div>

      <div class="service-card">
        <div class="card-image">
          <img
            src="{{ asset('assets/images/service-home-4.jpg') }}"
            alt="Documentation Support"
          />
        </div>
        <div class="card-content">
          <h3>Complete Documentation Support</h3>
          <p class="main-desc">
            SOPs | Cover Letters | Travel Itineraries | Sponsorship Letters
          </p>
          <p class="sub-desc">High accuracy &amp; compliance ensured.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="why-choose-section">
    <div class="circle-decoration top-left">
      <div class="circle-outer"></div>
      <div class="circle-inner"></div>
    </div>
    <div class="circle-decoration bottom-right">
      <div class="circle-outer"></div>
      <div class="circle-inner"></div>
    </div>

    <div class="why-choose-container">
      <div class="why-image-wrapper">
        <img
          src="{{ asset('assets/images/why-choose-home.png') }}"
          alt="Why Choose Kraft Mobility"
          class="why-img"
        />
      </div>

      <div class="why-content">
        <h2 class="why-title">WHY CHOOSE KRAFT MOBILITY?</h2>
        <p class="why-subtitle">We Make Global Relocation Hassle-Free</p>

        <ul class="why-list">
          <li>
            <span class="icon-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            Expert Guidance for All Major Countries
          </li>
          <li>
            <span class="icon-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            Zero Hidden Charges — 100% Transparency
          </li>
          <li>
            <span class="icon-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            Fast Processing &amp; Timely Updates
          </li>
          <li>
            <span class="icon-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            Complete Documentation &amp; File Preparation
          </li>
          <li>
            <span class="icon-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            Dedicated Case Manager for Every Client
          </li>
          <li>
            <span class="icon-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            High Success Rate &amp; Client Satisfaction
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="about-home-section">
    <div class="about-home-container">
      <div class="about-text-content">
        <h2 class="about-title">ABOUT KRAFT MOBILITY</h2>

        <div class="about-subtitle">
          Your Trusted Partner for
          <span class="highlight">
            Global Mobility &amp; Immigration Solutions
          </span>
        </div>

        <p class="about-description">
          <span class="highlight-bold">Kraft Mobility Pvt. Ltd.</span> is a
          leading global visa and relocation support company helping
          individuals and professionals move abroad confidently. With years of
          experience, transparent guidance, and 100% documentation support, we
          make your international journey smooth and stress-free.
        </p>

        <ul class="about-features-list">
          <li>
            <span class="custom-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            1000+ Clients Assisted
          </li>
          <li>
            <span class="custom-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            97% Documentation Accuracy
          </li>
          <li>
            <span class="custom-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            End-to-End Support
          </li>
          <li>
            <span class="custom-check">
              <img
                src="{{ asset('assets/images/why-choose-icons.svg') }}"
                alt="why-choose-icons"
                class="why-choose-icons"
              />
            </span>
            Fast &amp; Transparent Process
          </li>
        </ul>
      </div>

      <div class="about-image-wrapper">
        <img
          src="{{ asset('assets/images/about-us-home.jpg') }}"
          alt="About Kraft Mobility"
          class="about-img"
        />
      </div>
    </div>
  </section>

  <section class="testimonial-section">
    <h2 class="section-title">TESTIMONIALS</h2>

    <div class="testimonial-container">
      <div class="testimonial-card">
        <div class="card-profile">
          <img src="{{ asset('assets/images/testimonials-1.svg') }}" alt="Shagun Walia" />
          <h3>Shagun Walia</h3>
        </div>
        <p class="card-quote">
          "I’ve tried many peanut butter brands, but this one stands out for
          its rich, creamy texture and natural taste. No unnecessary sugar —
          just pure peanut goodness!"
        </p>
        <div class="card-rating">
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star empty">★</span>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="card-profile">
          <img src="{{ asset('assets/images/testimonials-1.svg') }}" alt="Shagun Walia" />
          <h3>Shagun Walia</h3>
        </div>
        <p class="card-quote">
          "I’ve tried many peanut butter brands, but this one stands out for
          its rich, creamy texture and natural taste. No unnecessary sugar —
          just pure peanut goodness!"
        </p>
        <div class="card-rating">
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star empty">★</span>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="card-profile">
          <img src="{{ asset('assets/images/testimonials-1.svg') }}" alt="Shagun Walia" />
          <h3>Shagun Walia</h3>
        </div>
        <p class="card-quote">
          "I’ve tried many peanut butter brands, but this one stands out for
          its rich, creamy texture and natural taste. No unnecessary sugar —
          just pure peanut goodness!"
        </p>
        <div class="card-rating">
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star filled">★</span>
          <span class="star empty">★</span>
        </div>
      </div>
    </div>

    <div class="testimonial-dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </section>

  <section class="clients-section">
    <h2 class="clients-title">OUR CLIENTS</h2>

    <div class="clients-container">
      <img
        src="{{ asset('assets/images/canon-client.svg') }}"
        alt="Canon"
        class="client-logo"
      />

      <img
        src="{{ asset('assets/images/tech-mahindra.svg') }}"
        alt="Tata Mahindra"
        class="client-logo"
      />

      <img
        src="{{ asset('assets/images/synechron-client.svg') }}"
        alt="Synechron"
        class="client-logo"
      />

      <img
        src="{{ asset('assets/images/springer-nature-client.svg') }}"
        alt="Springer Nature"
        class="client-logo"
      />

      <img
        src="{{ asset('assets/images/ANF-counsulting-client.svg') }}"
        alt="ANF Counsulting"
        class="client-logo"
      />

      <img
        src="{{ asset('assets/images/tata-electronics-client.svg') }}"
        alt="Tata Electronics"
        class="client-logo"
      />
    </div>
  </section>

  <section class="faq-section">
    <h2 class="faq-title">FAQs</h2>

    <div class="faq-container">
      <div class="faq-item">
        <button class="faq-question">
          <span>Which visas do you help with?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            We assist with Tourist, Business, Student, and Family Reunion
            visas for major destinations including the USA, UK, Canada,
            Australia, and Schengen countries.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>Do you provide end-to-end documentation?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes! We handle everything from filling out application forms and
            writing SOPs/Cover Letters to preparing you for the interview and
            tracking your application status.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>How do I start?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            Simply click the "Book Free Consultation" button at the top of the
            page or fill out the contact form. Our team will get in touch with
            you within 24 hours.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="journey-section">
    <div class="journey-header">
      <h2>Start Your Journey, with us</h2>
      <p>Simplifying Transitions, Empowering New Beginnings</p>
    </div>

    <div class="journey-form-container">
      <form class="journey-form">
        <div class="form-grid">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" placeholder="First Name" />
          </div>

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" />
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <div class="input-with-icon">
              <span class="prefix">+1</span>
              <input type="tel" placeholder="Enter Your Contact" />
            </div>
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Email address" />
          </div>

          <div class="form-group">
            <label>Company Name</label>
            <input type="text" placeholder="Company Name" />
          </div>

          <div class="form-group">
            <label>Country</label>
            <input type="text" placeholder="Country Name" />
          </div>

          <div class="form-group full-width">
            <label>Requirement</label>
            <textarea placeholder="Other Requirement Details..."></textarea>
          </div>
        </div>

        <button type="submit" class="btn-submit">Submit</button>
      </form>
    </div>
  </section>
@endsection


