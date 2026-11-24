
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Nailé Beauty Studio</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff0f2, #fbdfe5);
            color: #75434d;
        }

        /* NAVBAR */
        .services-navbar {
            min-height: 72px;
            padding: 10px 4%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f9dce3;
            box-shadow: 0 2px 12px rgba(140, 75, 90, 0.08);
        }

        .services-logo {
            color: #783f4a;
            font-family: Georgia, serif;
            font-size: 27px;
            font-weight: bold;
            text-decoration: none;
            line-height: 1;
        }

        .services-logo span {
            color: #c87587;
        }

        .services-logo small {
            display: block;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: 2px;
            text-align: center;
            margin-top: 5px;
        }

        .services-navbar nav {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .services-navbar nav a {
            color: #70434b;
            font-size: 13px;
            text-decoration: none;
            padding: 9px 0;
            transition: 0.3s;
        }

        .services-navbar nav a.active,
        .services-navbar nav a:hover {
            color: #b85e73;
            border-bottom: 2px solid #c87587;
        }

        .navbar-book-btn {
            padding: 11px 23px;
            background: #c87587;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-size: 12px;
            transition: 0.3s;
        }

        .navbar-book-btn:hover {
            background: #a95469;
        }

        /* SERVICES */
        .services-main {
            padding: 42px 4% 55px;
        }

        .services-heading {
            text-align: center;
            margin-bottom: 32px;
        }

        .services-heading h1 {
            font-family: Georgia, serif;
            font-size: 38px;
            font-style: italic;
            font-weight: normal;
            margin: 0 0 9px;
            color: #743f49;
        }

        .services-heading p {
            font-family: Georgia, serif;
            font-size: 15px;
            font-style: italic;
            margin: 0;
            color: #965b67;
        }

        /* SERVICE CARDS */
        .services-card-grid {
            max-width: 1250px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
        }

        .services-card {
            overflow: hidden;
            text-align: center;
            background: #fce9ed;
            border: 1px solid #f2d1d9;
            border-radius: 18px;
            box-shadow: 0 5px 14px rgba(155, 91, 105, 0.08);
            transition: 0.3s;
        }

        .services-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 9px 20px rgba(155, 91, 105, 0.15);
        }

        .services-card img {
            display: block;
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .services-card-info {
            padding: 16px 13px 18px;
        }

        .services-card-info h2 {
            font-family: Georgia, serif;
            font-size: 19px;
            font-style: italic;
            margin: 0 0 9px;
            color: #75434d;
        }

        .services-card-info p {
            min-height: 36px;
            font-size: 12px;
            line-height: 1.6;
            margin: 0 0 10px;
            color: #895d65;
        }

        .services-card-info strong {
            display: block;
            font-size: 13px;
            color: #75434d;
            margin-bottom: 14px;
        }

        .services-book-btn {
            display: inline-block;
            width: 85%;
            padding: 11px 0;
            background: #c87587;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-size: 12px;
            transition: 0.3s;
        }

        .services-book-btn:hover {
            background: #a95469;
        }

        /* RESPONSIVE */
        @media (max-width: 850px) {
            .services-card-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .services-navbar nav {
                gap: 13px;
            }
        }

        @media (max-width: 600px) {
            .services-navbar {
                flex-wrap: wrap;
                gap: 12px;
            }

            .services-navbar nav {
                order: 3;
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }

            .services-card-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .services-card img {
                height: 135px;
            }

            .services-heading h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="services-navbar">

        <a href="../index.php" class="services-logo">
            Nailé<span>.</span>
            <small>BEAUTY STUDIO</small>
        </a>

        <nav>
            <a href="../index.php">Home</a>
            <a href="services.php" class="active">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">About</a>
        </nav>

        <a href="booking.php" class="navbar-book-btn">Book Now</a>

    </header>

    <!-- SERVICES -->
    <main class="services-main">

        <div class="services-heading">
            <h1>Our Services</h1>
            <p>Pamper Yourself with Our Beauty Treatments ♡</p>
        </div>

        <div class="services-card-grid">

            <!-- NAIL ART -->
            <article class="services-card">
                <img src="../assets/images/02-nail-art.jpg" alt="Nail Art">

                <div class="services-card-info">
                    <h2>Nail Art</h2>
                    <p>Express your style with stunning nail designs.</p>
                    <strong>From Rp150.000</strong>
                    <a href="booking.php" class="services-book-btn">Book Now</a>
                </div>
            </article>

            <!-- MANICURE -->
            <article class="services-card">
                <img src="../assets/images/03-manicure.jpg" alt="Manicure">

                <div class="services-card-info">
                    <h2>Manicure</h2>
                    <p>Keep your hands healthy and beautiful.</p>
                    <strong>From Rp100.000</strong>
                    <a href="booking.php" class="services-book-btn">Book Now</a>
                </div>
            </article>

            <!-- PEDICURE -->
            <article class="services-card">
                <img src="../assets/images/04-pedicure.jpg" alt="Pedicure">

                <div class="services-card-info">
                    <h2>Pedicure</h2>
                    <p>Soft and fresh feet for more confidence.</p>
                    <strong>From Rp120.000</strong>
                    <a href="booking.php" class="services-book-btn">Book Now</a>
                </div>
            </article>

            <!-- EYELASH -->
            <article class="services-card">
                <img src="../assets/images/05-eyelash.jpg" alt="Eyelash">

                <div class="services-card-info">
                    <h2>Eyelash</h2>
                    <p>Beautiful lashes for a brighter look.</p>
                    <strong>From Rp200.000</strong>
                    <a href="booking.php" class="services-book-btn">Book Now</a>
                </div>
            </article>

        </div>

    </main>

</body>
</html>
