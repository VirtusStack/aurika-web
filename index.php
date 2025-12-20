<?php
require_once __DIR__ . '/config/config.php';
$currentPage = 'index.php';
include __DIR__ . '/templates/include/header.php';
?>

<!-- HOME : AURIKA KNOWLEDGE FOUNDATION -->

<!-- HERO SECTION -->
<section class="py-5 bg-light">
  <div class="container text-center">

    <h1 class="fw-bold ">
      Aurika Knowledge Foundation
    </h1>

    <p class="lead mt-3">
      A Section 8 Company registered under the Companies Act, 2013
      <br>
      Committed to Education, Learning and Socio-Economic Development
    </p>

    <div class="mt-4">
      <a href="about.php" class="btn btn-primary me-2">About the Foundation</a>
      <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
    </div>

  </div>
</section>

<!-- FOUNDATION OVERVIEW -->
<section class="py-5">
  <div class="container">

    <div class="row align-items-center">

      <!-- Text -->
      <div class="col-md-6">
        <h2 class="fw-bold">About Aurika Knowledge Foundation</h2>

        <p class="mt-3">
          Aurika Knowledge Foundation is a not-for-profit organization
          incorporated as a Section 8 Company under the Companies Act, 2013.
          The Foundation is dedicated to promoting education, learning and
          professional excellence across diverse academic and vocational
          disciplines.
        </p>

        <p>
          With a strong emphasis on quality education, ethical values and
          practical exposure, the Foundation aims to empower students from
          diverse backgrounds and contribute meaningfully to national
          development.
        </p>

        <a href="about.php" class="fw-semibold text-decoration-none">
          Read More →
        </a>
      </div>

      <!-- Image Placeholder -->
      <div class="col-md-6 text-center">
      <div class="text-center">
      <img 
       src="assets/images/campus/campus-progress.jpg" 
       class="img-fluid rounded shadow-sm home-campus-img" 
       alt="Aurika Knowledge Foundation Campus Development">
      </div>

      </div>

    </div>

  </div>
</section>

<!-- KEY FOCUS AREAS -->
<section class="py-5 bg-light">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold">Key Focus Areas</h2>
      <p class="text-muted">
        Academic excellence supported by professional and skill-based learning
      </p>
    </div>

    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="focus-box">
          <h5 class="fw-bold">Chartered Accountancy Programs</h5>
          <p class="mt-2 small">
            Comprehensive CA Foundation, Intermediate and Final level programs
            with integrated academic rigor and professional exposure.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="focus-box">
          <h5 class="fw-bold">Articleship & Gurukul Training</h5>
          <p class="mt-2 small">
            Structured articleship and industry-oriented training in taxation,
            finance, banking, GST and international taxation.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="focus-box">
          <h5 class="fw-bold">Vocational & Skill Development</h5>
          <p class="mt-2 small">
            Skill-based certificate, diploma and degree programs designed to
            enhance employability and holistic student development.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- WHY AURIKA -->
<section class="py-5">
  <div class="container">

    <h2 class="fw-bold mb-4 text-center">Why Aurika Knowledge Foundation</h2>

    <div class="row">

      <div class="col-md-6 mb-3">
        <div class="why-point">
          Strong academic foundation combined with professional exposure
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="why-point">
          Governance by experienced professionals and advisors
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="why-point">
          Focus on ethical values, discipline and holistic development
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="why-point">
          Purpose-built campus in a serene learning environment
        </div>
      </div>

    </div>

  </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="fw-bold">Building the Future of Education</h2>
    <p class="mt-3">
      Learn more about our programs, campus and initiatives.
    </p>
    <a href="contact.php" class="btn btn-primary mt-2">Get in Touch</a>
  </div>
</section>

<?php include __DIR__ . '/templates/include/footer.php'; ?>
