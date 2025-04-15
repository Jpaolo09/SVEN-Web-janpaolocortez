@extends('layouts.app')

@section('content')
@include('partials.alerts')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="images/paw-logo.png" class="img-fluid rounded-circle" alt="Logo"
              style="height: 50px; width: 50px;">
          <span class="">PAWTASTIC</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="#visit">Schedule a Visit</a></li>
          </ul>
      </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="hero" class="hero">
  <div class="container h-100 d-flex align-items-center justify-content-end">
      <div class="text-box text-start" style="width: 30%;">
          <h2 class="display-4 mb-4" style="font-weight: 680;" data-aos="fade-left" data-aos-delay="300">We care for
              your furry little loved ones while
              you're away</h2>
          <a href="#visit" class="btn btn-light rounded-pill px-5 py-2 mt-5" data-aos="flip-down">Schedule a Visit</a>
      </div>
  </div>
  <div class="hero-credit fw-bold">Ozzie in Brooklyn</div>
</section>

<!-- About Us Section -->
<section id="about" class="about-us">
  <div class="container text-center">
      <div class="row align-items-center">
          <!-- Text Column -->
          <div class="col-lg-5 col-12 mb-4 mb-lg-0">
              <h1 class="display-4 text-start fw-bold mb-5" style="font-weight: 500;" data-aos="fade-right">
                  Expert care for your furry, feathery, or scaley friend
              </h1>
              <p class="text-start lead mb-5" data-aos="fade-right">
                  We know how stressful it is to leave your pets at home alone. We're a team of experienced animal
                  caregivers, well connected to local veterinarians. Trust to us to love them like our own, and to
                  keep them safe and happy till you're home.
              </p>
              <div class="d-flex">
                  <a href="#visit" class="btn btn-secondary rounded-pill px-5 mt-4 py-2" data-aos="flip-down">
                      Schedule a Visit
                  </a>
              </div>
          </div>

          <!-- Spacer (only visible on large screens) -->
          <div class="d-none d-lg-block col-lg-2"></div>

          <div class="col-lg-5 col-12 p-3">
              <div class="row g-3">
                  <div class="col-6">
                      <div class="square-img-wrapper">
                          <img src="{{ asset('images/muffin.jpg') }}" alt="Pet 1" class="img-fluid rounded object-fit-cover" />
                          <div class="overlay-text">Muffin</div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="square-img-wrapper">
                          <img src="{{ asset('images/peep.jpg') }}" alt="Pet 2" class="img-fluid rounded object-fit-cover" />
                          <div class="overlay-text">Peep</div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="square-img-wrapper">
                          <img src="{{ asset('images/natasha.jpg') }}" alt="Pet 3" class="img-fluid rounded object-fit-cover" />
                          <div class="overlay-text">Natasha</div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="square-img-wrapper">
                          <img src="{{ asset('images/marlon.jpg') }}" alt="Pet 4" class="img-fluid rounded object-fit-cover" />
                          <div class="overlay-text">Marlon</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Schedule a Visit Section -->
