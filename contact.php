<?php
require_once __DIR__ . '/config/config.php';

// Set current page for active nav
$currentPage = 'contact.php';

include __DIR__ . '/templates/include/header.php';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Server-side validation
    if (!$name || !$email || !$subject || !$message) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } else {
        // Save to database
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$name, $email, $subject, $message])) {
            $success = "Your message has been sent successfully!";
            // Clear form values
            $name = $email = $subject = $message = '';
        } else {
            $error = "Unable to send your message. Please try again later.";
        }
    }
}
?>

<!-- =========================
     CONTACT US : AURIKA KNOWLEDGE FOUNDATION
========================= -->

<section class="py-5 bg-light">
  <div class="container text-center">
    <h1 class="fw-bold">Contact Us</h1>
    <p class="lead mt-2">
      Get in touch with Aurika Knowledge Foundation
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container">

    <div class="row">

      <!-- CONTACT INFO -->
      <div class="col-md-5 mb-4">
        <h3 class="fw-bold mb-4">Reach Us</h3>
        <p><i class="bi bi-geo-alt-fill text-primary me-2"></i>Registered Office: B-502, Nirav, Asha Nagar, Opp. Shradha Complex, Kandivali (E), Mumbai – 400101</p>
        <p><i class="bi bi-building text-primary me-2"></i>Campus: Plot No. IP-3, RIICO Industrial Growth Centre, Phase II, Abu Road, District Sirohi, Rajasthan – 307026</p>
        <p><i class="bi bi-envelope-fill text-primary me-2"></i>Email: <a href="mailto:upaknowledgeacademy123@gmail.com">upaknowledgeacademy123@gmail.com</a></p>
        <p><i class="bi bi-telephone-fill text-primary me-2"></i>Contact No.: +91 93219 85139</p>
      </div>

      <!-- CONTACT FORM -->
      <div class="col-md-7">
        <h3 class="fw-bold mb-4">Send Us a Message</h3>

        <!-- SUCCESS / ERROR MESSAGES -->
        <?php if($success): ?>
            <div class="alert alert-success"><?= $success ?></div>
        <?php endif; ?>
        <?php if($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="post" novalidate>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($name ?? '') ?>" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email ?? '') ?>" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" value="<?= htmlspecialchars($subject ?? '') ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="5" required><?= htmlspecialchars($message ?? '') ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary px-4">Submit Enquiry</button>

        </form>

      </div>

    </div>

  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h3 class="fw-bold text-center mb-4">Find Us on Map</h3>
    <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden">
      <iframe src="https://www.google.com/maps?q=Abu+Road+Rajasthan&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>



<?php include __DIR__ . '/templates/include/footer.php'; ?>

