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
 <!-- recent gallery section -->
    <section class="recent-films-section">
        <h2 class="section-title">Our Recent Films</h2>
        
        <div class="films-container" id="filmsContainer">
            <div class="loading-placeholder">Loading couples...</div>
        </div>
    </section>

<script>
        // Function to format date
        function formatDate(dateString) {
            const date = new Date(dateString);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return date.toLocaleDateString('en-US', options).toUpperCase();
        }

        // Function to create a film card
        function createFilmCard(couple, index) {
            const filmCard = document.createElement('div');
            filmCard.className = 'film-card';
            filmCard.style.animationDelay = `${(index + 1) * 0.1}s`;
            
            filmCard.innerHTML = `
                <div class="film-image-container">
                    <img src="${couple.cardImage}" 
                         alt="${couple.coupleName} Film" 
                         class="film-image loading"
                         onload="this.classList.remove('loading')"
                         onerror="this.src='https://images.unsplash.com/photo-1606800052052-a08af7148866?w=400&h=600&fit=crop&crop=faces'">
                    <div class="film-overlay">
                        <button class="view-film-btn" onclick="viewFilm('${couple.coupleName}', ${couple.id})">View Film →</button>
                    </div>
                </div>
                <div class="film-details">
                    <div class="film-title">${couple.coupleName}</div>
                    <div class="film-date">${formatDate(couple.date)}</div>
                </div>
            `;
            
            return filmCard;
        }

        // Function to handle view film button click
        function viewFilm(coupleName, coupleId) {
            // Redirect to gallery page with couple_id parameter
            window.location.href = `portfoliogallery.php?couple_id=${coupleId}`;
        }

        // Function to load couples data
        async function loadCouples() {
            const filmsContainer = document.getElementById('filmsContainer');
            
            try {
                const response = await fetch('./content.json');
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                const jsonData = await response.json();

                // Clear loading placeholder
                filmsContainer.innerHTML = '';

                // Create film cards for each couple
                jsonData.couples.forEach((couple, index) => {
                    const filmCard = createFilmCard(couple, index);
                    filmsContainer.appendChild(filmCard);
                });

            } catch (error) {
                console.error('Error loading couples data:', error);
                filmsContainer.innerHTML = `
                    <div class="error-message">
                        Error loading couples data. Please try again later.
                    </div>
                `;
            }
        }

        // Load couples when page is ready
        document.addEventListener('DOMContentLoaded', loadCouples);
    </script>
 <!-- End section -->
  <?php
  include './contact.php'
  ?>
  <?php
  include './footer.php'
  ?>
    
</body>
</html>