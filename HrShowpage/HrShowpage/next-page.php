<!DOCTYPE html>
<html>
  <head>
    <title>Next Page</title>
    <link rel="stylesheet" href="next-page.css">
  </head>
  <body>
    <div class="container">
    <h1 class="thank-you">Thank you for signing up!</h1>
    <!-- <p>We have received your information and will be in touch shortly.</p> -->
    <h2 class="Resume">Resume Submission</h2>
</div> 
    <!-- <div class="resume-form"> -->
    <form class="resume-form"action="resume-upload.php" method="post" enctype="multipart/form-data">
      <label for="resume">Choose a file:</label>
      <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx,.txt" required>
      <br>
      <label for="notes">Additional notes:</label>
      <textarea id="notes" name="notes" rows="4" cols="50"></textarea>
      <br>
      <button type="submit">Submit Resume</button>
    </form>
    <?php if(isset($_GET['success'])) { ?>
      <p>Thank you for submitting your resume!</p>
    <?php } ?>
<!-- </div> -->
  </body>
</html>
