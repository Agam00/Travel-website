
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
    <title>book</title>
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

<div class= "heading" style="background:url(images/booking.jpg) no-repeat; height: 550px;">
    <h1>book now</h1>
</div> 

<!-- booking section start  -->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

     <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>
    
        <div class="inputBox">
            <span>where to :</span>
            <select name="location" class='dropBox'>
                <option value="Select location">Select location</option>
                <option value="Agra">Agra</option>
                <option value="Amritsar">Amritsar</option>
                <option value="Goa">Goa</option>
                <option value="Kerala">Kerala</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Ladakh">Ladakh</option>
                <option value="Manali">Manali</option>
                <option value="Mumbai">Mumbai</option>
                <option value="New Delhi">New Delhi</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Shirdi">Shirdi</option>
                <option value="Vrindavan">Vrindavan</option>
                
            </select>
        </div>
        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
        </div>
        <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
        </div>
        
     </div>
     <input type="submit" value="submit" class="btn" name="send">
     </form>
</section>




<!-- booking section end  -->


















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