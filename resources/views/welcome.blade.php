<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pawtastic</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    .navbar {
      position: absolute;
      width: 100%;
      z-index: 10;
    }

    .hero {
      background-color: #f5c6a5; /* placeholder for animal background */
      height: 100vh;
      position: relative;
    }

    .hero h1 {
      font-weight: 700; /* This makes the font very bold */
    }

    .hero-text {
      color: white;
      /*background: rgba(0, 0, 0, 0.4);*/
      padding: 2rem;
      max-width: 500px;
    }

    .btn-pill {
      border-radius: 50px;
    }

    .about-us-img {
      width: 100%;
      aspect-ratio: 1 / 1;
      background-color: #ccc; /* Placeholder color for animal image */
      border-radius: 10px;
    }

    .schedule-left {
      background-color: #8dcfb7; /* Placeholder for image background */
      color: white;
      padding: 2rem;
      position: relative;
      height: 100%;
    }

    .form-section label {
      font-weight: 600;
    }

    .segmented-btns .btn {
      margin-right: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .form-notes {
      min-height: 100px;
    }

    .square-box {
      width: 100%;
      padding-top: 100%; /* Makes it square */
      background-color: #ccc; /* Placeholder color */
    }

    .container {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  textarea {
  resize: none;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <div class="bg-primary rounded-circle me-2" style="width: 40px; height: 40px;"></div>
      <span class="text-white">Pawtastic</span>
    </a>
    <div class="ms-auto">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white" href="#about">About Us</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#schedule">Schedule a Visit</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="container d-flex justify-content-end align-items-center h-100">
    <div class="hero-text text-start">
      <h1 class="display-5 mb-3">We care for your furry little loved ones while you're away</h1>
      <a href="#schedule" class="btn btn-light btn-pill mt-5 px-5 py-2">Schedule a Visit</a>
    </div>
  </div>
</section>

<!-- About Us -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row g-5"> <!-- g-5 adds gutter space between columns -->
      <!-- Left Side -->
      <div class="col-md-6 pe-md-5">
        <h2 class="fw-bold mb-3">Expert care for your furry, feathery, or scaley friend</h2>
        <p>We know how stressful it is to leave your pets at home alone. We're a team of experienced animal caregivers, well connected to local veterinarians. Trust us to love them like our own, and to keep them safe and happy till you're home.</p>
        <a href="#schedule" class="btn btn-primary btn-pill mt-3">Schedule a Visit</a>
      </div>

      <!-- Right Side -->
      <div class="col-md-6 ps-md-5">
        <div class="row g-4"> <!-- g-4 adds spacing between images -->
          <div class="col-6"><div class="square-box bg-secondary"></div></div>
          <div class="col-6"><div class="square-box bg-secondary"></div></div>
          <div class="col-6"><div class="square-box bg-secondary"></div></div>
          <div class="col-6"><div class="square-box bg-secondary"></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Schedule a Visit -->
<section id="schedule" class="py-5">
  <div class="container-fluid">
    <div class="d-flex flex-wrap">
      <!-- Left Section (45%) -->
      <div class="flex-grow-1" style="flex: 0 0 45%; background-color: #535973; color: white; padding: 2rem;">
        <div class="mb-4">
          <div class="d-flex align-items-center">
            <div class="bg-white rounded-circle me-2" style="width: 40px; height: 40px;"></div>
            <h3 class="fw-bold mb-0">Pawtastic</h3>
          </div>
          <h4 class="mt-4 fw-bold">All services included:</h4>
          <ul class="mt-2">
            <li>A photo update for you</li>
            <li>Notification of sitter arrival</li>
            <li>Treats for your pet</li>
          </ul>
        </div>
      </div>

      <!-- Right Section (55%) -->
      <div class="flex-grow-1 d-flex justify-content-center align-items-start" style="flex: 0 0 50%; padding: 2rem; background-color: #F7ECEB;">
        <div style="max-width: 500px; width: 100%;">
          <h3 class="fw-bold mb-4 text-center">We'll take your dog for a walk. Just tell us when!</h3>
          <form>
            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Frequency</label>
                <div class="segmented-btns d-flex justify-content-center flex-wrap">
                  <button type="button" class="btn btn-outline-primary me-2 mb-2">Recurring</button>
                  <button type="button" class="btn btn-outline-primary mb-2">One Time</button>
                </div>
              </div>
              <div class="col-12">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="startDate">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Days</label>
              <div class="segmented-btns d-flex justify-content-center flex-wrap">
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Mon</button>
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Tue</button>
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Wed</button>
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Thu</button>
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Fri</button>
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Sat</button>
                <button type="button" class="btn btn-outline-secondary mb-2">Sun</button>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Times</label>
              <div class="segmented-btns d-flex justify-content-center flex-wrap">
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Morning</button>
                <button type="button" class="btn btn-outline-secondary me-2 mb-2">Afternoon</button>
                <button type="button" class="btn btn-outline-secondary mb-2">Evening</button>
              </div>
            </div>

            <div class="mb-4">
              <label for="notes" class="form-label">Notes for your sitter</label>
              <textarea class="form-control form-notes" id="notes" rows="3" placeholder="Route preferences, leash location, treats given, etc."></textarea>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-pill">Schedule Service</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
