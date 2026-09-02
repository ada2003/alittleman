<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Power Duo - About Section</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&family=Raleway:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* =========================================================
           RESET
        ========================================================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }


        /* =========================================================
           ABOUT SECTION
        ========================================================= */
        .about-section {
            background-color: #F6EFE3A3;
            min-height: 100vh;

            display: flex;
            align-items: center;

            padding: 80px 0;

            position: relative;
            overflow: hidden;
        }


        /* =========================================================
           MAIN CONTAINER
        ========================================================= */
        .container {
            max-width: 1400px;
            width: 100%;

            margin: 0 auto;
            padding: 0 20px;

            display: flex;
            align-items: center;

            gap: 100px;
        }


        /* =========================================================
           IMAGE
        ========================================================= */
        .image-container {
            flex: 1;
            position: relative;
            max-width: 844px;
        }

        .duo-image {
            width: 100%;
            height: auto;
            max-width: 844px;

            opacity: 1;

            border-radius: 20px;

            display: block;
        }


        /* =========================================================
           CONTENT
        ========================================================= */
        .content-container {
            flex: 1;
            padding-left: 50px;
        }


        /* =========================================================
           TITLE
        ========================================================= */
        .main-title {
            font-family: 'Oswald', sans-serif;

            font-weight: 400;
            font-size: 85px;
            line-height: 104%;

            letter-spacing: 3%;

            text-transform: uppercase;

            color: black;

            margin-bottom: 30px;

            text-align: left;
        }


        /* =========================================================
           DESCRIPTION
        ========================================================= */
        .description {
            font-family: 'Raleway', sans-serif;

            font-weight: 400;
            font-size: 20px;
            line-height: 187%;

            letter-spacing: 2%;

            color: #333;

            margin-bottom: 40px;

            max-width: 500px;
        }


        /* =========================================================
           KNOW MORE BUTTON
        ========================================================= */
        .know-more-btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 10px;

            background: transparent;

            padding: 15px 30px;

            font-family: 'Raleway', sans-serif;

            font-weight: 600;
            font-size: 16px;

            text-transform: uppercase;
            letter-spacing: 1px;

            color: black;

            cursor: pointer;

            transition: all 0.3s ease;

            text-decoration: none;
        }

        .know-more-btn:hover {
            background: black;
            color: white;
        }

        .know-more-btn::after {
            content: "→";

            font-size: 18px;

            transition: transform 0.3s ease;
        }

        .know-more-btn:hover::after {
            transform: translateX(5px);
        }


        /* =========================================================
           TABLET / SMALL LAPTOP
        ========================================================= */
        @media (max-width: 1200px) {

            .container {
                gap: 60px;
            }

            .main-title {
                font-size: 70px;
            }

            .content-container {
                padding-left: 30px;
            }
        }


        /* =========================================================
           TABLET
        ========================================================= */
        @media (max-width: 992px) {

            .about-section {
                padding: 70px 0;
            }

            .container {
                flex-direction: column;

                gap: 50px;

                text-align: center;

                padding: 0 20px;
            }

            .image-container {
                width: 100%;
                max-width: 844px;
            }

            .duo-image {
                width: 100%;
                margin: 0 auto;
            }

            .content-container {
                width: 100%;

                padding-left: 0;

                text-align: center;

                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .main-title {
                font-size: 60px;

                text-align: center;

                margin-bottom: 30px;
            }

            .description {
                max-width: 600px;

                margin: 0 auto 40px;

                text-align: center;
            }

            .know-more-btn {
                display: inline-flex;

                align-items: center;
                justify-content: center;
            }
        }


        /* =========================================================
           MOBILE
        ========================================================= */
        @media (max-width: 768px) {

            .about-section {
                min-height: auto;

                padding: 60px 0;
            }

            .container {
                width: 100%;

                padding: 0 15px;

                gap: 40px;

                text-align: center;
            }

            .image-container {
                width: 100%;
            }

            .duo-image {
                width: 100%;

                border-radius: 20px;

                margin: 0 auto;
            }

            .content-container {
                width: 100%;

                padding: 0 10px;

                text-align: center;

                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .main-title {
                font-size: 50px;

                line-height: 110%;

                text-align: center;

                margin-bottom: 25px;

                width: 100%;
            }

            .description {
                width: 100%;

                max-width: 600px;

                font-size: 18px;

                line-height: 160%;

                text-align: center;

                margin: 0 auto 35px;
            }

            .know-more-btn {
                padding: 12px 25px;

                font-size: 14px;

                display: inline-flex;

                align-items: center;
                justify-content: center;

                margin: 0 auto;
            }
        }


        /* =========================================================
           SMALL MOBILE
        ========================================================= */
        @media (max-width: 576px) {

            .about-section {
                padding: 50px 0;
            }

            .container {
                padding: 0 15px;

                gap: 30px;
            }

            .content-container {
                width: 100%;

                padding: 0 10px;

                text-align: center;

                align-items: center;
            }

            .main-title {
                font-size: 40px;

                line-height: 110%;

                text-align: center;

                width: 100%;

                margin-bottom: 20px;
            }

            .description {
                width: 100%;

                max-width: 100%;

                font-size: 16px;

                line-height: 160%;

                text-align: center;

                margin: 0 auto 30px;
            }

            .know-more-btn {
                padding: 10px 20px;

                font-size: 13px;

                margin: 0 auto;
            }
        }


        /* =========================================================
           VERY SMALL MOBILE
        ========================================================= */
        @media (max-width: 480px) {

            .about-section {
                padding: 40px 0;
            }

            .container {
                padding: 0 12px;

                gap: 30px;
            }

            .image-container {
                width: 100%;
            }

            .duo-image {
                width: 100%;

                border-radius: 15px;
            }

            .content-container {
                width: 100%;

                padding: 0 8px;

                text-align: center;

                align-items: center;
            }

            .main-title {
                font-size: 35px;

                line-height: 110%;

                text-align: center;

                width: 100%;
            }

            .description {
                width: 100%;

                font-size: 15px;

                line-height: 160%;

                text-align: center;

                margin-bottom: 25px;
            }

            .know-more-btn {
                font-size: 12px;

                padding: 10px 18px;

                margin: 0 auto;
            }
        }
    </style>
</head>


<body>

    <!-- =========================================================
         ABOUT SECTION
    ========================================================= -->

    <section class="about-section">

        <div class="container">

            <!-- IMAGE -->
            <div class="image-container">

                <img
                    src="./assets/aboutss.png"
                    alt="The Power Duo"
                    class="duo-image"
                >

            </div>


            <!-- CONTENT -->
            <div class="content-container">

                <h2 class="main-title">
                    The Power Duo
                </h2>

                <p class="description">
                    We're two brothers with a camera and a shared love for storytelling.
                    Our goal? To capture what it feels like to be in love — not just what
                    it looks like. Raw. Honest. Poetic.
                </p>

                <a
                    href="https://www.instagram.com/accounts/login/?next=%2Falittleman_%2F&source=omni_redirect"
                    class="know-more-btn"
                >
                    Know More
                </a>

            </div>

        </div>

    </section>

</body>
</html>