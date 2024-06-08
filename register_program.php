<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program_id = $_POST['program_id'];

    $sql = "INSERT INTO registrations (name, email, program_id) VALUES ('$name', '$email', '$program_id')";

    if ($conn->query($sql) === TRUE) {
        echo "You have successfully registered for the program!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header('Location: programs.php');
    exit();
}
?>
