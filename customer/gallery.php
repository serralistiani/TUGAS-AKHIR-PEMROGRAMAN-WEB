
<?php
$gallery = [
    // NAIL ART
    ["file" => "nail-art/nailart-01.jpg", "category" => "nail-art", "title" => "Chocolate Gold"],
    ["file" => "nail-art/nailart-02.jpeg", "category" => "nail-art", "title" => "Blue Floral"],
    ["file" => "nail-art/nailart-03.jpg", "category" => "nail-art", "title" => "Nude Floral"],
    ["file" => "nail-art/nailart-04.jpg", "category" => "nail-art", "title" => "Pearl Elegance"],
    ["file" => "nail-art/nailart-05.jpg", "category" => "nail-art", "title" => "Pink Blossom"],
    ["file" => "nail-art/nailart-06.jpg", "category" => "nail-art", "title" => "French Tip"],
    ["file" => "nail-art/nailart-07.jpg", "category" => "nail-art", "title" => "Glitter Charm"],
    ["file" => "nail-art/nailart-08.jpg", "category" => "nail-art", "title" => "Soft Nude"],

    // MANICURE
    ["file" => "manicure/manicure-01.jpg", "category" => "manicure", "title" => "Classic Manicure"],
    ["file" => "manicure/manicure-02.jpg", "category" => "manicure", "title" => "Pink Gloss"],
    ["file" => "manicure/manicure-03.jpg", "category" => "manicure", "title" => "Natural Beauty"],
    ["file" => "manicure/manicure-04.jpg", "category" => "manicure", "title" => "French Manicure"],
    ["file" => "manicure/manicure-05.jpg", "category" => "manicure", "title" => "Clean Nails"],

    // PEDICURE
    ["file" => "pedicure/pedicure-01.jpg", "category" => "pedicure", "title" => "Pink Pedicure"],
    ["file" => "pedicure/pedicure-02.jpg", "category" => "pedicure", "title" => "French Pedicure"],
    ["file" => "pedicure/pedicure-03.jpg", "category" => "pedicure", "title" => "Floral Pedicure"],
    ["file" => "pedicure/pedicure-04.jpg", "category" => "pedicure", "title" => "Natural Pedicure"],
    ["file" => "pedicure/pedicure-05.jpg", "category" => "pedicure", "title" => "Soft Pink Toes"],

    // EYELASH
    ["file" => "eyelash/eyelash-01.jpg", "category" => "eyelash", "title" => "Natural Lashes"],
    ["file" => "eyelash/eyelash-02.jpg", "category" => "eyelash", "title" => "Classic Lashes"],
    ["file" => "eyelash/eyelash-03.jpg", "category" => "eyelash", "title" => "Hybrid Lashes"],
    ["file" => "eyelash/eyelash-04.jpg", "category" => "eyelash", "title" => "Volume Lashes"],
    ["file" => "eyelash/eyelash-05.jpg", "category" => "eyelash", "title" => "Mega Volume"],
    ["file" => "eyelash/eyelash-06.jpg", "category" => "eyelash", "title" => "Wispy Lashes"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Nailé Beauty Studio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff2f4, #f9e1e7);
            color: #794650;
        }

        /* NAVBAR */
        .gallery-navbar {
            width: 100%;
            min-height: 80px;
            padding: 12px 4%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f9dce3;
            box-shadow: 0 3px 12px rgba(130, 70, 85, 0.08);
        }

        .gallery-logo {
            text-decoration: none;
            color: #814451;
            font-family: Georgia, serif;
            font-size: 32px;
            font-weight: bold;
            line-height: 1;
        }

        .gallery-logo span {
            color: #c8798d;
        }

        .gallery-logo small {
            display: block;
            margin-top: 5px;
            font-family: Arial, sans-serif;
            font-size: 10px;
            letter-spacing: 3px;
            text-align: center;
        }

        .gallery-nav {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        .gallery-nav a {
            text-decoration: none;
            color: #794650;
            font-size: 15px;
            padding: 10px 0;
            transition: 0.3s;
        }

        .gallery-nav a:hover,
        .gallery-nav a.active {
            color: #c66f85;
            border-bottom: 2px solid #c66f85;
        }

        .gallery-book-btn {
            text-decoration: none;
            background: #c8798d;
            color: white;
            padding: 13px 27px;
            border-radius: 30px;
            transition: 0.3s;
        }

        .gallery-book-btn:hover {
            background: #ad6075;
            transform: translateY(-2px);
        }

        /* GALLERY HEADER */
        .gallery-container {
            max-width: 1450px;
            margin: auto;
            padding: 55px 5% 70px;
        }

        .gallery-heading {
            text-align: center;
            margin-bottom: 32px;
        }

        .gallery-heading h1 {
            font-family: Georgia, serif;
            font-size: 46px;
            font-style: italic;
            font-weight: normal;
            color: #804653;
            margin-bottom: 12px;
        }

        .gallery-heading p {
            font-family: Georgia, serif;
            font-size: 18px;
            font-style: italic;
            color: #a96578;
        }

        /* FILTER BUTTON */
        .gallery-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .filter-btn {
            border: 1px solid #dba2b0;
            background: #fff8fa;
            color: #94596a;
            padding: 10px 23px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #c8798d;
            color: white;
            border-color: #c8798d;
        }

        /* GALLERY GRID */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 17px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 17px;
            background: #f8dfe5;
            aspect-ratio: 1 / 1;
            box-shadow: 0 5px 15px rgba(125, 70, 85, 0.08);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: end;
            padding: 18px;
            background: linear-gradient(
                transparent 45%,
                rgba(75, 35, 45, 0.55)
            );
            opacity: 0;
            transition: 0.3s;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay h3 {
            color: white;
            font-family: Georgia, serif;
            font-size: 18px;
            font-weight: normal;
        }

        .gallery-item.hidden {
            display: none;
        }

        /* VIEW MORE */
        .gallery-more {
            display: flex;
            justify-content: center;
            margin-top: 38px;
        }

        .view-more-btn {
            border: none;
            background: #c8798d;
            color: white;
            padding: 13px 38px;
            border-radius: 30px;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .view-more-btn:hover {
            background: #ad6075;
            transform: translateY(-2px);
        }

        .view-more-btn.hide {
            display: none;
        }

        /* FOOTER */
        .gallery-footer {
            text-align: center;
            padding: 35px 20px;
            background: #f9dce3;
            color: #87505d;
        }

        .gallery-footer h2 {
            font-family: Georgia, serif;
            font-style: italic;
            margin-bottom: 10px;
        }

        .gallery-footer a {
            display: inline-block;
            margin-top: 17px;
            text-decoration: none;
            background: #c8798d;
            color: white;
            padding: 12px 28px;
            border-radius: 30px;
        }

        /* RESPONSIVE */
        @media (max-width: 950px) {
            .gallery-nav {
                gap: 18px;
            }

            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 650px) {
            .gallery-navbar {
                flex-direction: column;
                gap: 17px;
            }

            .gallery-nav {
                justify-content: center;
                flex-wrap: wrap;
                gap: 15px;
            }

            .gallery-nav a {
                font-size: 13px;
            }

            .gallery-heading h1 {
                font-size: 36px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .gallery-container {
                padding: 40px 4%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="gallery-navbar">

        <a href="../index.php" class="gallery-logo">
            Nailé<span>.</span>
            <small>BEAUTY STUDIO</small>
        </a>

        <nav class="gallery-nav">
            <a href="../index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="gallery.php" class="active">Gallery</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">About</a>
        </nav>

        <a href="booking.php" class="gallery-book-btn">Book Now</a>

    </header>

    <!-- GALLERY -->
    <main class="gallery-container">

        <div class="gallery-heading">
            <h1>Our Gallery</h1>
            <p>Get inspired by our latest creations ♡</p>
        </div>

        <!-- FILTER -->
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="nail-art">Nail Art</button>
            <button class="filter-btn" data-filter="manicure">Manicure</button>
            <button class="filter-btn" data-filter="pedicure">Pedicure</button>
            <button class="filter-btn" data-filter="eyelash">Eyelash</button>
        </div>

        <!-- PHOTO GRID -->
        <div class="gallery-grid" id="galleryGrid">

            <?php foreach ($gallery as $index => $item): ?>

                <div class="gallery-item"
                     data-category="<?= htmlspecialchars($item['category']) ?>"
                     data-index="<?= $index ?>">

                    <img
                        src="../assets/images/gallery/<?= htmlspecialchars($item['file']) ?>"
                        alt="<?= htmlspecialchars($item['title']) ?>"
                        loading="lazy"
                    >

                    <div class="gallery-overlay">
                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <!-- VIEW MORE -->
        <div class="gallery-more">
            <button class="view-more-btn" id="viewMoreBtn">
                View More →
            </button>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="gallery-footer">
        <h2>Love What You See? ♡</h2>
        <p>Let's create your own beautiful look with Nailé Beauty Studio.</p>
        <a href="booking.php">Book Your Appointment</a>
    </footer>

    <script>
        const filterButtons = document.querySelectorAll(".filter-btn");
        const galleryItems = document.querySelectorAll(".gallery-item");
        const viewMoreBtn = document.getElementById("viewMoreBtn");

        let activeFilter = "all";
        let visibleLimit = 8;

        function updateGallery() {
            const filteredItems = Array.from(galleryItems).filter(item => {
                return activeFilter === "all" ||
                    item.dataset.category === activeFilter;
            });

            galleryItems.forEach(item => {
                item.classList.add("hidden");
            });

            filteredItems.forEach((item, index) => {
                if (index < visibleLimit) {
                    item.classList.remove("hidden");
                }
            });

            if (filteredItems.length > visibleLimit) {
                viewMoreBtn.classList.remove("hide");
            } else {
                viewMoreBtn.classList.add("hide");
            }
        }

        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
                filterButtons.forEach(btn => btn.classList.remove("active"));

                button.classList.add("active");
                activeFilter = button.dataset.filter;
                visibleLimit = 8;

                updateGallery();
            });
        });

        viewMoreBtn.addEventListener("click", () => {
            visibleLimit += 8;
            updateGallery();
        });

        updateGallery();
    </script>

</body>
</html>
