@extends('layouts.app')

@section('title', 'Blogs - Kraft Mobility')

@push('styles')
  <link rel="stylesheet" href="{{ asset('blog.css') }}" />
@endpush

@section('content')
  <section class="blog-hero">
    <img
      src="{{ asset('assets/images/blog-bg.jpg') }}"
      alt="Blog Background"
      class="hero-image"
    />

    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1>Latest News in Kraft Mobility Services</h1>
    </div>
  </section>

  <section class="blog-section">
    <div class="blog-grid">
      <article class="blog-card">
        <div class="card-image">
          <img src="{{ asset('assets/images/blog-1.jpg') }}" alt="Blog Image 1" />
        </div>
        <div class="card-body">
          <span class="blog-date">05-December-2025</span>
          <h3 class="blog-title">
            Common Challenges for Expats In Saudi Arabia
          </h3>
          <p class="blog-excerpt">
            Relocating to Saudi Arabia offers an extraordinary opportunity to
            experience one of the world’s most rapidly evolving...
          </p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </article>

      <article class="blog-card">
        <div class="card-image">
          <img src="{{ asset('assets/images/blog-1.jpg') }}" alt="Blog Image 2" />
        </div>
        <div class="card-body">
          <span class="blog-date">25-November-2025</span>
          <h3 class="blog-title">The Importance of Relocation Coaching</h3>
          <p class="blog-excerpt">
            Relocating to a new city, state, or country is one of life’s
            biggest transitions. Relocation often looks straightforward...
          </p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </article>

      <article class="blog-card">
        <div class="card-image">
          <img src="{{ asset('assets/images/blog-1.jpg') }}" alt="Blog Image 3" />
        </div>
        <div class="card-body">
          <span class="blog-date">05-November-2025</span>
          <h3 class="blog-title">Understand Company Registration in Oman</h3>
          <p class="blog-excerpt">
            Oman, located at the crossroads of Asia, Africa and Europe, has
            steadily emerged as one of the most attractive business...
          </p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </article>

      <article class="blog-card">
        <div class="card-image">
          <img src="{{ asset('assets/images/blog-1.jpg') }}" alt="Blog Image 4" />
        </div>
        <div class="card-body">
          <span class="blog-date">05-November-2025</span>
          <h3 class="blog-title">Step-by-Step Guide for Business Setup</h3>
          <p class="blog-excerpt">
            Understanding the local regulations is key to a successful
            business launch in the Middle East region...
          </p>
          <a href="#" class="read-more">Read More</a>
        </div>
      </article>
    </div>
  </section>
@endsection


