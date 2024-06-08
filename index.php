<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Program - Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Gaya untuk pop-up */
        .popup {
            display: none; /* Mulai tersembunyi */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        /* Gaya untuk overlay */
        .overlay {
            display: none; /* Mulai tersembunyi */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan kecerahan 50% */
            z-index: 999; /* Menempatkan overlay di atas pop-up */
        }
    </style>
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

    <section id="home" class="hero">
        <div class="hero-content">
            <h2>Get Fit with Us</h2>
            <p>Join our fitness programs and achieve your health goals.</p>
            <button onclick="openPopup()" class="btn">Explore Programs</button>
        </div>
    </section>

    <!-- Pop-up -->
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <h3>Subscribe to our Newsletter</h3>
        <p>Get the latest updates and offers straight to your inbox!</p>
        <form>
            <input type="email" placeholder="Your Email">
            <button type="submit" class="btn">Subscribe</button>
        </form>
        <button onclick="closePopup()" class="btn">Close</button>
    </div>

    <footer>
        <p>&copy; 2024 Fitness Program. All rights reserved.</p>
    </footer>

    <script>
        // Fungsi untuk membuka pop-up
        function openPopup() {
            document.getElementById("popup").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        // Fungsi untuk menutup pop-up
        function closePopup() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }
    </script>
</body>
</html>
