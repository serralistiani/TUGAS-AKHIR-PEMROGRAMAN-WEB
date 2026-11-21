
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nailé Beauty Studio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="container nav-container">

            <a href="#home" class="logo">
                Nailé<span>.</span>
                <small>BEAUTY STUDIO</small>
            </a>

            <nav class="nav-menu" id="navMenu">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
            </nav>

            <a href="#contact" class="nav-button">
                Book Now
            </a>

            <button class="menu-toggle" id="menuToggle"
                    aria-label="Buka menu navigasi">
                ☰
            </button>

        </div>
    </header>


    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="container hero-container">

            <div class="hero-content">
                <span class="subtitle">
                    ✨ YOUR BEAUTY, OUR PASSION
                </span>

                <h1>
                    Beauty Begins<br>
                    at Your <span>Fingertips.</span>
                </h1>

                <p>
                    Discover your beauty with our special treatments.
                    Let us make every detail of your nails and beauty
                    more beautiful and memorable.
                </p>

                <div class="hero-buttons">
                    <a href="#services" class="primary-button">
                        Explore Services →
                    </a>

                    <a href="#about" class="secondary-button">
                        Discover More
                    </a>
                </div>

                <div class="hero-note">
                    <span>♡</span>
                    A little self-care goes a long way.
                </div>
            </div>

            <div class="hero-decoration">
                <div class="hero-image">
                    <span class="image-caption">
                        Feel Beautiful, Feel Confident
                    </span>
                </div>

                <div class="floating-card">
                    <span>♡</span>
                    <div>
                        <strong>Love Yourself</strong>
                        <small>You deserve the best.</small>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ABOUT SECTION -->
    <section class="about section-padding" id="about">
        <div class="container about-content">

            <div class="section-heading">
                <span class="subtitle">ABOUT NAILÉ</span>

                <h2>
                    A Special Place<br>
                    for Your <span>Beauty.</span>
                </h2>
            </div>

            <div class="about-description">
                <p>
                    Nailé Beauty Studio hadir sebagai tempat untuk
                    merawat dan mempercantik diri melalui berbagai
                    layanan kecantikan dengan sentuhan profesional.
                </p>

                <p>
                    Kami percaya bahwa setiap perempuan berhak
                    merasa cantik, percaya diri, dan istimewa.
                </p>
            </div>

        </div>
    </section>


    <!-- SERVICES SECTION -->
    <section class="services section-padding" id="services">
        <div class="container">

            <div class="section-heading center">
                <span class="subtitle">WHAT WE OFFER</span>

                <h2>
                    Our Beauty <span>Services</span>
                </h2>

                <p>
                    Discover the perfect treatment for your beauty.
                </p>
            </div>

            <div class="service-grid">

                <div class="service-card">
                    <div class="service-icon">💅</div>
                    <h3>Nail Art</h3>
                    <p>
                        Express your style with beautiful and
                        creative nail designs.
                    </p>
                    <a href="#contact">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon">🌸</div>
                    <h3>Manicure</h3>
                    <p>
                        Keep your hands and nails clean,
                        healthy, and beautiful.
                    </p>
                    <a href="#contact">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon">🦶</div>
                    <h3>Pedicure</h3>
                    <p>
                        Give your feet the care and relaxation
                        they deserve.
                    </p>
                    <a href="#contact">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon">✨</div>
                    <h3>Eyelash</h3>
                    <p>
                        Enhance your natural beauty with
                        elegant eyelash treatments.
                    </p>
                    <a href="#contact">Learn More →</a>
                </div>

            </div>
        </div>
    </section>


    <!-- GALLERY SECTION -->
    <section class="gallery section-padding" id="gallery">
        <div class="container">

            <div class="section-heading center">
                <span class="subtitle">OUR PORTFOLIO</span>
                <h2>Beauty <span>Gallery</span></h2>
                <p>A little inspiration for your next look.</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item gallery-one">
                    <span>Elegant Nail Art</span>
                </div>

                <div class="gallery-item gallery-two">
                    <span>Soft Pink Nails</span>
                </div>

                <div class="gallery-item gallery-three">
                    <span>Beautiful Details</span>
                </div>
            </div>

        </div>
    </section>


    <!-- CONTACT SECTION -->
    <section class="contact section-padding" id="contact">
        <div class="container contact-content">

            <span class="subtitle">LET'S MAKE YOU BEAUTIFUL</span>

            <h2>
                Ready for Your<br>
                <span>Beauty Moment?</span>
            </h2>

            <p>
                Your beauty journey starts here.
                We can't wait to welcome you!
            </p>

            <a href="#services" class="primary-button">
                Explore Our Services →
            </a>

        </div>
    </section>


    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-content">

            <a href="#home" class="logo">
                Nailé<span>.</span>
                <small>BEAUTY STUDIO</small>
            </a>

            <p>
                © 2026 Nailé Beauty Studio.
                All Rights Reserved.
            </p>

            <a href="#home">Back to Top ↑</a>

        </div>
    </footer>


    <!-- JAVASCRIPT -->
    <script src="assets/js/script.js"></script>

</body>
</html>
