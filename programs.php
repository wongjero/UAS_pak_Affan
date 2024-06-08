<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Program - Programs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Fitness Program</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="programs.php">Programs</a>
            <a href="schedule.php">Schedule</a>
            <a href="trainers.php">Trainers</a>
            <a href="testimonials.php">Testimonials</a>
        </nav>
    </header>

    <section id="programs">
        <h2>Our Programs</h2>
        <p>Join our fitness programs designed to help you achieve your goals.</p>
        <table>
            <thead>
                <tr>
                    <th>Program Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT name, description, duration, price FROM programs";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["duration"]. "</td><td>" . $row["price"]. "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No programs available.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <h3>Register for a Program</h3>
        <form action="register_program.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <select name="program_id" required>
    <option value="">Pilih Program</option>
    <?php
    $sql = "SELECT id, name FROM programs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
        }
    } else {
        echo "<option value=''>No programs available</option>";
    }
    ?>
</select>

            <button type="submit">Register</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Fitness Program. All rights reserved.</p>
    </footer>
</body>
</html>

<?php $conn->close(); ?>
