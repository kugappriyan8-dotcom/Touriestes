<?php
include __DIR__ . '/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $conn->real_escape_string($_POST['username']); 
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    
    if ($_POST['password'] !== $_POST['confirmPassword']) {
        echo "Passwords do not match ❌";
        exit();
    }

    $sql = "INSERT INTO signin (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {

        header("Location: priyan_travel.html#home");
        exit();

    } else {
        echo "Error: " . $conn->error;
    }
}
?>