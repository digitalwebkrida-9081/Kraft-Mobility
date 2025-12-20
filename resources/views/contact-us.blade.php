@extends('layouts.app')

@section('title', 'Contact Us - Kraft Mobility')

@push('styles')
  <link rel="stylesheet" href="{{ asset('contact-us.css') }}" />
@endpush

@section('content')
  <section class="contact-section">
    <div class="contact-header">
      <h2>Start Your Journey, with us</h2>
      <p>Simplifying Transitions, Empowering New Beginnings</p>
    </div>

    <div class="contact-container">
      <form class="contact-form">
        <div class="form-grid">
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" placeholder="First Name" />
          </div>

          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" placeholder="Last Name" />
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <div class="input-with-icon">
              <span class="country-code">+91</span>
              <input type="tel" id="phone" placeholder="Enter Your Contact" />
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Email address" />
          </div>

          <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" id="company" placeholder="Company Name" />
          </div>

          <div class="form-group">
            <label for="country">Country</label>
            <div class="input-with-icon">
              <span class="country-flag">🏳️</span>
              <input type="text" id="country" placeholder="Country Name" />
            </div>
          </div>
        </div>

        <div class="form-group full-width">
          <label for="requirement">Requirement</label>
          <textarea
            id="requirement"
            placeholder="Other Requirement Details..."
          ></textarea>
        </div>

        <button type="submit" class="btn-submit">Submit</button>
      </form>

      <div class="contact-info-card">
        <h3>Get in touch with <span>us</span></h3>
        <p class="info-subtitle">You can also reach out to us at</p>

        <div class="info-item">
          <div class="info-icon">📍</div>
          <div class="info-details">
            <h4>Bangalore, India</h4>
            <p>Bangalore, India</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">📞</div>
          <div class="info-details">
            <h4>Call Us On</h4>
            <p>+91 96320 06896</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">✉️</div>
          <div class="info-details">
            <h4>Mail Us @</h4>
            <p>info@kraftmobility.com</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon">🌐</div>
          <div class="info-details">
            <h4>Website</h4>
            <p>www.kraftmobility.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


