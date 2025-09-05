<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Little Man - Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   

   <?php include "./navbar.php" ?>
<?php include "./banner.php" ?>
<?php include "./about.php" ?>
<?php include "./gallery.php"
?> 
<?php include "./feedback.php" ?>
<?php include "./video.php" ?>

<!-- recent gallery section -->
 <section class="recent-films-section">
        <h2 class="section-title">Our Recent Films</h2>
        
        <div class="films-container">
            <!-- Film Card 1 -->
            <div class="film-card">
                <div class="film-image-container">
                    <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?w=400&h=600&fit=crop&crop=faces" alt="Aman & Jasmeet Film 1" class="film-image">
                    <div class="film-overlay">
                        <button class="view-film-btn">View Film →</button>
                    </div>
                </div>
                <div class="film-details">
                    <div class="film-title">AMAN & JASMEET</div>
                    <div class="film-date">JULY 1, 2025</div>
                </div>
            </div>
            
            <!-- Film Card 2 -->
            <div class="film-card">
                <div class="film-image-container">
                    <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=400&h=600&fit=crop&crop=faces" alt="Aman & Jasmeet Film 2" class="film-image">
                    <div class="film-overlay">
                        <button class="view-film-btn">View Film →</button>
                    </div>
                </div>
                <div class="film-details">
                    <div class="film-title">AMAN & JASMEET</div>
                    <div class="film-date">JULY 1, 2025</div>
                </div>
            </div>
            
            <!-- Film Card 3 -->
            <div class="film-card">
                <div class="film-image-container">
                    <img src="https://images.unsplash.com/photo-1594736797933-d0300ad6d0ce?w=400&h=600&fit=crop&crop=faces" alt="Aman & Jasmeet Film 3" class="film-image">
                    <div class="film-overlay">
                        <button class="view-film-btn">View Film →</button>
                    </div>
                </div>
                <div class="film-details">
                    <div class="film-title">AMAN & JASMEET</div>
                    <div class="film-date">JULY 1, 2025</div>
                </div>
            </div>
        </div>
    </section>
 <!-- End section -->
  <?php
  include './contact.php'
  ?>
  <?php
  include './footer.php'
  ?>
    
</body>
</html>