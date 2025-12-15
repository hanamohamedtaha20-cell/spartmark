<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SparkMart</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="images/logo.png">
    <script src="https://kit.fontawesome.com/b4b340cff6.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <div class="logo">SparkMart</div>
            <div class="search-container">
                     <input type="text" placeholder="Search products...">
                      <button><i class="fa-solid fa-magnifying-glass"></i></button>
                 </div>
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="#">Categories</a>
                    <ul class="dropdown-menu">
                        <li><a href="laptops.html" target="_blank">Laptops</a></li>
                        <li><a href="smartphones.html" target="_blank">Smartphones</a></li>
                        <li><a href="appliances.html" target="_blank">Home Appliances</a></li>
                        
                    </ul>
                </li>
                
                <li class="user-menu">
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                    <ul class="user-dropdown-menu">
                        <li><a href="profile.html" target="_blank">My Profile</a></li>
                        <li><a href="settings.html" target="_blank">Settings</a></li>
                        <li><a href="login.html" target="_blank">Login</a></li>
                        <li><a href="signup.html" target="_blank">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main Images Section -->
    <section class="center-images">
        <a href="laptops.html" target="_blank">
            <div class="box">
                <img src="lap.jpg" alt="Laptops">
                <p>Laptops</p>
            </div>
        </a>

        <a href="smartphones.html" target="_blank">
            <div class="box">
                <img src="phone.jpeg" alt="Smartphones">
                <p>Smartphones</p>
            </div>
        </a>

        <a href="appliances.html" target="_blank">
            <div class="box">
                <img src="devices.jpeg" alt="Home Appliances">
                <p>Home Appliances</p>
            </div>
        </a>

    </section>

<footer>
    <div class="footer">

        <div class="footer-list">
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
        </div>

        <div class="footer-list">
            <ul>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Social Media Icons -->
        <div class="sm-icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-tiktok"></i>
        </div>

    </div>
</footer>


</body>
</html>