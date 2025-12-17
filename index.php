<?php 
// Current page variable for active menu
$currentPage = 'index.php';
include 'templates/include/header.php'; 
?>

<!-- HERO SECTION -->
<!-- Main banner section used for company introduction -->
<section class="hero bg-light py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left content -->
      <div class="col-md-6">
        <h1 class="fw-bold">Welcome to Aurika</h1>
        <p class="lead mt-3">
          We are a professional organization committed to delivering quality solutions and meaningful impact.
        </p>

        <!-- Call to action buttons -->
        <a href="about.php" class="btn btn-primary me-2">Learn More</a>
        <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
      </div>

      <!-- Right image -->
      <div class="col-md-6 text-center">
        <!-- Placeholder image (replace later with real image) -->
        <img src="https://via.placeholder.com/500x350" class="img-fluid" alt="Company Image">
      </div>

    </div>
  </div>
</section>

<!-- ================= ABOUT PREVIEW SECTION ================= -->
<!-- Short introduction about company -->
<section class="about-preview py-5">
  <div class="container text-center">

    <h2 class="fw-bold mb-3">About Aurika</h2>
    <p class="text-muted mb-4">
      Aurika is built on strong values, professionalism, and a vision to grow with integrity.
    </p>

    <!-- Redirect to full about page -->
    <a href="about.php" class="btn btn-secondary">Read More</a>

  </div>
</section>

<!-- ================= SERVICES / FEATURES SECTION ================= -->
<!-- Generic services/features section (can be changed later) -->
<section class="services bg-light py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold">What We Do</h2>
      <p class="text-muted">Our core focus areas</p>
    </div>

    <div class="row">

      <!-- Feature 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm p-4">
          <i class="bi bi-briefcase fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Professional Services</h5>
          <p class="text-muted">
            Delivering reliable and structured solutions tailored to organizational needs.
          </p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm p-4">
          <i class="bi bi-people fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Expert Team</h5>
          <p class="text-muted">
            A dedicated team focused on quality, growth, and continuous improvement.
          </p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 text-center shadow-sm p-4">
          <i class="bi bi-graph-up fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Sustainable Growth</h5>
          <p class="text-muted">
            Building long-term value through innovation and responsible practices.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= CONTACT CTA SECTION ================= -->
<!-- Call to action for contacting company -->
<section class="contact-cta py-5">
  <div class="container text-center">

    <h2 class="fw-bold mb-3">Get in Touch</h2>
    <p class="text-muted mb-4">
      Have questions or want to work with us? Reach out today.
    </p>

    <a href="contact.php" class="btn btn-primary">Contact Us</a>

  </div>
</section>

<?php include 'templates/include/footer.php'; ?>
