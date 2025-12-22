<?php 
// $currentPage should be defined before including this file
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aurika Knowledge Foundation</title>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand d-flex align-items-center gap-3" href="index.php">
    <img src="<?= BASE_URL ?>/assets/images/logo/aurika-logo.png" 
       alt="Aurika Knowledge Foundation Logo"
       class="brand-logo">

    <div class="brand-text">
    <span class="brand-title">Aurika Knowledge Foundation</span>
    </div>
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Menu -->
    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-end">
      <ul class="navbar-nav align-items-center gap-2">

            <ul class="navbar-nav align-items-center gap-2">
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage === 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage === 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
                </li>
                <!-- Desktop Programs Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array($currentPage, ['programs.php','articleship.php']) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Programs
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?= ($currentPage === 'programs.php') ? 'active' : '' ?>" href="programs.php">CA Programs</a></li>
                        <li><a class="dropdown-item <?= ($currentPage === 'articleship.php') ? 'active' : '' ?>" href="articleship.php">Articleship (UPACA Gurukul)</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage === 'team.php') ? 'active' : '' ?>" href="team.php">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage === 'campus.php') ? 'active' : '' ?>" href="campus.php">Campus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage === 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Offcanvas Mobile Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav flex-column gap-1">

            <li class="nav-item">
                <a class="nav-link <?= ($currentPage === 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($currentPage === 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
            </li>

            <!-- Mobile Programs Collapse -->
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center <?= in_array($currentPage, ['programs.php','articleship.php']) ? 'active' : '' ?>" 
                   data-bs-toggle="collapse" href="#mobilePrograms" role="button" aria-expanded="<?= in_array($currentPage, ['programs.php','articleship.php']) ? 'true' : 'false' ?>" aria-controls="mobilePrograms">
                   Programs
                   <i class="bi bi-chevron-down small"></i>
                </a>
                <div class="collapse <?= in_array($currentPage, ['programs.php','articleship.php']) ? 'show' : '' ?>" id="mobilePrograms">
                    <ul class="navbar-nav flex-column ps-3">
                        <li class="nav-item"><a class="nav-link <?= ($currentPage === 'programs.php') ? 'active' : '' ?>" href="programs.php">CA Programs</a></li>
                        <li class="nav-item"><a class="nav-link <?= ($currentPage === 'articleship.php') ? 'active' : '' ?>" href="articleship.php">Articleship (UPACA Gurukul)</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= ($currentPage === 'team.php') ? 'active' : '' ?>" href="team.php">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($currentPage === 'campus.php') ? 'active' : '' ?>" href="campus.php">Campus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($currentPage === 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
</div>

