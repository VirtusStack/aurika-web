<?php
// Include config first
require_once __DIR__ . '/config/config.php';

// Set current page for active nav
$currentPage = 'index.php';

// Include header after config
include __DIR__ . '/templates/include/header.php';
?>

<! HOME PAGE : AURIKA KNOWLEDGE FOUNDATION -->

<!-- HERO SECTION -->
<section class="py-5 bg-light">
  <div class="container text-center">

    <h1 class="fw-bold text-primary">
      Aurika Knowledge Foundation
    </h1>

    <p class="lead mt-3">
      A Section 8 Company registered under the Companies Act, 2013  
      <br>
      Promoting Education, Learning & Socio-Economic Development
    </p>

    <div class="mt-4">
      <a href="about.php" class="btn btn-primary me-2">About the Foundation</a>
      <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
    </div>

  </div>
</section>

<!-- ABOUT FOUNDATION -->
<section class="py-5">
  <div class="container">

    <div class="row align-items-center">

      <div class="col-md-6">
        <h2 class="fw-bold">About Aurika Knowledge Foundation</h2>

        <p class="mt-3">
          Aurika Knowledge Foundation is a not-for-profit organization established
          with the objective of promoting education and learning across diverse
          fields such as commerce, science, medical, technical and vocational
          education.
        </p>

        <p>
          The Foundation aims to enhance access to quality education for students
          from all sections of society, with special focus on underprivileged
          communities, skill development and holistic growth.
        </p>

        <a href="about.php" class="btn btn-link px-0 fw-semibold">
          Read More →
        </a>
      </div>

      <div class="col-md-6 text-center">
        <div class="bg-secondary bg-opacity-10 p-5 rounded">
          <p class="mb-0 text-muted">Campus / Infrastructure Visual</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- MISSION & VISION -->
<section class="py-5 bg-light">
  <div class="container">

    <div class="row text-center">

      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm p-4">
          <h4 class="fw-bold">Our Mission</h4>
          <p class="mt-3">
            To be a leading educational institution by providing world-class
            education in diverse emerging disciplines and to produce
            conscientious professionals who contribute meaningfully to the
            socio-economic development of the nation.
          </p>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm p-4">
          <h4 class="fw-bold">Our Vision</h4>
          <p class="mt-3">
            To achieve excellence through quality education, green environment,
            fitness and sports by providing the right academic ambience for the
            overall development of students.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ACADEMIC FOCUS -->
<section class="py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold">Our Academic Focus</h2>
      <p class="text-muted">
        Industry-aligned education with strong academic and practical foundation
      </p>
    </div>

    <div class="row text-center">

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm p-4">
          <h5 class="fw-bold">Chartered Accountancy Programs</h5>
          <p class="mt-3">
            Foundation, Intermediate and Final level CA programs with integrated
            academic excellence and professional exposure.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm p-4">
          <h5 class="fw-bold">Articleship & Gurukul Training</h5>
          <p class="mt-3">
            Industry-specific articleship training in finance, taxation, banking,
            insurance, GST and international taxation.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm p-4">
          <h5 class="fw-bold">Vocational & Skill Development</h5>
          <p class="mt-3">
            Skill-based certificate, diploma and degree programs focused on
            employability and overall personality development.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- FOUNDER MESSAGE -->
<section class="py-5 bg-light">
  <div class="container">

    <div class="row align-items-center">

      <div class="col-md-9">
        <h3 class="fw-bold">From the Founder</h3>

        <p class="mt-3">
          Aurika Knowledge Foundation was conceived to bridge the gap between
          academic learning and real-world industry requirements. The Foundation
          integrates professional education, practical exposure, research and
          extracurricular development under one roof.
        </p>

        <p>
          Our objective is to nurture future Chartered Accountants and finance
          professionals who are not merely compliance experts, but holistic
          business solution providers.
        </p>

        <p class="fw-semibold mb-0">
          — Mr. Nikhil Agarwal  
          <br>
          Director, Aurika Knowledge Foundation
        </p>
      </div>

    </div>

  </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="fw-bold">Building the Future of Education</h2>
    <p class="mt-3">
      Explore our programs, campus, and initiatives designed for holistic
      student development.
    </p>
    <a href="contact.php" class="btn btn-primary mt-2">Get in Touch</a>
  </div>
</section>

<?php include __DIR__ . '/templates/include/footer.php'; ?>

