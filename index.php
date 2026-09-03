<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Little Man </title>
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
/* ---------- CONFIG ---------- */
const DEFAULT_DESKTOP_ITEMS = 3;
const DEFAULT_MOBILE_ITEMS = 1;
const SLIDE_INTERVAL_MS = 3000;    // time between moves
const TRANSITION_MS = 600;         // CSS transition duration

/* ---------- HELPERS (unchanged) ---------- */
function formatDate(dateString) {
  const date = new Date(dateString);
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  return date.toLocaleDateString('en-US', options).toUpperCase();
}

function createFilmCard(couple, index) {
  const filmCard = document.createElement('div');
  filmCard.className = 'film-card';
  filmCard.style.boxSizing = 'border-box';
  filmCard.style.flex = '0 0 auto';
  filmCard.style.margin = '0'; // let container handle gap
  filmCard.style.animationDelay = `${(index + 1) * 0.05}s`;

  filmCard.innerHTML = `
    <div class="film-image-container">
      <img src="${couple.cardImage}"
           alt="${couple.coupleName} Film"
           class="film-image loading"
           onload="this.classList.remove('loading')"
           onerror="this.src='https://images.unsplash.com/photo-1606800052052-a08af7148866?w=400&h=600&fit=crop&crop=faces'">
      <div class="film-overlay">
        <button class="view-film-btn" onclick="viewFilm('${couple.youtubeLink}')" >View Film →</button>
      </div>
    </div>
    <div class="film-details">
      <div class="film-title">${couple.coupleName}</div>
      <div class="film-date">${formatDate(couple.date)}</div>
    </div>
  `;
  return filmCard;
}

function viewFilm(youtubeLink) {
  window.open(youtubeLink, '_blank');
}

/* ---------- CONTINUOUS SLIDER IMPLEMENTATION ---------- */
let autoSlideTimer = null;
let resizeTimer = null;

async function loadCouples() {
  const filmsContainer = document.getElementById('filmsContainer');

  try {
    const response = await fetch('./content.json');
    if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
    const jsonData = await response.json();

    const filmCards = jsonData.couples.map((couple, index) => createFilmCard(couple, index));
    buildContinuousSlider(filmsContainer, filmCards);
  } catch (error) {
    console.error('Error loading couples data:', error);
    filmsContainer.innerHTML = `<div class="error-message">Error loading couples data. Please try again later.</div>`;
  }
}

function buildContinuousSlider(container, cardNodes) {
  // clear any previous timer
  if (autoSlideTimer) {
    clearInterval(autoSlideTimer);
    autoSlideTimer = null;
  }
  // determine items visible
  const itemsPerView = window.innerWidth <= 768 ? DEFAULT_MOBILE_ITEMS : DEFAULT_DESKTOP_ITEMS;

  // reset container
  container.innerHTML = '';
  container.style.overflow = 'hidden';
  container.style.position = container.style.position || 'relative';
  container.style.display = 'block';
  container.style.padding = '10px 0';

  // create track
  const track = document.createElement('div');
  track.className = 'films-track';
  Object.assign(track.style, {
    display: 'flex',
    alignItems: 'stretch',
    gap: '40px',
    transition: `transform ${TRANSITION_MS}ms ease`,
    willChange: 'transform',
    boxSizing: 'border-box'
  });

  // append real cards
  cardNodes.forEach(node => track.appendChild(node));

  const totalReal = cardNodes.length;

  // if less or equal to itemsPerView -> center and stop (no sliding)
  if (totalReal <= itemsPerView) {
    // set each card flex-basis so they fit
    Array.from(track.children).forEach(card => {
      card.style.flex = `0 0 ${100 / itemsPerView}%`;
    });
    container.appendChild(track);
    track.style.justifyContent = 'center';
    return;
  }

  // clone first `itemsPerView` cards to the end for seamless loop
  for (let i = 0; i < itemsPerView; i++) {
    const clone = track.children[i].cloneNode(true);
    clone.classList.add('clone');
    track.appendChild(clone);
  }

  container.appendChild(track);

  // state
  let index = 0; // how many card steps moved (0 = at start)
  let cardWidth = 0; // px
  const totalCardsWithClones = track.children.length;

  // function to recalc sizing and apply
  function recalcSizes() {
    // measure container width after inserted
    const containerWidth = container.clientWidth;
    // card width equals containerWidth / itemsPerView (we want exactly itemsPerView visible)
    cardWidth = (containerWidth + 40) / itemsPerView; 
    // note: adding gap compensation (40 is gap used above) so visual alignment keeps; adjust if you change gap.
    // set each card width
    Array.from(track.children).forEach(card => {
      card.style.flex = `0 0 ${cardWidth}px`;
    });
    // jump to the correct transform for current index (no transition)
    track.style.transition = 'none';
    track.style.transform = `translateX(${-index * cardWidth}px)`;
    // force reflow then restore transition
    void track.offsetWidth;
    track.style.transition = `transform ${TRANSITION_MS}ms ease`;
  }

  // move one card
  function moveNext() {
    index++;
    track.style.transform = `translateX(${-index * cardWidth}px)`;
  }

  // on transition end: if we've moved into clones, reset back to original
  track.addEventListener('transitionend', () => {
    if (index >= totalReal) {
      // we've reached the cloned area; instantly jump back to index - totalReal
      track.style.transition = 'none';
      index = index - totalReal; // typically index becomes 0
      track.style.transform = `translateX(${-index * cardWidth}px)`;
      // force reflow then re-enable transition
      void track.offsetWidth;
      track.style.transition = `transform ${TRANSITION_MS}ms ease`;
    }
  });

  // start auto sliding
  function startAuto() {
    if (autoSlideTimer) clearInterval(autoSlideTimer);
    autoSlideTimer = setInterval(() => {
      moveNext();
    }, SLIDE_INTERVAL_MS);
  }

  // pause auto sliding
  function stopAuto() {
    if (autoSlideTimer) {
      clearInterval(autoSlideTimer);
      autoSlideTimer = null;
    }
  }

  // pause on hover
  container.addEventListener('mouseenter', stopAuto);
  container.addEventListener('mouseleave', startAuto);

  // handle resize (debounced)
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      // rebuild to ensure clones count matches itemsPerView change
      const newCards = Array.from(container.querySelectorAll('.film-card')).filter(c => !c.classList.contains('clone'));
      // We want the original cardNodes (not clones). Easier: rebuild entirely from original data:
      // call loadCouples again to fetch and rebuild (safe and simple)
      fetch('./content.json').then(r => r.json()).then(jsonData => {
        const freshCards = jsonData.couples.map((couple, idx) => createFilmCard(couple, idx));
        buildContinuousSlider(container, freshCards);
      }).catch(err => console.warn('Could not rebuild slider on resize:', err));
    }, 250);
  });

  // initial sizing and start
  recalcSizes();
  startAuto();
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