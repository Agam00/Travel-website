
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
    <title>about</title>
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

<!-- header section end  -->

<div class= "heading" style="background:url(images/about.jpg) no-repeat; height: 500px;">
    <!-- <h1>about us</h1> -->
</div> 

<!-- about section start  -->

<section class="about">

  <div class="image">
     <img src="images/aboutus.jpg" alt="">
  </div>


  <div class="content">
    <h3>why choose us?</h3>
    <p>When you travel with us, you're not just a customer - you're part of our global family. From the moment you inquire about a trip to the final farewell, our team is here to support you every step of the way. Whether you're planning a solo backpacking adventure, a romantic honeymoon getaway, or a multi-generational family vacation, we'll tailor your experience to match your interests, preferences, and budget.</p>
    
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
        </div>
        <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
        </div>
        <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
        </div>
    </div>
    
  </div>



</section>






<!-- about section end  -->

<!-- reviews section start  -->

<section class="reviews">

    <h1 class="heading-title">client reviews</h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"My trip to Manali was nothing short of magical! The villa I stayed in was a serene oasis nestled among lush rice paddies, offering breathtaking views and ultimate relaxation. From exploring ancient temples to indulging in delicious Balinese cuisine, every moment was filled with adventure and wonder. I highly recommend Bali to anyone seeking a perfect blend of culture, beauty, and tranquility."</p>
                <h3>tom</h3>
                <span>traveller</span>
                <img src="images/p1.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <p>"My trip to Jaipur was like stepping into a fairytale! The city's vibrant colors, majestic palaces, and bustling bazaars left me spellbound. I stayed in a heritage haveli-turned-hotel, where every corner was adorned with intricate Rajasthani architecture. Exploring the Amber Fort on an elephant ride, shopping for handicrafts in the old city, and savoring the flavors of Rajasthani cuisine made for an unforgettable experience. Jaipur truly is the jewel of Rajasthan!"</p>
                <h3>josie</h3>
                <span>traveller</span>
                <img src="images/p2.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Cruising through the serene backwaters of Kerala was a journey of tranquility and beauty. Our houseboat was a floating oasis, complete with cozy bedrooms and delicious Keralan cuisine prepared by our onboard chef. Drifting past lush greenery, picturesque villages, and glimpses of local life was a peaceful escape from the hustle and bustle of city living. Watching the sunset over the water and falling asleep to the sound of gentle waves was pure bliss. The Kerala backwaters are a hidden gem of India!"</p>
                <h3>will jack</h3>
                <span>traveller</span>
                <img src="images/p3.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"My trip to Goa was a perfect blend of sun, sand, and vibrant culture! Staying in a beachfront shack allowed me to wake up to the sound of crashing waves and breathtaking ocean views every morning. Whether I was lounging on the golden sands of Calangute Beach, exploring the colorful markets of Anjuna, or sampling fresh seafood at beachside shacks, every moment was a celebration of Goa's laid-back charm and infectious energy. Goa truly is India's paradise."</p>
                <h3>mary Taylor</h3>
                <span>traveller</span>
                <img src="images/p4.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Visiting the iconic Taj Mahal in Agra was a dream come true! The sheer beauty and grandeur of this architectural masterpiece left me speechless. Watching the sun rise over the marble mausoleum, casting a golden glow across its pristine white facade, was a moment of pure magic. Exploring the intricately carved gardens and learning about the love story behind the Taj Mahal's creation made the experience even more meaningful. Agra is a must-visit destination for anyone seeking to marvel at one of the world's wonders."</p>
                <h3>joe root</h3>
                <span>traveller</span>
                <img src="images/p5.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"My adventure in Leh-Ladakh was an unforgettable journey through rugged landscapes and breathtaking vistas. Driving through winding mountain roads, surrounded by snow-capped peaks and crystal-clear lakes, felt like exploring a scene from a postcard. Staying in cozy guesthouses in remote villages allowed me to immerse myself in the rich culture and traditions of the Ladakhi people. Trekking to monasteries perched on high cliffs, riding camels in the Nubra Valley, and witnessing the vibrant Hemis Festival were experiences that left me in awe of Leh-Ladakh's raw beauty and spiritual essence. It's a destination that beckons the adventurous soul."</p>
                <h3>sophie devine</h3>
                <span>traveller</span>
                <img src="images/p6.jpg" alt="">
            </div>
        </div>
    </div>
</section>




<!-- reviews section end  -->

















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