<section id="visit" class="schedule-visit">
  <div class="container-fluid">
      <div class="row">
          <!-- Schedul a visit left side -->
          <div class="col-12 col-md-5 bg-primary text-white d-flex justify-content-center align-items-center visit-services"
              style="min-height: 100vh;">
              <div style="max-width: 400px; width: 100%;">
                  <div class="d-flex align-items-center mb-4">
                      <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="images/paw-logo.png" alt="Logo" class="img-fluid rounded-circle"
                        style="height: 70px; width: 70px;">
                      <span class="ms-3 fs-5 fw-bold text-uppercase">Pawtastic</span>
                      </a>
                  </div>

                  <p class="fw-bold mb-3 mt-5" style="font-size: 2.5rem;">All services include:</p>

                  <ul class="p-3">
                      <li class="fw-bold" data-aos="fade-right">A photo update for you along</li>
                      <li class="my-5 fw-bold" data-aos="fade-right">Notifications of sitter arrival</li>
                      <li class="my-5 fw-bold" data-aos="fade-right">Treats for your pet, with your permission
                      </li>
                  </ul>
              </div>
          </div>

          <!-- Schedule a visit right side form -->
          <div class="col-12 col-md-7 d-flex justify-content-center align-items-center"
              style="min-height: 110vh; background-color: #FAF0E6">
              <form style="width: 100%; max-width: 700px;" action="{{ route('appointments.store') }}" method="POST">
                  @csrf
                  <h2 class="display-4 mb-4 text-start fw-bold" data-aos="fade-down-right">We'll take your dog for a
                      walk. Just tell us when!
                  </h2>

                  <!-- Row 1: Frequency and Start Date -->
                  <div class="row my-5" data-aos="fade-up">
                      <div class="col-md-6 col-md-6 mb-5 mb-md-0">
                          <label for="frequency" class="form-label">Frequency</label>
                          <br>
                          <div class="btn-group d-flex flex-wrap w-100" role="group"
                              aria-label="Segmented checkbox-style selector">
                              <input type="radio" class="btn-check" id="recurring" name="frequency" value="Recurring"
                                  autocomplete="off" required>
                              <label class="btn btn-outline-secondary" for="recurring">Recurring</label>

                              <input type="radio" class="btn-check" id="onetime" name="frequency" value="One Time"
                                  autocomplete="off">
                              <label class="btn btn-outline-secondary" for="onetime">One Time</label>
                          </div>
                          @if ($errors->has('frequency'))
                              <div class="text-danger small mt-2">Please select a valid frequency.</div>
                          @endif
                      </div>
                      <div class="col-md-6">
                          <label for="start-date" class="form-label">Start Date</label>
                          <input type="date" class="form-control" id="start-date" name="start_date" min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}" required>
                          @error('start_date')
                              <div class="text-danger mt-2 small">{{ $message }}</div>
                          @enderror
                      </div>
                  </div>

                  <!-- Row 2: Day -->
                  <div class="my-5" data-aos="fade-up">
                      <label for="day" class="form-label">Days</label>
                      <small class="text-muted">&nbsp; Select all that apply</small>
                      <br>
                      <div class="btn-group d-flex flex-wrap w-100" role="group"
                          aria-label="Segmented checkbox-style selector">
                          <input type="checkbox" class="btn-check" id="monday" name="days[]" value="Mon"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="monday">Mon</label>

                          <input type="checkbox" class="btn-check" id="tuesday" name="days[]" value="Tue"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="tuesday">Tue</label>

                          <input type="checkbox" class="btn-check" id="wednesday" name="days[]" value="Wed"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="wednesday">Wed</label>

                          <input type="checkbox" class="btn-check" id="thursday" name="days[]" value="Thu"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="thursday">Thu</label>

                          <input type="checkbox" class="btn-check" id="friday" name="days[]" value="Fri"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="friday">Fri</label>

                          <input type="checkbox" class="btn-check" id="saturday" name="days[]" value="Sat"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="saturday">Sat</label>

                          <input type="checkbox" class="btn-check" id="sunday" name="days[]" value="Sun"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="sunday">Sun</label>
                      </div>
                      @if ($errors->has('days.*') or $errors->has('days'))
                          <div class="text-danger small mt-2">Please select at least one valid day.</div>
                      @endif
                  </div>

                  <!-- Row 3: Times -->
                  <div class="my-5" data-aos="fade-up">
                      <label for="times" class="form-label">Times</label>
                      <small class="text-muted">&nbsp; Select all that apply</small>
                      <br>
                      <div class="btn-group d-flex flex-wrap w-100" role="group"
                          aria-label="Segmented checkbox-style selector">
                          <input type="checkbox" class="btn-check" id="morning" name="times[]" value="Morning"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="morning">Morning</label>

                          <input type="checkbox" class="btn-check" id="afternoon" name="times[]" value="Afternoon"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="afternoon">Afternoon</label>

                          <input type="checkbox" class="btn-check" id="evening" name="times[]" value="Evening"
                              autocomplete="off">
                          <label class="btn btn-outline-secondary" for="evening">Evening</label>
                      </div>
                      @if ($errors->has('times.*') or $errors->has('times'))
                          <div class="text-danger small mt-2">Please select at least one valid time.</div>
                      @endif
                  </div>

                  <!-- Row 4: Notes -->
                  <div class="my-5" data-aos="fade-up">
                      <label for="notes" class="form-label">Notes for your sitter</label>
                      <textarea class="form-control" id="notes" rows="4" name="notes"
                          placeholder="Route preference, leash location, treats given, etc."></textarea>
                  </div>

                  <button type="submit" class="btn btn-secondary rounded-pill mx-auto d-block px-5">Schedule
                      Service</button>
              </form>
          </div>

      </div>
  </div>
</section>
@endsection