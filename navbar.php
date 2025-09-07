<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
       <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="logo">
             <a href="./index.php">
    <img src="./assets/logo.jpg" alt="A Little Man Logo">
  </a>
            </div>

            <!-- Navigation Menu -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./portfolio.php" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#book" class="nav-link">Book Now</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/917741975188" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#" class="social-icon" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon" aria-label="Pinterest">
                    <i class="fab fa-pinterest"></i>
                </a>
                <a href="#" class="social-icon" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle functionality
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenuToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a nav link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar-container')) {
                mobileMenuToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });

       
    </script>
</body>

</html>