


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
    <title>home</title>
    <!-- swiper css link  -->
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
<!-- home section starts  -->

<section class="home">
    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/header1.jpg)no-repeat">  
               <div class="content">
                   <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
              </div> 
            </div>

            <div class="swiper-slide slide" style="background:url(images/header2.jpg)no-repeat"> 
               <div class="content">
                   <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
              </div> 
            </div>

            <div class="swiper-slide slide" style="background:url(images/header3.jpg)no-repeat"> 
               <div class="content">
                   <span>explore, discover, travel</span>
                    <h3>make your tour worth while</h3>
                    <a href="package.php" class="btn">discover more</a>
              </div> 
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
 
</section>




<!-- home section ends  -->









<!-- service section start  -->

<section class="services">

  <h1 class="heading-title"> our services</h1>
   <div class="box-container">

     <div class="box">
    <a href="service.php"></a>
      <img src="images/adventure.png" alt="" >
      <h3>adventure</h3>
     </div>
    <div class="box">
        <img src="images/tour-guide.png" alt="">
        <h3>tour guide</h3>
    </div>
    <div class="box">
        <img src="images/trekking.png" alt="">
        <h3>trekking</h3>
    </div>
    <div class="box">
        <img src="images/map.png" alt="">
        <h3>Map</h3>
    </div>
    <div class="box">
        <img src="images/off-road.png" alt="">
        <h3>off road</h3>
    </div>
    <div class="box">
        <img src="images/camping.png" alt="">
        <h3>camping</h3>
    </div>
   </div>

   <div class="load-more"><a href="service.php" class="btn">explore more </a></div>

</section>






<!-- service section ends  -->

<!-- home about section start  -->
     
     <section class="home-about">
         
        <div class="image">
            <img src="images/aboutus.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>we believe in the transformative power of travel. Our mission is to inspire, connect, and empower travelers to explore the world with confidence and curiosity. With 5 years of experience in the industry, we have curated unforgettable journeys for adventurers, families, solo travelers, and everyone in between.</p>
            <a href="about.php" class="btn">read more</a>
        </div>

     </section>




<!-- home about section end  -->

<!-- home packages section starts  -->

 <section class="home-packages">
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
          <div class="box">
              <div class="image">
                 <img src="images/taj.jpg" alt="">

              </div>
              <div class="content">
                <h3>agra</h3>
                <p>Price: ₹ 7999 per head </p>
                <p>Number of Days: 4N/3D</p>
                <a href="agar.php" class="btn">Read More</a>
              </div>
          </div>

          <div class="box">
              <div class="image">
                 <img src="images/indiagate.jpg" alt="">

              </div>
              <div class="content">
                <h3>new delhi</h3>
                <p>Price: ₹ 12999 per head </p>
                <p>Number of Days: 5N/4D</p>
                <a href="new_delhi.php" class="btn">Read More</a>
              </div>
          </div>

          <div class="box">
              <div class="image">
                 <img src="images/goldentemple.jpg" alt="">

              </div>
              <div class="content">
                <h3>amritsar</h3>
                <p>Price: ₹ 6599 per head </p>
                <p>Number of Days: 4N/3D</p>
                <a href="amritsar.php" class="btn">Read More</a>
              </div>
          </div>
          
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
 </section>









<!-- home packages section end  -->

<!-- home offer section start  -->

<section class="home-offer">
        <div class="content">
            <h3>Discover Your Next Adventure with Up to 30% Off!</h3>
            <p>Ready to embark on your dream getaway without breaking the bank? Take advantage of our exclusive discounts and enjoy up to 30% off on select destinations, accommodations, and packages. Whether you're craving a tropical escape, an urban adventure, or a cultural journey, we've got you covered with unbeatable savings.</p>
            <h4>Limited Time Offer</h4>
            <p>Don't miss out on these incredible savings! Whether you're planning a romantic retreat, a family vacation, or a solo adventure, now is the time to make your travel dreams a reality. Grab your passport, pack your bags, and get ready for an unforgettable journey with up to 30% off. Book now before these deals disappear!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
</section>

<!-- home offer section end  -->
















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