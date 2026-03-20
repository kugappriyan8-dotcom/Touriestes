<?php
include __DIR__ . '/db.php'; 

$message_sent = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['message']);

    
    $sql = "INSERT INTO contact_messages (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if ($result->num_rows > 0) {

        header("Location: index.html#features");
        exit();

    } else {
        header("Location: priyan_travel.html#home");
    }
}
?>

