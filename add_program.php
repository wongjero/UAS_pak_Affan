<?php
include 'db.php';

// Tangani data yang dikirimkan dari formulir
$name = $_POST['name'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$price = $_POST['price'];

// Lakukan validasi data (opsional)

// Masukkan data program baru ke database
$sql = "INSERT INTO programs (name, description, duration, price) VALUES ('$name', '$description', '$duration', '$price')";
if ($conn->query($sql) === TRUE) {
    echo "New program added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
