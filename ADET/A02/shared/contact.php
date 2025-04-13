<h2>Contact Us</h2>
<p class="lead">Have questions or concerns? Reach out to us using the information below.</p>

<?php
// Simple form handling - without database this just demonstrates functionality
$contactSubmitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_submit'])) {
  $contactSubmitted = true;
}
?>

<?php if ($contactSubmitted): ?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Message Sent!</h4>
  <p>Thank you for contacting us. We will respond to your inquiry as soon as possible.</p>
</div>

<div class="text-center mt-4">
  <a href="?page=contact" class="btn btn-primary">Send Another Message</a>
</div>

<?php else: ?>

<div class="row mt-4">
  <div class="col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h4 class="mb-0">Contact Information</h4>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="d-flex">
              <div class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill text-primary" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
              </div>
              <div>
                <h5>Address</h5>
                <p class="mb-0">123 Barangay Street, Manila City, 1000 Philippines</p>
              </div>
            </div>
          </li>
          
          <li class="list-group-item">
            <div class="d-flex">
              <div class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill text-primary" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
              </div>
              <div>
                <h5>Phone</h5>
                <p class="mb-0">(+63) 2-1234-5678</p>
              </div>
            </div>
          </li>
          
          <li class="list-group-item">
            <div class="d-flex">
              <div class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill text-primary" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <div>
                <h5>Email</h5>
                <p class="mb-0">info@barangayconnect.ph</p>
              </div>
            </div>
          </li>
          
          <li class="list-group-item">
            <div class="d-flex">
              <div class="me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clock-fill text-primary" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                </svg>
              </div>
              <div>
                <h5>Office Hours</h5>
                <p class="mb-0">Monday - Friday: 8:00 AM - 5:00 PM</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h4 class="mb-0">Send us a Message</h4>
      </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" name="contact_submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="mb-0">Our Location</h4>
      </div>
      <div class="card-body">
        <div class="ratio ratio-16x9">
          <img src="assets/img/mapsm.png" alt="Map of our location" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>