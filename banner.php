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

        html, body {
            width: 100%;
            overflow-x: hidden;
        }

        .banner {
            width: 100%;
            height: 100vh;
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            overflow: hidden;
        }

        /* ===== SLIDER ===== */
        .slider-track {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            display: flex;
            width: 800%; /* 8 slides x 100% */
            transition: transform 1s ease-in-out;
            z-index: 0;
        }

        .slide {
            width: 12.5%; /* 100% / 8 slides */
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

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
            letter-spacing: -2%;
            text-transform: capitalize;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .subtitle {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 20px;
            line-height: 200%;
            letter-spacing: 2%;
            margin-bottom: 50px;
            opacity: 0.9;
        }

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
            content: '';
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
            content: '→';
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .cta-button:hover::after {
            transform: translateX(5px);
        }

        /* Background Text Effect */
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

        /* Responsive Design */
        @media (max-width: 1200px) {
            .content {
                margin-right: 3%;
                padding: 0 40px 0 20px;
            }

            .about-title {
                font-size: 96px;
            }

            .subtitle {
                font-size: 18px;
            }

            .background-text {
                font-size: 160px;
            }
        }

        @media (max-width: 768px) {
            .banner {
                height: 100vh;
                justify-content: center;
            }

            .content {
                text-align: center;
                margin-right: auto;
                max-width: 100%;
                padding: 0 20px;
            }

            .about-title {
                font-size: 64px;
                margin-bottom: 20px;
            }

            .subtitle {
                font-size: 16px;
                line-height: 180%;
                margin-bottom: 40px;
            }

            .cta-button {
                width: 250px;
                height: 60px;
                line-height: 58px;
                font-size: 14px;
            }

            .background-text {
                font-size: 100px;
            }

            /* make sure the full image is visible, no cropping, on mobile */
            .slide {
                background-size: contain;
                background-color: #000;
            }
        }

        @media (max-width: 480px) {
            .banner {
                height: 100vh;
            }

            .content {
                text-align: center;
                margin-right: auto;
                padding: 0 15px;
            }

            .about-title {
                font-size: 48px;
                letter-spacing: -1%;
            }

            .subtitle {
                font-size: 14px;
                line-height: 160%;
                margin-bottom: 30px;
            }

            .cta-button {
                width: 220px;
                height: 55px;
                line-height: 53px;
                font-size: 12px;
            }

            .background-text {
                font-size: 80px;
            }

            .slide {
                background-size: contain;
                background-color: #000;
            }
        }

        /* Additional styling for better visual hierarchy */
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
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650641/9V4A5560_cdvbia.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650646/9V4A7047_rleria.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650644/9V4A7691_kj6ymm.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650642/9V4A8186_xsyrmx.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650642/9V4A8066_l7oslh.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650636/9V4A9221_f6tw6g.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650636/9V4A8877_ynzdbv.jpg');"></div>
            <div class="slide" style="background-image:url('https://res.cloudinary.com/dodzqx4lh/image/upload/v1785650635/625A0248_i0ye7x.jpg');"></div>
        </div>

       
    </div>

    <script>
        const track = document.getElementById('sliderTrack');
        const totalSlides = 8;
        let currentIndex = 0;
        const intervalTime = 4000; // 4s per slide

        function goToSlide(index) {
            track.style.transition = 'transform 1s ease-in-out';
            track.style.transform = `translateX(-${index * (100 / totalSlides)}%)`;
        }

        function nextSlide() {
            currentIndex++;

            if (currentIndex >= totalSlides) {
                // jump back to slide 0 instantly, then resume sliding forward
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