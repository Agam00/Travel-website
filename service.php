<?php
// Start the session
session_start();

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    // If user is not logged in, redirect to login page
    header("Location: login_html.php");
    exit(); // Ensure that script execution stops here to prevent further output
}

// If the user is logged in, proceed with displaying the welcome message
$username = $_SESSION['username'];
echo "Welcome, $username! You are logged in.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    <!-- swiper css link  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link   -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link  -->

    <link rel="stylesheet" href="style.css">


</head>
<body>
<!-- header section start  -->
<section class="header">
     
    <a href="home.php" class="logo">a&a travels</a>

    <nav class="navbar"> 
        <a href="home.php">home</a>
        <a href="service.php">service</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="logout.php">logout</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

<!-- header section start -->

<div class= "heading" style="background:url(images/service.jpg) no-repeat; height: 500px;">
    
</div> 

<!-- header section end  -->

<!-- service section  start -->

<section class="servicess">
    <h1 class="heading-title" style="color: black; font-size: 6rem;">Our Services</h1>

    <div class="boxx-container">
        <div class="boxx">
            <img src="images/adventure.png" alt="">
            <h3>Adventure</h3>
            <p>Embark on exhilarating journeys filled with adrenaline-pumping activities, breathtaking landscapes, and unforgettable experiences.</p>
        </div>
        <div class="boxx">
            <img src="images/tour-guide.png" alt="">
            <h3>Tour Guide</h3>
            <p> Let our knowledgeable guides lead you through hidden gems, cultural wonders, and off-the-beaten-path adventures, ensuring every step of your journey is filled with insight and discovery.</p>
        </div>
        <div class="boxx">
            <img src="images/trekking.png" alt="">
            <h3>Trekking</h3>
            <p>Traverse rugged terrain, conquer majestic peaks, and immerse yourself in the raw beauty of nature on our unforgettable trekking expeditions.</p>
        </div>
        <div class="boxx">
            <img src="images/map.png" alt="">
            <h3>Map</h3>
            <p>Navigate your way through untamed landscapes and undiscovered treasures with our detailed maps, crafted to guide you on your adventure every step of the way. </p>
        </div>
        <div class="boxx">
            <img src="images/off-road.png" alt="">
            <h3>Off Road</h3>
            <p>Blaze new trails, explore untouched wilderness, and embrace the thrill of the unknown as you journey off-road to discover hidden wonders.</p>
        </div>
        <div class="boxx">
            <img src="images/camping.png" alt="">
            <h3>Camping</h3>
            <p>Escape the hustle and bustle of everyday life and reconnect with nature on our immersive camping experiences, where serenity and adventure await beneath the open sky.</p>
        </div>
        
    </div>
</section>

<!-- service section end  -->

<!-- footer section start  -->

<section class="footer">

    <div class="box-container">
    
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            <a href="admin_orders.php"> <i class="fas fa-angle-right"></i>admin</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 9876504857</a>
            <a href="#"> <i class="fas fa-phone"></i> +91 7973161992</a>
            <a href="#"> <i class="fas fa-envelope"></i> a&atravels@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> amritsar, punjab - 143001</a>
        </div>
    
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
        

    </div>

    <div class="credit"> created by <span> mr. arpit and mr. agam</span> | all right reserved! </div>

</section>

<!-- footer section ends  -->







<!-- swiper js link  -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
