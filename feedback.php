<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Photography Feedback</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&family=Raleway:wght@400&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f1eb;
        }


        /* =========================================================
           FEEDBACK CONTAINER
        ========================================================= */

        .feedback-container {
            padding: 100px 20px 50px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }


        /* =========================================================
           STATS SECTION
        ========================================================= */

        .stats-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 60px;
            margin-bottom: 80px;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 160px;
        }

        .circle-image {
            width: 170px;
            height: 170px;
            margin-bottom: 20px;
            object-fit: contain;
        }

        .stat-label {
            font-family: Oswald;
            font-weight: 300;
            font-size: 20px;
            line-height: 187%;
            letter-spacing: 8%;
            text-align: center;
            text-transform: uppercase;
            color: #666;
            max-width: 140px;
        }


        /* =========================================================
           TESTIMONIAL SECTION
        ========================================================= */

        .testimonial-section {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }


        /* Slider viewport */

        .testimonial-slider {
            position: relative;
            min-height: 260px;
        }

        .testimonial-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.8s ease;
        }

        .testimonial-slide.active {
            position: relative;
            opacity: 1;
            visibility: visible;
        }


        /* =========================================================
           QUOTE ICON
        ========================================================= */

        .quote-icon {
            font-size: 120px;
            color: #999;
            position: absolute;
            left: -80px;
            top: -20px;
            font-family: Rozha One;
        }


        /* =========================================================
           TESTIMONIAL TEXT
        ========================================================= */

        .testimonial-text {
            font-family: Raleway;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            letter-spacing: 2%;
            color: #333;
            margin-bottom: 30px;
            text-align: left;
            padding-left: 80px;
        }


        /* =========================================================
           CLIENT INFO
        ========================================================= */

        .client-info {
            text-align: left;
            padding-left: 80px;
        }

        .client-names {
            font-family: Oswald;
            font-size: 20px;
            line-height: 180%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: #333;
            margin-bottom: 5px;
        }

        .client-type {
            font-family: Oswald;
            font-weight: 400;
            font-size: 30px;
            line-height: 180%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: #666;
        }


        /* =========================================================
           SLIDER DOTS
        ========================================================= */

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 40px;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ccc;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slider-dot.active {
            background-color: #333;
        }


        /* =========================================================
           SLIDER ARROW BUTTONS
        ========================================================= */

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);

            width: 44px;
            height: 44px;

            border-radius: 50%;
            border: 1px solid #999;

            background-color: transparent;
            color: #333;

            font-size: 18px;
            font-family: Oswald;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;

            transition:
                background-color 0.3s ease,
                color 0.3s ease,
                transform 0.2s ease;

            z-index: 5;
        }

        .slider-arrow:hover {
            background-color: #333;
            color: #fff;
        }

        .slider-arrow.prev {
            left: -60px;
        }

        .slider-arrow.next {
            right: -20px;
        }


        /* =========================================================
           RESPONSIVE DESIGN
        ========================================================= */

        @media (max-width: 1024px) {

            .stats-section {
                gap: 40px;
            }

            .testimonial-text {
                font-size: 32px;
                padding-left: 60px;
            }

            .client-info {
                padding-left: 60px;
            }

            .quote-icon {
                left: -60px;
                font-size: 100px;
            }

            .slider-arrow.prev {
                left: -50px;
            }

            .slider-arrow.next {
                right: -10px;
            }
        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (max-width: 768px) {

            .stats-section {
                gap: 30px;
            }

            .circle-image {
                width: 100px;
                height: 100px;
            }

            .stat-label {
                font-size: 16px;
            }

            .testimonial-text {
                font-size: 20px;
                padding-left: 40px;
            }

            .client-info {
                padding-left: 40px;
            }

            .client-names {
                font-size: 26px;
            }

            .client-type {
                font-size: 26px;
            }

            .quote-icon {
                left: -40px;
                font-size: 80px;
                top: -10px;
            }

            .slider-arrow {
                width: 38px;
                height: 38px;
                font-size: 16px;
            }

            .slider-arrow.prev {
                left: -10px;
            }

            .slider-arrow.next {
                right: -10px;
            }
        }


        /* =========================================================
           MOBILE
           RESPONSIVE ARROWS
        ========================================================= */

        @media (max-width: 640px) {

            .stats-section {
                gap: 20px;
            }

            .circle-image {
                width: 80px;
                height: 80px;
            }

            .stat-label {
                font-size: 14px;
                max-width: 120px;
            }

            .testimonial-text {
                font-size: 20px;
                padding-left: 20px;
                text-align: center;
            }

            .client-info {
                padding-left: 20px;
                text-align: center;
            }

            .client-names {
                font-size: 22px;
            }

            .client-type {
                font-size: 22px;
            }

            .quote-icon {
                left: 50%;
                transform: translateX(-50%);
                top: -60px;
                font-size: 60px;
            }


            /* =========================================
               MOBILE ARROWS
            ========================================= */

            .slider-arrow {
                position: absolute;

                top: 50%;

                width: 42px;
                height: 42px;

                transform: translateY(-50%);

                margin: 0;

                border: 1px solid #999;
                border-radius: 50%;

                background: rgba(245, 241, 235, 0.95);

                color: #333;

                font-size: 18px;

                display: flex;
                align-items: center;
                justify-content: center;

                z-index: 10;

                cursor: pointer;

                -webkit-tap-highlight-color: transparent;

                transition:
                    background-color 0.2s ease,
                    color 0.2s ease,
                    transform 0.15s ease;
            }


            /* Previous arrow */

            .slider-arrow.prev {
                left: 0;
            }


            /* Next arrow */

            .slider-arrow.next {
                right: 0;
            }


            /* Touch feedback */

            .slider-arrow:active {
                transform: translateY(-50%) scale(0.94);
            }


            /* Mobile hover */

            .slider-arrow:hover {
                background: rgba(245, 241, 235, 0.95);
                color: #333;
            }
        }


        /* =========================================================
           SMALL MOBILE
        ========================================================= */

        @media (max-width: 480px) {

            .stats-section {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .stat-item {
                min-width: auto;
            }

            .testimonial-text {
                font-size: 20px;
            }

            .client-names {
                font-size: 20px;
            }

            .client-type {
                font-size: 20px;
            }


            /* Keep arrows comfortably inside the screen */

            .slider-arrow {
                width: 40px;
                height: 40px;
                font-size: 17px;
            }

            .slider-arrow.prev {
                left: 2px;
            }

            .slider-arrow.next {
                right: 2px;
            }
        }

    </style>
</head>


<body>

    <div class="feedback-container">

        <!-- =====================================================
             TESTIMONIAL SECTION
        ====================================================== -->

        <div class="testimonial-section">


            <!-- PREVIOUS ARROW -->

            <button
                class="slider-arrow prev"
                id="prevArrow"
                aria-label="Previous testimonial"
            >
                &#10094;
            </button>


            <!-- NEXT ARROW -->

            <button
                class="slider-arrow next"
                id="nextArrow"
                aria-label="Next testimonial"
            >
                &#10095;
            </button>


            <!-- =================================================
                 TESTIMONIAL SLIDER
            ================================================== -->

            <div
                class="testimonial-slider"
                id="testimonialSlider"
            >


                <!-- TESTIMONIAL 1 -->

                <div class="testimonial-slide active">

                    <div class="testimonial-text">

                        We had an amazing experience with A Little Man for our wedding in Jabalpur! Chirayu and his team were warm, professional, and so easy to work with. The photography was stunning, and the cinematography felt like a beautiful movie, we'll cherish it forever. Highly recommended!

                    </div>

                    <div class="client-info">

                        <div class="client-names">
                            <b>- Simran Arora </b> / Happy Couple
                        </div>

                    </div>

                </div>


                <!-- TESTIMONIAL 2 -->

                <div class="testimonial-slide">

                    <div class="testimonial-text">

                        Thank-you to the whole Little Man photography team for giving us exemplary memories to cherish for lifetime :) The immense patience and dedication you have towards your clients is unmatched! Guys, if you are looking for a photographer for your wedding, trust me your search has ended. Their whole team is very friendly, very approachable and go to lengths to get that perfect shot for you !! The best thing which I loved about them were they did not only focused on getting great shots of the couple but also captured beautiful memories of family and friends. Thank you so much guys ❤️

                    </div>

                    <div class="client-info">

                        <div class="client-names">
                            <b>- Yamini Singh </b> / Happy Couple
                        </div>

                    </div>

                </div>


                <!-- TESTIMONIAL 3 -->

                <div class="testimonial-slide">

                    <div class="testimonial-text">

                        'The Little Man' but doing 'Very Great' job of capturing amazing pictures, videos, editing and the final presentation of the most important event ie. The Wedding 🥰🥰 All superb. He has a perfect team which makes you extremely comfortable and you feel like a family with them. Highly supportive for suggesting the poses. Thank you so much Chirayu and Shashank for turning the precious moments of my daughter’s wedding into the cherished ones through your albums and video 🥰🥰

                    </div>

                    <div class="client-info">

                        <div class="client-names">
                            <b>- Upma Bisen </b> / Happy Couple
                        </div>

                    </div>

                </div>


                <!-- TESTIMONIAL 4 -->

                <div class="testimonial-slide">

                    <div class="testimonial-text">

                        Superb clicks, edits and vision for creating the perfect memory on your special day... all our events r incomplete without A Little Man and his team... special mention to Shashank, Chirayu and Ashwin who constantly do their best to give us the best memories of our events and functions as possible... never a disappointing experience...

                    </div>

                    <div class="client-info">

                        <div class="client-names">
                            <b>- Mallika Shetty</b> / Happy Couple
                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 SLIDER DOTS
            ================================================== -->

            <div
                class="slider-dots"
                id="sliderDots"
            ></div>

        </div>

    </div>


    <!-- =========================================================
         JAVASCRIPT
    ========================================================= -->

    <script>

        (function() {

            const slides =
                document.querySelectorAll('.testimonial-slide');

            const dotsContainer =
                document.getElementById('sliderDots');

            const prevArrow =
                document.getElementById('prevArrow');

            const nextArrow =
                document.getElementById('nextArrow');


            let currentSlide = 0;

            const testimonialIntervalTime = 5000;

            let testimonialAutoSlideTimer;


            /* =====================================================
               GO TO SLIDE
            ===================================================== */

            function goToSlide(index) {

                slides[currentSlide]
                    .classList
                    .remove('active');

                dots[currentSlide]
                    .classList
                    .remove('active');


                currentSlide =
                    (index + slides.length) % slides.length;


                slides[currentSlide]
                    .classList
                    .add('active');

                dots[currentSlide]
                    .classList
                    .add('active');

            }


            /* =====================================================
               NEXT SLIDE
            ===================================================== */

            function nextSlide() {

                goToSlide(currentSlide + 1);

            }


            /* =====================================================
               PREVIOUS SLIDE
            ===================================================== */

            function prevSlide() {

                goToSlide(currentSlide - 1);

            }


            /* =====================================================
               RESTART AUTO SLIDE
            ===================================================== */

            function restartAutoSlide() {

                clearInterval(testimonialAutoSlideTimer);

                testimonialAutoSlideTimer =
                    setInterval(
                        nextSlide,
                        testimonialIntervalTime
                    );

            }


            /* =====================================================
               BUILD DOTS
            ===================================================== */

            if (dotsContainer) {

                slides.forEach((_, i) => {

                    const dot =
                        document.createElement('div');

                    dot.classList.add('slider-dot');


                    if (i === 0) {
                        dot.classList.add('active');
                    }


                    dot.addEventListener(
                        'click',
                        () => {

                            goToSlide(i);

                            restartAutoSlide();

                        }
                    );


                    dotsContainer.appendChild(dot);

                });

            }


            const dots =
                document.querySelectorAll('.slider-dot');


            /* =====================================================
               NEXT ARROW
            ===================================================== */

            if (nextArrow) {

                nextArrow.addEventListener(
                    'click',
                    () => {

                        nextSlide();

                        restartAutoSlide();

                    }
                );

            }


            /* =====================================================
               PREVIOUS ARROW
            ===================================================== */

            if (prevArrow) {

                prevArrow.addEventListener(
                    'click',
                    () => {

                        prevSlide();

                        restartAutoSlide();

                    }
                );

            }


            /* =====================================================
               START AUTO SLIDE
            ===================================================== */

            restartAutoSlide();

        })();

    </script>

</body>
</html>