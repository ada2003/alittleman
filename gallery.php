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
            padding: 80px 20px;
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

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(3, 200px);
            gap: 15px;
            margin-bottom: 50px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
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

        /* Specific positioning for masonry layout */
        .gallery-item:nth-child(1) {
            grid-column: 1;
            grid-row: 1;
        }

        .gallery-item:nth-child(2) {
            grid-column: 2;
            grid-row: 1 / span 2;
        }

        .gallery-item:nth-child(3) {
            grid-column: 3;
            grid-row: 1;
        }

        .gallery-item:nth-child(4) {
            grid-column: 4;
            grid-row: 1 / span 2;
        }

        .gallery-item:nth-child(5) {
            grid-column: 1;
            grid-row: 2 / span 2;
        }

        .gallery-item:nth-child(6) {
            grid-column: 2;
            grid-row: 3;
        }

        .gallery-item:nth-child(7) {
            grid-column: 3;
            grid-row: 2 / span 2;
        }

        .gallery-item:nth-child(8) {
            grid-column: 4;
            grid-row: 3;
        }

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

        /* Responsive Design */
        @media (max-width: 1024px) {
            .gallery-title {
                font-size: 70px;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: repeat(4, 180px);
                gap: 12px;
            }
            
            .gallery-item:nth-child(1) {
                grid-column: 1;
                grid-row: 1;
            }

            .gallery-item:nth-child(2) {
                grid-column: 2;
                grid-row: 1 / span 2;
            }

            .gallery-item:nth-child(3) {
                grid-column: 3;
                grid-row: 1;
            }

            .gallery-item:nth-child(4) {
                grid-column: 3;
                grid-row: 2;
            }

            .gallery-item:nth-child(5) {
                grid-column: 1;
                grid-row: 2 / span 2;
            }

            .gallery-item:nth-child(6) {
                grid-column: 2;
                grid-row: 3;
            }

            .gallery-item:nth-child(7) {
                grid-column: 3;
                grid-row: 3 / span 2;
            }

            .gallery-item:nth-child(8) {
                grid-column: 1;
                grid-row: 4;
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
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(6, 150px);
                gap: 10px;
            }
            
            .gallery-item:nth-child(1) {
                grid-column: 1;
                grid-row: 1;
            }

            .gallery-item:nth-child(2) {
                grid-column: 2;
                grid-row: 1 / span 2;
            }

            .gallery-item:nth-child(3) {
                grid-column: 1;
                grid-row: 2;
            }

            .gallery-item:nth-child(4) {
                grid-column: 2;
                grid-row: 3;
            }

            .gallery-item:nth-child(5) {
                grid-column: 1;
                grid-row: 3 / span 2;
            }

            .gallery-item:nth-child(6) {
                grid-column: 2;
                grid-row: 4;
            }

            .gallery-item:nth-child(7) {
                grid-column: 1;
                grid-row: 5;
            }

            .gallery-item:nth-child(8) {
                grid-column: 2;
                grid-row: 5 / span 2;
            }
        }

        @media (max-width: 480px) {
            .gallery-title {
                font-size: 40px;
            }
            
            .gallery-section {
                padding: 40px 15px;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(8, 250px);
            }
            
            .gallery-item:nth-child(1),
            .gallery-item:nth-child(2),
            .gallery-item:nth-child(3),
            .gallery-item:nth-child(4),
            .gallery-item:nth-child(5),
            .gallery-item:nth-child(6),
            .gallery-item:nth-child(7),
            .gallery-item:nth-child(8) {
                grid-column: 1;
                grid-row: auto;
            }
        }
    </style>
</head>
<body>
    <section class="gallery-section">
        <div class="gallery-container">
            <h1 class="gallery-title">Check Our Gallery</h1>
            
            <nav class="gallery-nav">
                <span class="nav-item active">Weddings</span>
                <span class="nav-item">Pre - Weddings</span>
                <span class="nav-item">Destination Stories</span>
                <span class="nav-item">Intimate Moments</span>
                <span class="nav-item">Maternity Shoot</span>
            </nav>
            
            <div class="gallery-grid">
                <div class="gallery-item small-image">
                    <img src="./assets/up1.jpg" alt="Wedding Photo 1">
                </div>
                <div class="gallery-item big-image">
                    <img src="./assets/up2.jpg" alt="Wedding Photo 2">
                </div>
                <div class="gallery-item small-image">
                    <img src="./assets/up3.png" alt="Wedding Photo 3">
                </div>
                <div class="gallery-item big-image">
                    <img src="./assets/up4.jpg" alt="Wedding Photo 4">
                </div>
                <div class="gallery-item big-image">
                    <img src="./assets/b1.png" alt="Wedding Photo 5">
                </div>
                <div class="gallery-item small-image">
                    <img src="./assets/b2.png" alt="Wedding Photo 6">
                </div>
                <div class="gallery-item big-image">
                    <img src="./assets/b3.png" alt="Wedding Photo 7">
                </div>
                <div class="gallery-item small-image">
                    <img src="./assets/b4.png" alt="Wedding Photo 8">
                </div>
            </div>
            
            <a href="#" class="view-all-btn">View All →</a>
        </div>
    </section>
</body>
</html>