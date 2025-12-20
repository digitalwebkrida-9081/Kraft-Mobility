@extends('layouts.app')

@section('title', 'Login - Kraft Mobility')

@section('content')
  {{-- Simple placeholder login page. Replace with real auth later. --}}
  <section class="contact-section">
    <div class="contact-header">
      <h2>Login</h2>
      <p>Access your Kraft Mobility account</p>
    </div>

    <div class="contact-container">
      <form class="contact-form">
        <div class="form-grid">
          <div class="form-group full-width">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Email address" />
          </div>

          <div class="form-group full-width">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" />
          </div>
        </div>

        <button type="submit" class="btn-submit">Log In</button>
      </form>
    </div>
  </section>
@endsection


