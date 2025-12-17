<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurika</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/aurika-web/assets/css/style.css">
</head>
<body>

<!--  NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="index.php">Aurika</a>

    <!-- Mobile Toggle Button -->
    <!-- CHANGED: collapse -> offcanvas -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Menu (Hidden on Mobile) -->
    <!-- ADDED: d-none d-lg-flex -->
    <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex" id="navbarNav">
      <ul class="navbar-nav align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage=='index.php')?'active':'' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage=='about.php')?'active':'' ?>" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage=='services.php')?'active':'' ?>" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage=='contact.php')?'active':'' ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<!-- MOBILE OFFCANVAS MENU  -->
<!-- NEW: Slides from LEFT and shows X (close) button -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">

  <!-- Offcanvas Header -->
  <div class="offcanvas-header">
    <h5 class="offcanvas-title fw-bold">Aurika</h5>

    <!-- X (Close) Button -->
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>

  <!-- Offcanvas Body -->
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= ($currentPage=='index.php')?'active':'' ?>" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($currentPage=='about.php')?'active':'' ?>" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($currentPage=='services.php')?'active':'' ?>" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($currentPage=='contact.php')?'active':'' ?>" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</div>
