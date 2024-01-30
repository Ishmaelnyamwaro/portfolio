<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform additional validation and processing here

    // Example: Save data to a file (you might want to use a database in a real application)
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents('form_data.txt', $data, FILE_APPEND);

    // Redirect back to the form with a success message
    header('Location: index.html?status=success');
} else {
    // If someone tries to access the script directly
    header('Location: index.html?status=error');
}
?>
