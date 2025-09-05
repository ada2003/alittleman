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
            <a href="#" class="explore-btn">Explore Our Work →</a>
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
                                <img src="<?php echo $cardImage; ?>" alt="<?php echo $name; ?> Card Image" class="film-image">
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
</html>