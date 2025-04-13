<h2>Request a Document</h2>
<p class="lead">Fill out the form below to request a document from our barangay office.</p>

<?php
$formSubmitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['document_request'])) {
  $formSubmitted = true;
  $requestNumber = '';
  for ($i = 0; $i < 6; $i++) {
      if (rand(0, 1)) {
          $requestNumber .= chr(rand(65, 90));
      } else {
          $requestNumber .= rand(0, 9);
      }
  }
  }
?>

<?php if ($formSubmitted): ?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Request Submitted Successfully!</h4>
  <p>Your document request has been received. Please take note of your request number:</p>
  <h3 class="text-center"><?php echo $requestNumber; ?></h3>
  <hr>
  <p class="mb-0">You may pick up your document at the barangay office once it's ready. You will be notified via text message.</p>
</div>

<div class="text-center mt-4">
  <a href="?page=requests" class="btn btn-primary">Submit Another Request</a>
</div>

<?php else: ?>

<div class="card mt-4">
  <div class="card-body">
    <form method="post" action="">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-6">
          <label for="contact" class="form-label">Contact Number <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="contact" name="contact" required>
        </div>
      </div>
      
      <div class="mb-3">
        <label for="address" class="form-label">Complete Address <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="document_type" class="form-label">Document Type <span class="text-danger">*</span></label>
          <select class="form-select" id="document_type" name="document_type" required>
            <option value="" selected disabled>Select document type</option>
            <option value="Barangay Clearance">Barangay Clearance</option>
            <option value="Certificate of Residency">Certificate of Residency</option>
            <option value="Certificate of Indigency">Certificate of Indigency</option>
            <option value="Business Permit">Business Permit</option>
            <option value="Barangay ID">Barangay ID</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="pickup_date" class="form-label">Date Request <span class="text-danger">*</span></label>
          <input type="date" class="form-control" id="pickup_date" name="pickup_date" required>
        </div>
      </div>
      
      <div class="mb-3">
        <label for="purpose" class="form-label">Purpose <span class="text-danger">*</span></label>
        <textarea class="form-control" id="purpose" name="purpose" rows="3" required></textarea>
      </div>
      
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms" required>
        <label class="form-check-label" for="terms">I certify that all information provided is true and correct</label>
      </div>
      
      <div class="d-grid">
        <button type="submit" name="document_request" class="btn btn-primary">Submit Request</button>
      </div>
    </form>
  </div>
</div>

<div class="card mt-4">
  <div class="card-header">
    <h5 class="mb-0">Reminders</h5>
  </div>
  <div class="card-body">
    <ul>
      <li>Bring your primary ID or valid ID when claiming your requested document</li>
      <li>Donation Fee can be made upon pickup at the barangay office</li>
      <li>Processing times vary depending on the type of document</li>
      <li>For urgent requests, please visit the barangay office directly</li>
    </ul>
  </div>
</div>
<?php endif; ?>