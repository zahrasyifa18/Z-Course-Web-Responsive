<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regist</title>

        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- css file -->
        <link rel="stylesheet" href="css/style.css">

        <!-- swiper css -->
        <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css" />
    </head>
    <body>
        
        <!-- header section -->
        <section class="header">
            <a href="home.php" class="logo">Z-Course</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="course.php">Course</a>
                <a href="regist.php">Regist</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars">

            </div>
        </section>

        <!-- booking section -->
        <section class="regist">
            <h1 class="heading-title">Regist Your Course!</h1>
            <form action="regist_form.php" method="post" class="regist-form">
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
                        <span>course :</span>
                        <input type="text" placeholder="input your course" name="course">
                    </div>
                    <div class="inputBox">
                        <span>how Many?</span>
                        <input type="number" placeholder="number of course" name="number">
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </form>
        </section>



        <!-- footer section -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="course.php"><i class="fas fa-angle-right"></i>Course</a>
                    <a href="regist.php"><i class="fas fa-angle-right"></i>Regist</a>
                </div>

                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
                    <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms Of Use</a>
                </div>

                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"><i class="fas fa-phone"></i>0824 4738 7320</a>
                    <a href="#"><i class="fas fa-phone"></i>0898 2649 6568</a>
                    <a href="#"><i class="fas fa-envelope"></i>z.course@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i>Jakarta, Indonesia</a>
                </div>

                <div class="box">
                    <h3>Follow Us</h3>
                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                    <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                    <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
                </div>
            </div>

            <div class="credit">Created By <span>Zahra As Syifa Awalia</span> | All Right Reserved!</div>
        </section>




    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- js file -->
    <script src="js/script.js"></script>

    </body>
</html>