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
    // --- existing helpers (unchanged) ---
    function formatDate(dateString) {
        const date = new Date(dateString);
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('en-US', options).toUpperCase();
    }

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

    function viewFilm(coupleName, coupleId) {
        window.location.href = `portfoliogallery.php?couple_id=${coupleId}`;
    }

    // --- slider logic (updated to fix non-moving track) ---
    const DEFAULT_DESKTOP_ITEMS = 3;
    const DEFAULT_MOBILE_ITEMS = 1;
    let autoSlideInterval = null;
    const slideDurationMs = 3500;

    async function loadCouples() {
        const filmsContainer = document.getElementById('filmsContainer');

        try {
            const response = await fetch('./content.json');
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            const jsonData = await response.json();

            const filmCards = jsonData.couples.map((couple, index) => createFilmCard(couple, index));
            buildSlider(filmsContainer, filmCards);
        } catch (error) {
            console.error('Error loading couples data:', error);
            filmsContainer.innerHTML = `
                <div class="error-message">
                    Error loading couples data. Please try again later.
                </div>
            `;
        }
    }

    function buildSlider(container, cardNodes) {
        // clear previous interval
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
            autoSlideInterval = null;
        }

        // choose items per slide
        const itemsPerSlide = window.innerWidth <= 768 ? DEFAULT_MOBILE_ITEMS : DEFAULT_DESKTOP_ITEMS;

        // reset container and styles that interfere with slider
        container.innerHTML = '';
        container.style.overflow = 'hidden';
        container.style.position = container.style.position || 'relative';
        // IMPORTANT: override display so .films-container flex rules don't break the slider layout
        container.style.display = 'block';

        // build track
        const track = document.createElement('div');
        track.className = 'films-track';
        Object.assign(track.style, {
            display: 'flex',
            transition: 'transform 600ms ease',
            willChange: 'transform',
            padding: '0',
            margin: '0',
            boxSizing: 'border-box'
        });

        // create slides (groups of itemsPerSlide)
        const slides = [];
        for (let i = 0; i < cardNodes.length; i += itemsPerSlide) {
            const slide = document.createElement('div');
            slide.className = 'films-slide';
            Object.assign(slide.style, {
                boxSizing: 'border-box',
                display: 'flex',
                justifyContent: 'center',
                gap: '40px', // matches your original gap
                padding: '0 10px'
            });

            const group = cardNodes.slice(i, i + itemsPerSlide);
            group.forEach(node => slide.appendChild(node));
            slides.push(slide);
            track.appendChild(slide);
        }

        const totalSlides = slides.length;

        // if only one slide, just append and center it
        if (totalSlides <= 1) {
            // ensure slide items are centered
            track.style.justifyContent = 'center';
            container.appendChild(track);
            return;
        }

        // set track width = totalSlides * 100% and each slide width = (100 / totalSlides)%
        track.style.width = `${totalSlides * 100}%`;
        slides.forEach(slide => {
            slide.style.minWidth = `${100 / totalSlides}%`;
            slide.style.maxWidth = `${100 / totalSlides}%`;
        });

        container.appendChild(track);

        // ensure film-card elements keep their visual sizing inside slides
        // (we don't change .film-card CSS; layout within slide will remain as before)

        // sliding logic
        let current = 0;
        const goTo = (index) => {
            current = index % totalSlides;
            track.style.transform = `translateX(-${current * (100 / totalSlides)}%)`;
        };

        // start auto-slide
        autoSlideInterval = setInterval(() => {
            goTo((current + 1) % totalSlides);
        }, slideDurationMs);

        // pause on hover
        container.addEventListener('mouseenter', () => {
            if (autoSlideInterval) {
                clearInterval(autoSlideInterval);
                autoSlideInterval = null;
            }
        });
        container.addEventListener('mouseleave', () => {
            if (!autoSlideInterval) {
                autoSlideInterval = setInterval(() => {
                    goTo((current + 1) % totalSlides);
                }, slideDurationMs);
            }
        });

        // rebuild on resize (debounced) so itemsPerSlide recalculates properly
        let resizeTimer = null;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                // re-fetch and rebuild to ensure fresh DOM nodes
                fetch('./content.json')
                    .then(r => r.json())
                    .then(jsonData => {
                        const newCards = jsonData.couples.map((couple, index) => createFilmCard(couple, index));
                        buildSlider(container, newCards);
                    })
                    .catch(err => console.warn('Could not rebuild slider on resize:', err));
            }, 250);
        });
    }

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