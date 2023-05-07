<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if a resume file was uploaded
  if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    // Get the file name and extension
    $file_name = basename($_FILES['resume']['name']);
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    // Check if the file extension is valid
    $allowed_exts = array('pdf', 'doc', 'docx', 'txt');
    if (in_array($file_ext, $allowed_exts)) {
      // Get the form data
      $name = $_POST['name'];
      $email = $_POST['email'];
      
      // TODO: Save the resume file and form data to your database or send an email
      
      // Redirect the user to a success page
      header('Location: resume-upload-success.php');
      exit();
    } else {
      // Invalid file extension
      $error = 'Invalid file format. Please upload a PDF, Word, or plain text file.';
    }
  } else {
    // No resume file was uploaded
    $error = 'Please upload a resume file.';
  }
}

// If there was an error, display it to the user
if (isset($error)) {
  echo '<p>' . $error . '</p>';
}
?>
