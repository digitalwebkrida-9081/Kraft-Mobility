@extends('layouts.app')

@section('title', 'About Us - Kraft Mobility')

@push('styles')
  <link rel="stylesheet" href="{{ asset('about-us.css') }}" />
@endpush

@section('content')
  <section class="about-hero">
    <img
      src="{{ asset('assets/images/About-us-bg.jpg') }}"
      alt="About Background"
      class="hero-image"
    />

    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1>ABOUT US</h1>
    </div>
  </section>

  <section class="mission-section">
    <div class="mission-container">
      <div class="mission-content">
        <h2 class="mission-title">OUR MISSION</h2>
        <div class="mission-text">
          <p>
            Our mission is to provide world-class relocation and immigration
            services to employees while maintaining full compliance with local
            laws—without compromising on speed or service quality.
          </p>
          <p>
            Kraft Mobility was founded by seasoned professionals from the
            relocation and immigration industry, bringing together a
            management team with over 30 years of combined experience.
          </p>
          <p>
            We are solution-driven and committed to delivering an exceptional
            relocation experience to every individual we support.
          </p>
          <p>
            At Kraft Mobility, we stand for compliance, speed, and quality
            service.
          </p>
        </div>
      </div>

      <div class="mission-image-wrapper">
        <img
          src="{{ asset('assets/images/about-us-mission.png') }}"
          alt="Kraft Mobility Mission"
          class="mission-img"
        />
      </div>
    </div>
  </section>

  <section class="leaders-section">
    <div class="leaders-header">
      <h2>MEET OUR LEADERS</h2>
      <p>The Minds Behind Our Success</p>
    </div>

    <div class="leaders-container">
      <div class="leader-card">
        <div class="leader-image-wrapper">
          <div class="leader-bg-shape"></div>
          <img
            src="{{ asset('assets/images/meet-our-leader-1.jpg') }}"
            alt="Rahul Singh"
            class="leader-img"
          />
        </div>

        <div class="leader-info">
          <h3 class="leader-name">Rahul Singh</h3>
          <span class="leader-role">Co-founder and Managing Director</span>

          <div class="leader-bio">
            <p>
              Rahul is a management and engineering graduate with more than 20
              years of experience in the mobility industry. He has held key
              mobility roles in multinational organizations such as Genpact,
              General Electric (GE), and Santa Fe Relocation. A Six
              Sigma–certified professional, Rahul brings deep expertise in
              developing streamlined processes and procedures.
            </p>
            <p>
              After leading the mobility division of an international
              relocation company for over four years, he chose to embark on
              his entrepreneurial journey. Based in Bangalore, Rahul enjoys
              spending his free time with his family.
            </p>
          </div>
        </div>
      </div>

      <div class="leader-card reverse-layout">
        <div class="leader-image-wrapper">
          <div class="leader-bg-shape"></div>
          <img
            src="{{ asset('assets/images/meet-our-leader-1.jpg') }}"
            alt="Arijeet Dey"
            class="leader-img"
          />
        </div>

        <div class="leader-info">
          <h3 class="leader-name">Arijeet Dey</h3>
          <span class="leader-role">Co-founder and Director Sales</span>

          <div class="leader-bio">
            <p>
              Arijeet is a commerce graduate from Delhi University and is
              currently based in Pune. He brings over 12 years of experience
              in client servicing and has worked with organizations such as
              Aviva Global Services, Santa Fe Relocation, Brunel, and PMR in
              various capacities. In his previous role as Business Development
              Head for the West region, he played a key role in driving
              significant business growth.
            </p>
            <p>
              Known for his “never-say-die” attitude and strong
              problem-solving skills, Arijeet takes pride in delivering
              effective solutions to clients. In his free time, he enjoys
              spending quality moments with his family and close friends.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="stats-section">
    <div class="stats-container">
      <div class="stat-item">
        <span class="stat-number">25+</span>
        <span class="stat-label">Cities</span>
      </div>

      <div class="stat-item">
        <span class="stat-number">7+</span>
        <span class="stat-label">Languages</span>
      </div>

      <div class="stat-item">
        <span class="stat-number">50+</span>
        <span class="stat-label">Employees</span>
      </div>
    </div>
  </section>

  <section class="philosophy-section">
    <div class="philosophy-container">
      <div class="ph-row">
        <div class="ph-image-wrapper">
          <img
            src="{{ asset('assets/images/philosophy-1.jpg') }}"
            alt="Our Philosophy"
            class="ph-img"
          />
        </div>

        <div class="ph-content">
          <h2 class="ph-title">Our Philosophy</h2>
          <p class="ph-text">
            We believe that the biggest challenge when moving to a new place
            is having someone trustworthy to rely on for proper guidance. Our
            team members are carefully selected and trained to provide that
            level of trust and support to every assignee.
          </p>
        </div>
      </div>

      <div class="ph-row reverse-mobile">
        <div class="ph-content">
          <h2 class="ph-title">Our Expertise</h2>
          <p class="ph-text">
            An experienced team dedicated to delivering seamless service,
            ensuring the peace of mind you need when moving to a new place.
          </p>
        </div>

        <div class="ph-image-wrapper">
          <img
            src="{{ asset('assets/images/philosophy-2.jpg') }}"
            alt="Our Expertise"
            class="ph-img"
          />
        </div>
      </div>
    </div>
  </section>
@endsection


