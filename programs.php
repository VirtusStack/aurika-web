<?php
require_once __DIR__ . '/config/config.php';
$currentPage = 'programs.php';
include __DIR__ . '/templates/include/header.php';
?>

<!-- PROGRAMS -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h1 class="fw-bold">Academic Programs</h1>
    <p class="lead mt-2">
      Structured education aligned with ICAI and industry requirements
    </p>
  </div>
</section>

<!-- CA PROGRAMS -->
<section class="py-5">
  <div class="container">

    <h2 class="fw-bold mb-4 text-center">
      Chartered Accountancy Programs
    </h2>

    <div class="row">

      <!-- CA Foundation -->
      <div class="col-md-4 mb-4">
        <div class="program-box">
          <h5 class="fw-bold">CA Foundation</h5>
          <p class="mt-2 small">
            Entry-level program designed to build strong fundamentals in
            accounting, business law, mathematics and economics, preparing
            students for higher levels of professional education.
          </p>
        </div>
      </div>

      <!-- CA Intermediate -->
      <div class="col-md-4 mb-4">
        <div class="program-box">
          <h5 class="fw-bold">CA Intermediate</h5>
          <p class="mt-2 small">
            Advanced curriculum focusing on accounting, taxation, auditing
            and financial management with emphasis on conceptual clarity
            and practical application.
          </p>
        </div>
      </div>

      <!-- CA Final -->
      <div class="col-md-4 mb-4">
        <div class="program-box">
          <h5 class="fw-bold">CA Final</h5>
          <p class="mt-2 small">
            The final stage of the CA journey emphasizing professional
            competence, strategic thinking, case studies and real-world
            problem-solving skills.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include __DIR__ . '/templates/include/footer.php'; ?>
