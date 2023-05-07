<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user's data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Do some processing with the user's data

    // Redirect the user to the next page
    header('Location: next-page.php');
    exit;
}
?>
