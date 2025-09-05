<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Power Duo - About Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&family=Raleway:wght@400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }

        .about-section {
            background-color: #F6EFE3A3;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            gap: 100px;
            width: 100%;
        }

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
            
        }

        .content-container {
            flex: 1;
            padding-left: 50px;
        }

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

        .know-more-btn {
            display: inline-flex;
            align-items: center;
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

        /* Responsive Design */
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

        @media (max-width: 992px) {
            .container {
                flex-direction: column;
                gap: 50px;
                text-align: center;
            }
            
            .content-container {
                padding-left: 0;
            }
            
            .main-title {
                font-size: 60px;
            }
            
            .description {
                max-width: 600px;
                margin: 0 auto 40px;
            }
        }

        @media (max-width: 768px) {
            .about-section {
                padding: 60px 0;
            }
            
            .container {
                padding: 0 15px;
                gap: 40px;
            }
            
            .main-title {
                font-size: 50px;
            }
            
            .description {
                font-size: 18px;
                line-height: 160%;
            }
            
            .know-more-btn {
                padding: 12px 25px;
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .main-title {
                font-size: 40px;
                line-height: 110%;
            }
            
            .description {
                font-size: 16px;
                margin-bottom: 30px;
            }
            
            .know-more-btn {
                padding: 10px 20px;
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            .about-section {
                padding: 40px 0;
            }
            
            .main-title {
                font-size: 35px;
            }
            
            .container {
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <section class="about-section">
        <div class="container">
            <div class="image-container">
                <!-- Replace this src with your actual PNG file path -->
                <img src="./assets/about.png" alt="The Power Duo" class="duo-image">
            </div>
            
            <div class="content-container">
                <h2 class="main-title">The Power Duo</h2>
                <p class="description">
                    We're two brothers with a camera and a shared love for storytelling. Our goal? To capture what it feels like to be in love — not just what it looks like. Raw. Honest. Poetic.
                </p>
                <a href="#" class="know-more-btn">Know More</a>
            </div>
        </div>
    </section>
</body>
</html>