
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
    <title>package</title>
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

<div class= "heading" style="background:url(images/package.jpg) no-repeat; height: 550px;" >
    <h1>Packages</h1>
</div> 
<!-- package section start -->

<section class="packages">

    <h1 class="heading-title">top destinations</h1>

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

        <div class="box">
            <div class="image">
                <img src="images/shirdi.webp" alt="">
            </div>
            <div class="content">
                <h3>shirdi</h3>
                <p>Price: ₹ 5999 per head </p>
                <p>Number of Days: 3N/2D</p>

                <a href="shirdi.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/kerala.jpg" alt="">
            </div>
            <div class="content">
                <h3>kerala</h3>
                <p>Price: ₹ 14599 per head </p>
                <p>Number of Days: 5N/4D</p>

                <a href="kerala.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ladakh.jpg" alt="">
            </div>
            <div class="content">
                <h3>ladakh</h3>
                <p>Price: ₹ 6799 per head</p>
                <p>Number of Days: 4N/3D</p>

                <a href="ladakh.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/kolkata.jpg" alt="">
            </div>
            <div class="content">
                <h3>kolkata</h3>
                <p>Price: ₹ 7299 per head</p>
                <p>Number of Days: 4N/3D</p>

                <a href="kolkata.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/manali.jpg" alt="">
            </div>
            <div class="content">
                <h3>manali</h3>
                <p>Price: ₹ 5999 per head </p>
                <p>Number of Days: 5N/4D</p>

                <a href="manali.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan.jpg" alt="">
            </div>
            <div class="content">
                <h3>rajasthan</h3>
                <p>Price: ₹ 5499 per head </p>
                <p>Number of Days: 4N/3D</p>

                <a href="rajasthan.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/gatewayindiamumbai.jpg" alt="">
            </div>
            <div class="content">
                <h3>mumbai</h3>
                <p>Price: ₹ 17999 per head </p>
                <p>Number of Days: 5N/4D</p>

                <a href="mumbai.php" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/goa.jpg" alt="">
            </div>
            <div class="content">
                <h3>goa</h3>
                <p>Price: ₹ 15999 per head </p>
                <p>Number of Days: 6N/5D</p>

                <a href="goa.php" class="btn">Read More</a>
            </div>
        </div>
    
        <div class="box">
            <div class="image">
                <img src="images/premmandir.webp" alt="">
            </div>
            <div class="content">
                <h3>vrindavan</h3>
                <p>Price: ₹ 7999 per head per day</p>
                <p>Number of Days: 4N/3D</p>

                <a href="vrindavan.php" class="btn">Read More</a>
            </div>
        </div>
        
    </div>

    <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- package section ends -->



















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