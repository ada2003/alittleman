<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolios</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
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
        /* three cards */
          .recent-films-section {
            background-color: #F6EFE3A3;
            padding: 80px 20px 100px;
            min-height: 100vh;
        }

       

        .films-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .film-card {
            width: 320px;
            text-align: left;
        }

        .film-image-container {
            position: relative;
            width: 100%;
            height: 520px;
           
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .film-image-container:hover {
            transform: translateY(-5px);
        }

     

        .film-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .film-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.4) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
        }

       .view-film-btn {
            background: rgba(255, 255, 255, 0.95);
            color: #2c2c2c;
            border: 1px solid rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            font-family: 'Oswald', sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.2;
            letter-spacing: 1px;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            cursor: pointer;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            border-radius: 2px;
            display: inline-block;
            width: auto;
            min-width: 140px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .view-film-btn:hover {
            background: rgba(255, 255, 255, 1);
            color: #000;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .film-details {
            margin-top: 20px;
            text-align: left;
        }

        .film-title {
            font-family: Oswald;
            font-weight: 500;
            font-size: 21px;
            line-height: 187%;
            letter-spacing: 2%;
            color: #2c2c2c;
            margin-bottom: 5px;
        }

        .film-date {
            font-family: Raleway;
            font-weight: 600;
            font-style: italic;
            font-size: 16px;
            line-height: 187%;
            letter-spacing: 2%;
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
       
            
            .films-container {
                gap: 30px;
            }
            
            .film-image-container {
                width: 280px;
                height: 460px;
            }
        }

        @media (max-width: 768px) {
            .recent-films-section {
                padding: 60px 20px 80px;
            }
            
      
            
            .films-container {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }
            
            .film-image-container {
                width: 100%;
                max-width: 350px;
                height: 500px;
            }
        }

        @media (max-width: 480px) {
       
            
            .film-overlay {
                padding: 20px;
            }
            
            .view-film-btn {
                min-width: 120px;
                padding: 10px 16px;
                font-size: 12px;
            }
            
            .film-title {
                font-size: 18px;
            }
            
            .film-date {
                font-size: 14px;
            }
        }
        /* tree cards end */
        
    </style>
</head>
<body>
    <?php include './navbar.php'; ?>

    <section class="portfolio-banner">
        <div class="banner-content">
            <h1 class="main-headings">Our Portfolio</h1>
            <p class="subheading">Wedding & Storytelling Photographers</p>
            <p class="description">Capturing timeless love through real, unscripted moments.</p>
            <a href="https://www.instagram.com/accounts/login/?next=%2Falittleman_%2F&source=omni_redirect" class="explore-btn">Explore Our Work →</a>
        </div>
    </section>

    <section class="recent-films-section">
        <div class="films-container">
            <?php
                // Load the JSON file
                $jsonData = file_get_contents("content.json");
                $data = json_decode($jsonData, true);

                if(isset($data["couples"]) && count($data["couples"]) > 0){
                    // Only take first 3 couples for 3 cards
                    $couples = array_slice($data["couples"], 0, 3);

                    foreach($couples as $couple){
                        $coupleId = $couple["id"];
                        $name = $couple["coupleName"];
                        $date = $couple["date"];
                        $cardImage = $couple["cardImage"];
                        ?>
                        <div class="film-card">
                            <div class="film-image-container">
                                <img loading="lazy" src="<?php echo $cardImage; ?>" alt="<?php echo $name; ?> Card Image" class="film-image">
                                <div class="film-overlay">
                                    <a href="portfoliogallery.php?couple_id=<?php echo $coupleId; ?>" class="view-film-btn">View Film →</a>
                                </div>
                            </div>
                            <div class="film-details">
                                <div class="film-title"><?php echo strtoupper($name); ?></div>
                                <div class="film-date"><?php echo strtoupper($date); ?></div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No portfolio data available.</p>";
                }
            ?>
        </div>
    </section>
    <?php include './contact.php'; ?>
<?php include './footer.php'; ?>
</body>
<script>
/* Portfolio slider — lightweight, non-invasive.
   - Uses content.json (same file you already use)
   - Shows 3 items per slide on desktop, 1 on narrow screens
   - Auto-slides, pauses on hover
   - Does not change your CSS; only injects a minimal track/slide layout inline
*/

(function () {
  const DESKTOP_ITEMS = 3;
  const MOBILE_ITEMS = 1;
  const SLIDE_INTERVAL_MS = 3500;

  // keep style/markup consistent with your PHP output: uppercase title/date formatting
  function formatDateUpper(dateString) {
    try {
      const d = new Date(dateString);
      const opts = { year: 'numeric', month: 'long', day: 'numeric' };
      return d.toLocaleDateString('en-US', opts).toUpperCase();
    } catch (e) {
      return (dateString || '').toUpperCase();
    }
  }

  function createFilmCardFromData(couple, idx) {
    const card = document.createElement('div');
    card.className = 'film-card';
    // keep any animation delay you had before (non-destructive)
    card.style.animationDelay = `${(idx + 1) * 0.08}s`;

    card.innerHTML = `
      <div class="film-image-container">
        <img loading="lazy" src="${couple.cardImage}" alt="${couple.coupleName} Card Image" class="film-image"
             onerror="this.src='https://images.unsplash.com/photo-1606800052052-a08af7148866?w=400&h=600&fit=crop&crop=faces'">
        <div class="film-overlay">
          <a href="portfoliogallery.php?couple_id=${couple.id}" class="view-film-btn">View Film →</a>
        </div>
      </div>
      <div class="film-details">
        <div class="film-title">${String(couple.coupleName || '').toUpperCase()}</div>
        <div class="film-date">${formatDateUpper(couple.date)}</div>
      </div>
    `;
    return card;
  }

  function buildSlider(container, cards) {
    // clear prior interval if any stored on container
    if (container._autoSlide) {
      clearInterval(container._autoSlide);
      container._autoSlide = null;
    }

    // determine items per slide by width
    const itemsPerSlide = window.innerWidth <= 768 ? MOBILE_ITEMS : DESKTOP_ITEMS;

    // if there are <= itemsPerSlide cards, just render them normally (no sliding needed)
    if (cards.length <= itemsPerSlide) {
      container.innerHTML = '';
      const row = document.createElement('div');
      row.style.display = 'flex';
      row.style.justifyContent = 'center';
      row.style.gap = getComputedStyle(document.documentElement).getPropertyValue('--films-gap') || '40px';
      cards.forEach(c => row.appendChild(c));
      container.appendChild(row);
      return;
    }

    // Build slider track / slides
    container.innerHTML = '';
    container.style.overflow = 'hidden';
    container.style.position = container.style.position || 'relative';
    container.style.display = 'block'; // ensure parent flex doesn't interfere

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

    const slides = [];
    for (let i = 0; i < cards.length; i += itemsPerSlide) {
      const slide = document.createElement('div');
      slide.className = 'films-slide';
      Object.assign(slide.style, {
        boxSizing: 'border-box',
        display: 'flex',
        justifyContent: 'center',
        gap: '40px',
        padding: '0 10px'
      });

      const group = cards.slice(i, i + itemsPerSlide);
      group.forEach(n => slide.appendChild(n));
      slides.push(slide);
      track.appendChild(slide);
    }

    const total = slides.length;
    // set track width and slides widths so percentage translate works
    track.style.width = `${total * 100}%`;
    slides.forEach(s => {
      s.style.minWidth = `${100 / total}%`;
      s.style.maxWidth = `${100 / total}%`;
    });

    container.appendChild(track);

    // auto slide
    let current = 0;
    function goTo(idx) {
      current = idx % total;
      const shiftPercent = current * (100 / total);
      track.style.transform = `translateX(-${shiftPercent}%)`;
    }

    container._autoSlide = setInterval(() => {
      goTo(current + 1);
    }, SLIDE_INTERVAL_MS);

    // pause on hover
    container.addEventListener('mouseenter', () => {
      if (container._autoSlide) {
        clearInterval(container._autoSlide);
        container._autoSlide = null;
      }
    });
    container.addEventListener('mouseleave', () => {
      if (!container._autoSlide) {
        container._autoSlide = setInterval(() => goTo(current + 1), SLIDE_INTERVAL_MS);
      }
    });

    // allow swipe navigation on touch (simple)
    let startX = 0;
    let deltaX = 0;
    track.addEventListener('touchstart', e => {
      if (e.touches && e.touches[0]) startX = e.touches[0].clientX;
    });
    track.addEventListener('touchmove', e => {
      if (e.touches && e.touches[0]) {
        deltaX = e.touches[0].clientX - startX;
      }
    });
    track.addEventListener('touchend', () => {
      if (Math.abs(deltaX) > 40) {
        if (deltaX < 0) goTo(current + 1); // swipe left -> next
        else goTo(current - 1 + total);   // swipe right -> prev
      }
      deltaX = 0;
    });

    // rebuild on resize to recalc itemsPerSlide (debounced)
    if (container._resizeHandler) window.removeEventListener('resize', container._resizeHandler);
    container._resizeHandler = () => {
      clearTimeout(container._resizeTimer);
      container._resizeTimer = setTimeout(() => {
        // recreate cards from original data stored on container
        const origData = container._origData || [];
        const newCards = origData.map((c, i) => createFilmCardFromData(c, i));
        buildSlider(container, newCards);
      }, 220);
    };
    window.addEventListener('resize', container._resizeHandler);
  }

  // Initialize: fetch content.json and build slider, but fall back gracefully.
  document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.films-container');
    if (!container) return;

    // fetch JSON. If it fails, leave current PHP-rendered content as-is.
    fetch('content.json').then(r => {
      if (!r.ok) throw new Error('json fetch failed');
      return r.json();
    }).then(json => {
      const couples = Array.isArray(json.couples) ? json.couples : [];
      if (couples.length === 0) return; // nothing to do

      // store original data for rebuild on resize
      container._origData = couples;

      // create film-card nodes from all couples (not only first 3)
      const cardNodes = couples.map((c, i) => createFilmCardFromData(c, i));
      buildSlider(container, cardNodes);
    }).catch(err => {
      // keep PHP output (three static cards) — just log the error
      console.warn('Portfolio slider: could not load content.json — keeping server-rendered markup.', err);
    });
  });
})();
</script>

</html>