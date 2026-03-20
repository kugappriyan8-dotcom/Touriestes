<?php
include __DIR__ . '/db.php'; // db.php path சரி இருக்கணும்

$message_sent = ""; // Success/fail message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data collect & sanitize
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert into database
    $sql = "INSERT INTO contact_messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if ($result->num_rows > 0) {

        header("Location: index.html#features");
        exit();

    } else {
        header("Location: priyan_travel.html#home");
    }
}
?>

