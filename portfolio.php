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
/* Continuous / smooth slider for the Portfolio section
   - Shows 3 items per view on desktop, 1 on mobile
   - Advances 1 card per tick
   - Seamless loop via cloning first N items
   - Pause on hover, basic touch swipe, resize-safe
   - Drop-in replacement: replace existing <script> at the bottom with this
*/

(function () {
  const DESKTOP_VISIBLE = 3;
  const MOBILE_VISIBLE = 1;
  const INTERVAL_MS = 3500;
  const TRANSITION_MS = 600;
  const GAP_PX = 40; // keep in sync with CSS gap between cards

  let autoTimer = null;
  let resizeTimer = null;

  // Make a film-card element from JSON data (keeps same markup as PHP output)
  function createFilmCardFromData(couple, idx) {
    const card = document.createElement('div');
    card.className = 'film-card';
    card.style.boxSizing = 'border-box';
    card.style.flex = '0 0 auto';
    card.style.margin = '0';
    card.style.animationDelay = `${(idx + 1) * 0.06}s`;

    const nameUpper = String(couple.coupleName || '').toUpperCase();
    const dateUpper = safeFormatDate(couple.date);

    card.innerHTML = `
      <div class="film-image-container">
        <img loading="lazy" src="${couple.cardImage}" alt="${nameUpper} Card Image" class="film-image"
             onerror="this.src='https://images.unsplash.com/photo-1606800052052-a08af7148866?w=400&h=600&fit=crop&crop=faces'">
        <div class="film-overlay">
          <a href="portfoliogallery.php?couple_id=${couple.id}" class="view-film-btn">View Film →</a>
        </div>
      </div>
      <div class="film-details">
        <div class="film-title">${nameUpper}</div>
        <div class="film-date">${dateUpper}</div>
      </div>
    `;
    return card;
  }

  function safeFormatDate(d) {
    try {
      const date = new Date(d);
      if (isNaN(date)) return (d || '').toUpperCase();
      const opts = { year: 'numeric', month: 'long', day: 'numeric' };
      return date.toLocaleDateString('en-US', opts).toUpperCase();
    } catch (e) {
      return (d || '').toUpperCase();
    }
  }

  function buildContinuousSlider(container, couplesData) {
    // cleanup old timers / handlers
    if (container._cleanup) container._cleanup();

    // determine visible count by viewport
    const visible = window.innerWidth <= 768 ? MOBILE_VISIBLE : DESKTOP_VISIBLE;

    // create cards (from all couples)
    const cards = couplesData.map((c, i) => createFilmCardFromData(c, i));
    const totalReal = cards.length;

    // If not enough cards to slide, render them centered and exit
    if (totalReal <= visible) {
      container.innerHTML = '';
      const row = document.createElement('div');
      row.style.display = 'flex';
      row.style.justifyContent = 'center';
      row.style.gap = `${GAP_PX}px`;
      cards.forEach(c => row.appendChild(c));
      container.appendChild(row);
      return;
    }

    // Reset container and track
    container.innerHTML = '';
    container.style.overflow = 'hidden';
    container.style.position = container.style.position || 'relative';
    container.style.display = 'block';

    const track = document.createElement('div');
    track.className = 'films-track';
    Object.assign(track.style, {
      display: 'flex',
      alignItems: 'stretch',
      gap: `${GAP_PX}px`,
      transition: `transform ${TRANSITION_MS}ms ease`,
      willChange: 'transform',
      boxSizing: 'border-box',
      padding: '0'
    });

    // append real cards
    cards.forEach(c => track.appendChild(c));
    // clone first N (visible) to the end
    for (let i = 0; i < visible; i++) {
      const clone = track.children[i].cloneNode(true);
      clone.classList.add('clone');
      track.appendChild(clone);
    }

    container.appendChild(track);

    // state
    let index = 0; // how many cards we've moved
    let cardWidth = 0;
    const totalWithClones = track.children.length; // totalReal + visible

    // sizing function: compute cardWidth so exactly `visible` cards fit the container width
    function recalc() {
      const containerWidth = container.clientWidth;
      // total gaps visible per view = (visible - 1) * GAP_PX
      const totalGaps = (visible - 1) * GAP_PX;
      cardWidth = (containerWidth - totalGaps) / visible;
      // apply width to each card
      Array.from(track.children).forEach(card => {
        card.style.flex = `0 0 ${cardWidth}px`;
      });
      // jump to current index (no transition) to avoid flicker
      track.style.transition = 'none';
      track.style.transform = `translateX(${-index * (cardWidth + GAP_PX)}px)`;
      // force reflow then restore transition
      void track.offsetWidth;
      track.style.transition = `transform ${TRANSITION_MS}ms ease`;
    }

    // move to next card
    function moveNext() {
      index++;
      track.style.transform = `translateX(${-index * (cardWidth + GAP_PX)}px)`;
    }

    // transition end: if we've reached clones, reset to corresponding original index
    track.addEventListener('transitionend', track._transitionHandler = () => {
      if (index >= totalReal) {
        // jump back to equivalent original index (index - totalReal)
        track.style.transition = 'none';
        index = index - totalReal;
        track.style.transform = `translateX(${-index * (cardWidth + GAP_PX)}px)`;
        void track.offsetWidth;
        track.style.transition = `transform ${TRANSITION_MS}ms ease`;
      }
    });

    // auto-play control
    function startAuto() {
      if (autoTimer) clearInterval(autoTimer);
      autoTimer = setInterval(moveNext, INTERVAL_MS);
    }
    function stopAuto() {
      if (autoTimer) {
        clearInterval(autoTimer);
        autoTimer = null;
      }
    }

    // pause on hover
    container.addEventListener('mouseenter', stopAuto);
    container.addEventListener('mouseleave', startAuto);

    // simple touch support
    let startX = 0, deltaX = 0;
    track.addEventListener('touchstart', e => {
      stopAuto();
      if (e.touches && e.touches[0]) startX = e.touches[0].clientX;
    }, {passive:true});
    track.addEventListener('touchmove', e => {
      if (e.touches && e.touches[0]) deltaX = e.touches[0].clientX - startX;
    }, {passive:true});
    track.addEventListener('touchend', () => {
      if (Math.abs(deltaX) > 40) {
        if (deltaX < 0) moveNext();
        else {
          // move prev
          index = Math.max(0, index - 1);
          track.style.transform = `translateX(${-index * (cardWidth + GAP_PX)}px)`;
        }
      }
      deltaX = 0;
      startAuto();
    });

    // handle resize (debounced) — rebuilds slider to adapt visible count changes
    function onResize() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        // rebuild using the original couples data saved on container
        if (container._origData) {
          buildContinuousSlider(container, container._origData);
        } else {
          // fallback: just recalc sizes
          recalc();
        }
      }, 220);
    }
    window.addEventListener('resize', onResize);

    // cleanup helper for next rebuild
    container._cleanup = () => {
      stopAuto();
      window.removeEventListener('resize', onResize);
      track.removeEventListener('transitionend', track._transitionHandler);
      // remove hover listeners (they are bound to container; recreate on rebuild so ok)
      container.removeEventListener('mouseenter', stopAuto);
      container.removeEventListener('mouseleave', startAuto);
      container._cleanup = null;
    };

    // initial sizing & start
    recalc();
    startAuto();
  }

  // Initialize on DOM load: fetch content.json and build slider
  document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.films-container');
    if (!container) return;

    fetch('content.json').then(r => {
      if (!r.ok) throw new Error('json fetch failed');
      return r.json();
    }).then(json => {
      const couples = Array.isArray(json.couples) ? json.couples : [];
      if (couples.length === 0) return;

      // store original data for rebuilds
      container._origData = couples;

      buildContinuousSlider(container, couples);
    }).catch(err => {
      // If JSON fetch fails, leave server-rendered PHP output (3 static cards) in place
      console.warn('Portfolio slider: failed loading content.json — keeping server-rendered markup.', err);
    });
  });
})();
</script>


</html>