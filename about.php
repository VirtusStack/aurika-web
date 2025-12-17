<?php
// Current page variable for active menu
$currentPage = 'about.php';
include 'templates/include/header.php';
?>

<!-- Top heading section for About page -->
<section class="page-header bg-light py-5">
  <div class="container text-center">
    <h1 class="fw-bold">About Us</h1>
    <p class="text-muted mt-2">
      Learn more about who we are, what we stand for, and how we work.
    </p>
  </div>
</section>


<!-- General introduction about the organization -->
<section class="about-intro py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Who We Are</h2>
        <p class="text-muted">
          Aurika is a professionally managed organization focused on creating long-term value
          through structured processes, ethical practices, and continuous improvement.
        </p>
        <p class="text-muted">
          Our approach is centered on quality, transparency, and building meaningful relationships
          with stakeholders.
        </p>
      </div>

      <!-- Image -->
      <div class="col-md-6 text-center">
        <!-- Replace image later with real organization image -->
        <img src="https://via.placeholder.com/500x350"  class="img-fluid rounded" alt="About Aurika">
      </div>

    </div>
  </div>
</section>


<!-- Organization vision and mission -->
<section class="vision-mission bg-light py-5">
  <div class="container">
    <div class="row text-center">

      <!-- Vision -->
      <div class="col-md-6 mb-4">
        <div class="p-4 h-100 shadow-sm bg-white rounded">
          <i class="bi bi-eye fs-1 text-primary mb-3"></i>
          <h4 class="fw-bold">Our Vision</h4>
          <p class="text-muted">
            To be a trusted organization recognized for integrity, excellence, and positive impact.
          </p>
        </div>
      </div>

      <!-- Mission -->
      <div class="col-md-6 mb-4">
        <div class="p-4 h-100 shadow-sm bg-white rounded">
          <i class="bi bi-bullseye fs-1 text-primary mb-3"></i>
          <h4 class="fw-bold">Our Mission</h4>
          <p class="text-muted">
            To deliver value-driven solutions through professionalism, innovation, and responsibility.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Key values of the organization -->
<section class="core-values py-5">
  <div class="container text-center">

    <h2 class="fw-bold mb-4">Our Core Values</h2>

    <div class="row">

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Integrity</h5>
        <p class="text-muted">We operate with honesty and transparency in everything we do.</p>
      </div>

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Excellence</h5>
        <p class="text-muted">We strive for the highest standards in quality and performance.</p>
      </div>

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Commitment</h5>
        <p class="text-muted">We are dedicated to continuous growth and meaningful outcomes.</p>
      </div>

    </div>
  </div>
</section>


<?php include 'templates/include/footer.php'; ?>
