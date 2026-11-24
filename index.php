
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nailé Beauty Studio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css?v=11">
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
    <a href="#home" class="logo">
        Nailé<span>.</span>
        <small>BEAUTY STUDIO</small>
    </a>

    <nav>
        <a href="#home" class="active">Home</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="#booking">Booking</a>
        <a href="#about">About</a>
    </nav>

    <div class="nav-buttons">
        <a href="customer/login.php">Login</a>
        <a href="customer/register.php">Register</a>
    </div>
</header>

<main>

<!-- HOME -->
<section class="naile-hero" id="home">
    <div class="naile-hero-content">
        <span class="naile-welcome">✦ WELCOME TO</span>

        <h1>Nailé Beauty Studio<span class="hero-heart">♡</span></h1>

        <p>
            Nail Art, Manicure, Pedicure, dan Eyelash
            dalam satu studio kecantikan.
        </p>

        <div class="naile-hero-buttons">
            <a href="#booking" class="naile-button-primary">
                ▦ Booking Sekarang
            </a>
            <a href="#services" class="naile-button-outline">
                ▦ Lihat Layanan
            </a>
        </div>
    </div>

    <div class="naile-hero-photo" role="img"
         aria-label="Nail art pink dengan hiasan bunga">
    </div>
</section>

<!-- SERVICES -->
<section class="naile-services" id="services">
    <div class="naile-section-heading">
        <h2>Our Beauty Services</h2>
        <p>Pilih perawatan kecantikan sesuai kebutuhanmu ♡</p>
    </div>

    <div class="naile-service-grid">

        <article class="naile-service-card">
            <img src="assets/images/02-nail-art.jpg" alt="Nail Art">
            <div class="naile-service-info">
                <div>
                    <h3>Nail Art</h3>
                    <p>Hiasan kuku dengan berbagai desain menarik.</p>
                </div>
                <a href="#booking" class="naile-service-arrow">→</a>
            </div>
        </article>

        <article class="naile-service-card">
            <img src="assets/images/03-manicure.jpg" alt="Manicure">
            <div class="naile-service-info">
                <div>
                    <h3>Manicure</h3>
                    <p>Perawatan kuku tangan agar sehat dan rapi.</p>
                </div>
                <a href="#booking" class="naile-service-arrow">→</a>
            </div>
        </article>

        <article class="naile-service-card">
            <img src="assets/images/04-pedicure.jpg" alt="Pedicure">
            <div class="naile-service-info">
                <div>
                    <h3>Pedicure</h3>
                    <p>Perawatan kuku kaki untuk kebersihan dan kenyamanan.</p>
                </div>
                <a href="#booking" class="naile-service-arrow">→</a>
            </div>
        </article>

        <article class="naile-service-card">
            <img src="assets/images/05-eyelash.jpg" alt="Eyelash">
            <div class="naile-service-info">
                <div>
                    <h3>Eyelash</h3>
                    <p>Perawatan dan pemasangan extension bulu mata.</p>
                </div>
                <a href="#booking" class="naile-service-arrow">→</a>
            </div>
        </article>

    </div>
</section>

<!-- GALLERY -->
<section class="naile-services" id="gallery">
    <div class="naile-section-heading">
        <h2>Our Gallery</h2>
        <p>Inspirasi kecantikan dari Nailé Beauty Studio ♡</p>
    </div>

    <div class="naile-service-grid">
        <article class="naile-service-card">
            <img src="assets/images/02-nail-art.jpg" alt="Nail Art Gallery">
        </article>
        <article class="naile-service-card">
            <img src="assets/images/03-manicure.jpg" alt="Manicure Gallery">
        </article>
        <article class="naile-service-card">
            <img src="assets/images/04-pedicure.jpg" alt="Pedicure Gallery">
        </article>
        <article class="naile-service-card">
            <img src="assets/images/05-eyelash.jpg" alt="Eyelash Gallery">
        </article>
    </div>
</section>

<!-- BOOKING -->
<section class="naile-services" id="booking">
    <div class="naile-section-heading">
        <h2>Book Your Appointment</h2>
        <p>Jadwalkan perawatan kecantikan favoritmu bersama kami ♡</p>
        <a href="customer/booking.php" class="naile-button-primary">
            Booking Sekarang →
        </a>
    </div>
</section>

<!-- ABOUT -->
<section class="naile-services" id="about">
    <div class="naile-section-heading">
        <h2>About Nailé</h2>
        <p>
            Nailé Beauty Studio hadir sebagai tempat perawatan
            kecantikan yang menyediakan Nail Art, Manicure,
            Pedicure, dan Eyelash dengan suasana nyaman.
        </p>
    </div>
</section>

</main>

<footer class="footer">
    <p>© 2026 Nailé Beauty Studio. All Rights Reserved.</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
