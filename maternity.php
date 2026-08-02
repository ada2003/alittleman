<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Banner Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Oswald', sans-serif;
        }

        .gallery-section {
            background-color: #F9F9F9;
            padding: 150px 20px 80px;
            min-height: 100vh;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-title {
            font-family: 'Oswald', sans-serif;
            font-weight: 400;
            font-size: 85px;
            line-height: 104%;
            letter-spacing: 3%;
            text-align: center;
            text-transform: uppercase;
            color: #333;
            margin-bottom: 30px;
        }

        .gallery-nav {
            font-family: 'Oswald', sans-serif;
            font-weight: 400;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 8%;
            text-align: center;
            text-transform: uppercase;
            color: #666;
            margin-bottom: 60px;
        }

        .nav-item {
            display: inline-block;
            margin: 0 15px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .nav-item:hover {
            color: #333;
        }

        .nav-item.active {
            color: #333;
            font-weight: 500;
        }

        /* Brick-wall gallery: row-based flex layout, courses offset like real
           brickwork, no leftover empty grid cells since each row fills 100% */
        .gallery-grid {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 50px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .brick-row {
            display: flex;
            gap: 15px;
            width: 100%;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.02);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Course 1: three bricks, uneven widths */
        .brick-row:nth-child(1) { height: 260px; }
        .brick-row:nth-child(1) .gallery-item:nth-child(1) { flex: 1.4; }
        .brick-row:nth-child(1) .gallery-item:nth-child(2) { flex: 1; }
        .brick-row:nth-child(1) .gallery-item:nth-child(3) { flex: 1.3; }

        /* Course 2: two long bricks, offset from course above/below */
        .brick-row:nth-child(2) { height: 320px; }
        .brick-row:nth-child(2) .gallery-item:nth-child(1) { flex: 1.2; }
        .brick-row:nth-child(2) .gallery-item:nth-child(2) { flex: 1; }

        /* Course 3: three bricks again, widths swapped for the offset look */
        .brick-row:nth-child(3) { height: 260px; }
        .brick-row:nth-child(3) .gallery-item:nth-child(1) { flex: 1; }
        .brick-row:nth-child(3) .gallery-item:nth-child(2) { flex: 1.5; }
        .brick-row:nth-child(3) .gallery-item:nth-child(3) { flex: 1; }

        .view-all-btn {
            display: block;
            width: 200px;
            margin: 0 auto;
            padding: 15px 30px;
            background-color: #333;
            color: white;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Oswald', sans-serif;
            font-weight: 400;
            font-size: 16px;
            letter-spacing: 2px;
            border-radius: 0;
            transition: background-color 0.3s ease;
        }

        .view-all-btn:hover {
            background-color: #555;
        }

        /* Lightbox popup */
        .lightbox-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .lightbox-overlay.active {
            display: flex;
        }

        .lightbox-overlay img {
            max-width: 90vw;
            max-height: 90vh;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 4px;
        }

        .lightbox-close {
            position: absolute;
            top: 25px;
            right: 35px;
            color: #fff;
            font-family: 'Oswald', sans-serif;
            font-size: 40px;
            font-weight: 300;
            cursor: pointer;
            line-height: 1;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .gallery-title {
                font-size: 70px;
            }

            .gallery-grid {
                gap: 12px;
            }

            .brick-row {
                gap: 12px;
            }

            .brick-row:nth-child(1),
            .brick-row:nth-child(3) {
                height: 220px;
            }

            .brick-row:nth-child(2) {
                height: 270px;
            }
        }

        @media (max-width: 768px) {
            .gallery-title {
                font-size: 50px;
            }

            .gallery-nav {
                font-size: 14px;
            }

            .nav-item {
                display: block;
                margin: 10px 0;
            }

            .gallery-grid {
                gap: 10px;
            }

            .brick-row {
                gap: 10px;
                flex-wrap: wrap;
            }

            .brick-row:nth-child(1) .gallery-item,
            .brick-row:nth-child(3) .gallery-item {
                flex: 1 1 calc(50% - 5px);
            }

            .brick-row:nth-child(1) .gallery-item:nth-child(1),
            .brick-row:nth-child(3) .gallery-item:nth-child(2) {
                flex-basis: 100%;
            }

            .brick-row:nth-child(2) .gallery-item {
                flex: 1 1 calc(50% - 5px);
            }

            .brick-row:nth-child(1),
            .brick-row:nth-child(3) {
                height: auto;
            }

            .brick-row:nth-child(1) .gallery-item,
            .brick-row:nth-child(3) .gallery-item {
                height: 200px;
            }

            .brick-row:nth-child(2) {
                height: 220px;
            }
        }

        @media (max-width: 480px) {
            .gallery-title {
                font-size: 40px;
            }

            .gallery-section {
                padding: 100px 15px 40px;
            }

            .brick-row {
                flex-wrap: wrap;
            }

            .brick-row .gallery-item {
                flex: 1 1 100% !important;
                height: 220px !important;
            }

            .lightbox-close {
                top: 15px;
                right: 20px;
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
     <?php include './navbar.php'; ?>
    <section class="gallery-section">
        <div class="gallery-container">

            <div class="gallery-grid">
                 <div class="brick-row">
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654289/9V4A1163_o92sdo.jpg" alt="Wedding Photo 6" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654355/9V4A9030_xbtmdb.jpg" alt="Wedding Photo 7" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654283/9V4A1695_lmnldw.jpg" alt="Wedding Photo 8" loading="lazy">
                    </div>
                </div>
                <div class="brick-row">
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654356/9V4A8935_rfqhlr.jpg" alt="Wedding Photo 1" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654292/9V4A9646_qtpznr.jpg" alt="Wedding Photo 2" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654289/9V4A9716_iffivy.jpg" alt="Wedding Photo 3" loading="lazy">
                    </div>
                </div>

                <div class="brick-row">
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654278/9V4A4509_vzfmnd.jpg" alt="Wedding Photo 4" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654272/9V4A9662_r7jp62.jpg" alt="Wedding Photo 5" loading="lazy">
                    </div>
                </div>

                <div class="brick-row">
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654267/9V4A9791_c9n2wl.jpg" alt="Wedding Photo 6" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654286/9V4A9707_asvtfi.jpg" alt="Wedding Photo 7" loading="lazy">
                    </div>
                    <div class="gallery-item">
                        <img src="https://res.cloudinary.com/dodzqx4lh/image/upload/v1785654271/9V4A3392_nmdmvh.jpg" alt="Wedding Photo 8" loading="lazy">
                    </div>
                </div>
                
            </div>

        </div>
    </section>

    <!-- Lightbox popup -->
    <div class="lightbox-overlay" id="lightboxOverlay">
        <span class="lightbox-close" id="lightboxClose">&times;</span>
        <img src="" alt="Enlarged view" id="lightboxImg">
    </div>

      <?php include './footer.php'; ?>

    <script>
        // Lightbox: click any gallery image to view it larger
        const lightboxOverlay = document.getElementById('lightboxOverlay');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxClose = document.getElementById('lightboxClose');

        document.querySelectorAll('.gallery-item img').forEach(img => {
            img.addEventListener('click', () => {
                lightboxImg.src = img.src;
                lightboxOverlay.classList.add('active');
            });
        });

        function closeLightbox() {
            lightboxOverlay.classList.remove('active');
            lightboxImg.src = '';
        }

        lightboxClose.addEventListener('click', closeLightbox);

        lightboxOverlay.addEventListener('click', (e) => {
            if (e.target === lightboxOverlay) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>
</body>
</html>