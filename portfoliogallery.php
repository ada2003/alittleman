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
            grid-template-rows: repeat(6, 200px);
            gap: 15px;
            margin-bottom: 50px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .gallery-item {
            overflow: hidden;
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

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            animation: zoomIn 0.3s ease;
        }

        .modal-image {
            width: 700px;
            height: 700px;
            object-fit: contain;
            border-radius: 8px;
        }

        .close-btn {
            position: absolute;
            top: -40px;
            right: 0;
            color: #fff;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .close-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes zoomIn {
            from { 
                opacity: 0;
                transform: scale(0.5);
            }
            to { 
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Specific positioning for masonry layout - Extended Pattern */
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

        .gallery-item:nth-child(9) {
            grid-column: 1;
            grid-row: 4;
        }

        .gallery-item:nth-child(10) {
            grid-column: 2;
            grid-row: 4 / span 2;
        }

        .gallery-item:nth-child(11) {
            grid-column: 3;
            grid-row: 4;
        }

        .gallery-item:nth-child(12) {
            grid-column: 4;
            grid-row: 4 / span 2;
        }

        .gallery-item:nth-child(13) {
            grid-column: 1;
            grid-row: 5 / span 2;
        }

        .gallery-item:nth-child(14) {
            grid-column: 2;
            grid-row: 6;
        }

        .gallery-item:nth-child(15) {
            grid-column: 3;
            grid-row: 5 / span 2;
        }

        .gallery-item:nth-child(16) {
            grid-column: 4;
            grid-row: 6;
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
                grid-template-rows: repeat(8, 180px);
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

            .gallery-item:nth-child(9) {
                grid-column: 2;
                grid-row: 4 / span 2;
            }

            .gallery-item:nth-child(10) {
                grid-column: 3;
                grid-row: 5;
            }

            .gallery-item:nth-child(11) {
                grid-column: 1;
                grid-row: 5 / span 2;
            }

            .gallery-item:nth-child(12) {
                grid-column: 2;
                grid-row: 6;
            }

            .gallery-item:nth-child(13) {
                grid-column: 3;
                grid-row: 6 / span 2;
            }

            .gallery-item:nth-child(14) {
                grid-column: 1;
                grid-row: 7;
            }

            .gallery-item:nth-child(15) {
                grid-column: 2;
                grid-row: 7 / span 2;
            }

            .gallery-item:nth-child(16) {
                grid-column: 3;
                grid-row: 8;
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
                grid-template-rows: repeat(12, 150px);
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

            .gallery-item:nth-child(9) {
                grid-column: 1;
                grid-row: 6;
            }

            .gallery-item:nth-child(10) {
                grid-column: 2;
                grid-row: 7;
            }

            .gallery-item:nth-child(11) {
                grid-column: 1;
                grid-row: 7 / span 2;
            }

            .gallery-item:nth-child(12) {
                grid-column: 2;
                grid-row: 8;
            }

            .gallery-item:nth-child(13) {
                grid-column: 1;
                grid-row: 9;
            }

            .gallery-item:nth-child(14) {
                grid-column: 2;
                grid-row: 9 / span 2;
            }

            .gallery-item:nth-child(15) {
                grid-column: 1;
                grid-row: 10;
            }

            .gallery-item:nth-child(16) {
                grid-column: 2;
                grid-row: 11;
            }

            .modal-content {
                max-width: 95%;
                max-height: 85%;
            }

            .close-btn {
                top: -35px;
                font-size: 30px;
                width: 35px;
                height: 35px;
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
                grid-template-rows: repeat(16, 250px);
            }
            
            .gallery-item:nth-child(1),
            .gallery-item:nth-child(2),
            .gallery-item:nth-child(3),
            .gallery-item:nth-child(4),
            .gallery-item:nth-child(5),
            .gallery-item:nth-child(6),
            .gallery-item:nth-child(7),
            .gallery-item:nth-child(8),
            .gallery-item:nth-child(9),
            .gallery-item:nth-child(10),
            .gallery-item:nth-child(11),
            .gallery-item:nth-child(12),
            .gallery-item:nth-child(13),
            .gallery-item:nth-child(14),
            .gallery-item:nth-child(15),
            .gallery-item:nth-child(16) {
                grid-column: 1;
                grid-row: auto;
            }

            .modal-content {
                max-width: 98%;
                max-height: 80%;
            }

            .close-btn {
                top: -30px;
                font-size: 25px;
                width: 30px;
                height: 30px;
            }
        }
          /* --- keep all your CSS same as before --- */
         .portfolio-banner {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./assets/portfoliobanner.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            position: relative;
        }

        .portfolio-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-headings {
            font-family: 'Rozha One', serif;
            font-weight: 700;
            font-size: 128px;
            text-align: center;
            text-transform: capitalize;
            margin-bottom: 30px;
            line-height: 1.1;
        }

        .subheading {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 20px;
            text-align: center;
            margin-bottom: 15px;
            opacity: 0.9;
        }

        .description {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 20px;
            text-align: center;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .explore-btn {
            background: #ffffff;
            border: 1px solid #FFFFFF;
            color: #000;
            padding: 15px 30px;
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .explore-btn:hover {
            background: transparent;
            color: #FFFFFF;
            border: 1px solid #FFFFFF;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .main-headings {
                font-size: 100px;
            }
        }

        @media (max-width: 992px) {
            .main-headings {
                font-size: 80px;
            }
            .subheading,
            .description {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .portfolio-banner {
                padding: 15px;
            }
            
            .main-headings {
                font-size: 60px;
            }
            
            .subheading,
            .description {
                font-size: 16px;
            }
            
            .explore-btn {
                padding: 12px 25px;
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .main-headings {
                font-size: 45px;
            }
            
            .subheading,
            .description {
                font-size: 14px;
            }
            
            .explore-btn {
                padding: 10px 20px;
                font-size: 12px;
            }
        }

        @media (max-width: 400px) {
            .main-headings {
                font-size: 35px;
            }
            
            .subheading,
            .description {
                font-size: 12px;
            }
        }

    </style>
</head>
<body>
    <?php include './navbar.php'; ?>
    
    <?php
    // Get the couple ID from URL parameter
    $couple_id = isset($_GET['couple_id']) ? (int)$_GET['couple_id'] : 0;
    
    // Load the JSON file
    $jsonData = file_get_contents("content.json");
    $data = json_decode($jsonData, true);
    
    // Find the specific couple
    $selectedCouple = null;
    if(isset($data["couples"]) && count($data["couples"]) > 0) {
        foreach($data["couples"] as $couple) {
            if($couple["id"] == $couple_id) {
                $selectedCouple = $couple;
                break;
            }
        }
    }
    
    // If no couple found, show error or redirect
    if(!$selectedCouple) {
        echo "<script>alert('Couple not found!'); window.location.href='portfolio.php';</script>";
        exit;
    }
    ?>
    
    <section class="portfolio-banner">
        <div class="banner-content">
            <h1 class="main-headings"><?php echo strtoupper($selectedCouple['coupleName']); ?></h1>
            <p class="subheading">Wedding & Storytelling Photography</p>
            <p class="description"><?php echo $selectedCouple['date']; ?></p>
            <a href="portfolio.php" class="explore-btn">← Back to Portfolio</a>
        </div>
    </section>
    
    <section class="gallery-section">
        <div class="gallery-container">
            <div class="gallery-grid">
                <?php
                // Display the gallery images for the selected couple
                if(isset($selectedCouple["galleryImages"]) && count($selectedCouple["galleryImages"]) > 0) {
                    foreach($selectedCouple["galleryImages"] as $image) {
                        // Check if it's the third couple (Tanya & Shreyas) which uses 'image' instead of 'url'
                        $imageUrl = isset($image['url']) ? $image['url'] : $image['image'];
                        $altText = $image['alt'];
                        ?>
                        <div class="gallery-item" onclick="openModal('<?php echo $imageUrl; ?>', '<?php echo $altText; ?>')">
                            <img src="<?php echo $imageUrl; ?>" alt="<?php echo $altText; ?>">
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No gallery images available for this couple.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Modal for Image Popup -->
    <div id="imageModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <img class="modal-image" id="modalImage" src="" alt="">
        </div>
    </div>

    <?php include './contact.php'; ?>
    <?php include './footer.php'; ?>

    <script>
        // Function to open modal
        function openModal(imageSrc, imageAlt) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            
            modal.classList.add('active');
            modalImg.src = imageSrc;
            modalImg.alt = imageAlt;
            
            // Prevent body scrolling when modal is open
            document.body.style.overflow = 'hidden';
        }

        // Function to close modal
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            
            // Re-enable body scrolling
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</body>
</html>