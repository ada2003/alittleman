<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wedding Photography Banner</title>

    <link href="https://fonts.googleapis.com/css2?family=Rozha+One:wght@400&family=Raleway:wght@400&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }


        /* =========================================================
           BANNER
        ========================================================= */

        .banner {
            width: 100%;
            height: calc(100vh - 70px);
            min-height: 600px;

            position: relative;

            display: flex;
            align-items: center;
            justify-content: flex-end;

            overflow: hidden;
        }


        /* =========================================================
           SLIDER
        ========================================================= */

        .slider-track {
            position: absolute;

            top: 0;
            left: 0;

            width: 800%;
            height: 100%;

            display: flex;

            transition: transform 1s ease-in-out;

            z-index: 0;
        }


        .slide {
            width: 12.5%;
            height: 100%;

            flex-shrink: 0;

            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }


        /* =========================================================
           OVERLAY
        ========================================================= */

        .banner::before {
            content: "";

            position: absolute;

            inset: 0;

            background: rgba(0, 0, 0, 0.4);

            z-index: 1;

            pointer-events: none;
        }


        /* =========================================================
           CONTENT
        ========================================================= */

        .content {
            position: relative;

            z-index: 2;

            text-align: left;

            color: white;

            max-width: 600px;

            padding: 0 60px 0 20px;

            margin-right: 5%;
        }


        .about-title {
            font-family: 'Rozha One', serif;

            font-weight: 400;

            font-size: 70px;

            line-height: 100%;

            letter-spacing: -2px;

            text-transform: capitalize;

            margin-bottom: 30px;

            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }


        .subtitle {
            font-family: 'Raleway', sans-serif;

            font-weight: 400;

            font-size: 20px;

            line-height: 200%;

            letter-spacing: 2px;

            margin-bottom: 50px;

            opacity: 0.9;
        }


        /* =========================================================
           BUTTON
        ========================================================= */

        .cta-button {
            display: inline-block;

            width: 279px;
            height: 67px;

            border: 1px solid white;

            background: transparent;

            color: white;

            font-family: 'Raleway', sans-serif;

            font-size: 16px;

            font-weight: 400;

            letter-spacing: 2px;

            text-transform: uppercase;

            text-decoration: none;

            line-height: 65px;

            text-align: center;

            transition: all 0.3s ease;

            position: relative;

            overflow: hidden;
        }


        .cta-button::before {
            content: "";

            position: absolute;

            top: 0;
            left: -100%;

            width: 100%;
            height: 100%;

            background: white;

            transition: left 0.3s ease;

            z-index: -1;
        }


        .cta-button:hover::before {
            left: 0;
        }


        .cta-button:hover {
            color: black;
        }


        .cta-button::after {
            content: "→";

            margin-left: 10px;

            transition: transform 0.3s ease;
        }


        .cta-button:hover::after {
            transform: translateX(5px);
        }


        /* =========================================================
           BACKGROUND TEXT
        ========================================================= */

        .background-text {
            position: absolute;

            bottom: 0;

            left: 0;
            right: 0;

            font-family: 'Rozha One', serif;

            font-size: 200px;

            font-weight: 400;

            color: rgba(255, 255, 255, 0.05);

            text-transform: uppercase;

            z-index: 1;

            text-align: center;

            line-height: 0.8;

            pointer-events: none;

            overflow: hidden;
        }


        /* =========================================================
           TABLET
        ========================================================= */

        @media (max-width: 1200px) {

            .content {
                margin-right: 3%;
                padding: 0 40px 0 20px;
            }

            .about-title {
                font-size: 80px;
            }

            .subtitle {
                font-size: 18px;
            }

            .background-text {
                font-size: 160px;
            }
        }


        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 768px) {

            /*
             * Navbar is above this banner.
             *
             * Do NOT use 100vh here.
             *
             * 16:9 gives a proper large landscape banner.
             */

            .banner {
                width: 100%;

                height: auto;

                min-height: 0;

                aspect-ratio: 16 / 9;

                position: relative;

                display: flex;

                align-items: center;

                justify-content: center;

                overflow: hidden;
            }


            .slider-track {
                position: absolute;

                top: 0;
                left: 0;

                width: 800%;

                height: 100%;

                display: flex;
            }


            .slide {
                width: 12.5%;

                height: 100%;

                flex-shrink: 0;

                /*
                 * FILL THE ENTIRE BANNER.
                 *
                 * No black space.
                 * No gray space.
                 */

                background-size: cover;

                background-position: center center;

                background-repeat: no-repeat;
            }


            .banner::before {
                background: rgba(0, 0, 0, 0.35);
            }


            .content {
                width: 100%;

                max-width: 100%;

                padding: 0 20px;

                margin: 0;

                text-align: center;
            }


            .about-title {
                font-size: 58px;

                margin-bottom: 20px;
            }


            .subtitle {
                font-size: 15px;

                line-height: 170%;

                margin-bottom: 30px;
            }


            .cta-button {
                width: 230px;

                height: 58px;

                line-height: 56px;

                font-size: 13px;
            }


            .background-text {
                font-size: 90px;
            }
        }


        /* =========================================================
           SMALL PHONES
        ========================================================= */

      @media (max-width: 480px) {

    .banner {
        width: 100%;
        height:80vw;
        min-height: 0;
        aspect-ratio: auto;
        overflow: hidden;
        position: relative;
    }

    .slider-track {
        width: 800%;
        height: 100%;
    }

    .slide {
        width: 12.5%;
        height: 100%;
        flex-shrink: 0;

        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
}

        /* =========================================================
           VERY SMALL PHONES
        ========================================================= */

        @media (max-width: 360px) {

            .banner {
                height: 62vw;

                aspect-ratio: auto;
            }


            .about-title {
                font-size: 40px;
            }


            .subtitle {
                font-size: 12px;
            }


            .cta-button {
                width: 195px;

                height: 50px;

                line-height: 48px;

                font-size: 10px;
            }


            .background-text {
                font-size: 60px;
            }
        }


        /* =========================================================
           ANIMATIONS
        ========================================================= */

        .content {
            animation: fadeInUp 1s ease-out;
        }


        @keyframes fadeInUp {

            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .about-title {
            animation: fadeInUp 1s ease-out 0.2s both;
        }


        .subtitle {
            animation: fadeInUp 1s ease-out 0.4s both;
        }


        .cta-button {
            animation: fadeInUp 1s ease-out 0.6s both;
        }

    </style>
</head>


<body>

    <div class="banner">

        <div class="slider-track" id="sliderTrack">

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650641/9V4A5560_cdvbia.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650646/9V4A7047_rleria.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650644/9V4A7691_kj6ymm.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650642/9V4A8186_xsyrmx.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650642/9V4A8066_l7oslh.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650636/9V4A9221_f6tw6g.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650636/9V4A8877_ynzdbv.jpg');">
            </div>

            <div
                class="slide"
                style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650635/625A0248_i0ye7x.jpg');">
            </div>

        </div>

    </div>


    <script>

        const track = document.getElementById('sliderTrack');

        const totalSlides = 8;

        let currentIndex = 0;

        const intervalTime = 4000;


        function goToSlide(index) {

            track.style.transition = 'transform 1s ease-in-out';

            track.style.transform =
                `translateX(-${index * (100 / totalSlides)}%)`;
        }


        function nextSlide() {

            currentIndex++;

            if (currentIndex >= totalSlides) {

                currentIndex = 0;

                setTimeout(() => {

                    track.style.transition = 'none';

                    track.style.transform = 'translateX(0%)';

                }, 1000);
            }

            goToSlide(currentIndex);
        }


        setInterval(nextSlide, intervalTime);

    </script>

</body>
</html>