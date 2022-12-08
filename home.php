<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- css file -->
        <link rel="stylesheet" href="css/style.css">

        <!-- swiper css -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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

        <!-- home section -->
        <section class="home">
            <div class="home-slider">
                <div class="w">
                    <div class="slide" style="background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(239,223,187,1) 100%)">
                        <div class="content">
                            <h3>Leading and Complete Coding Education Curriculum</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, eveniet?</p>
                            <a href="course.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="slide" style="background: linear-gradient(to top, #efdfbb 0%, #ffffff 100%)">
                        <div class="content">
                            <h3>Experienced and Trusted Digital Education Institution</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, possimus!</p>
                            <a href="course.php" class="btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- services section -->
        <section class="services" style="background: #FFFAF0">
            <h1 class="heading-title">Our Services</h1>
            <div class="box-container">
                <div class="box">
                    <img src="https://th.bing.com/th/id/R.9b11d760a851970663d52fb38c542849?rik=WebSIqYdSxQV7A&riu=http%3a%2f%2fgetdrawings.com%2ffree-icon-bw%2ftest-icon-png-11.png&ehk=J%2bVOkTgg3oRHwWM5JS3Q480UDMLBvbBu4JkOxLAuntY%3d&risl=&pid=ImgRaw&r=0" alt="" height="60px" width="60px">
                    <h3>Challenge</h3>
                </div>
                
                <div class="box">
                    <img src="https://www.shareicon.net/data/2016/01/05/698562_award_512x512.png" alt="" height="60px" width="60px">
                    <h3>Skill Reward</h3>
                </div>
                
                <div class="box">
                    <img src="https://cdn-icons-png.flaticon.com/512/2468/2468081.png" alt="" height="60px" width="60px">
                    <h3>Free Premium Course</h3>
                </div>
            </div>
        </section>

        <!-- home about section -->
        <section class="home-about" style="background: #FFFAF0">
            <div class="image">
                <img src="https://cdn-icons-png.flaticon.com/512/476/476863.png?w=740&t=st=1669635487~exp=1669636087~hmac=595ad15ead50557edbb3ac36405cf2c2a3f6e3f3cbc53fd319b86e73893083b9" alt="">
            </div>
            <div class="content">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quaerat totam esse sed, animi commodi ipsum aliquam saepe nesciunt odio soluta ea, libero beatae aut eos, asperiores cupiditate similique molestias?</p>
                <a href="about.php" class="btn">Read More</a>
            </div>
        </section>

        <!-- home course section -->
        <section class="home-course">
            <h1 class="heading-title">Our Course's</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="https://img.freepik.com/free-photo/html-http-web-design-hompage-icon_53876-120700.jpg?w=740&t=st=1669638120~exp=1669638720~hmac=2b554f941f527d5addf87ea35c1a491dca6f957a950d87e12edad4eb568c6bb3" alt="" height="300px" width="300px">
                    </div>
                    <div class="content">
                        <h3>Class HTML</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="regist.php" class="btn">Regist Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="https://img.freepik.com/free-vector/website-prototyping-web-page-modeling-interface-development-brainstorming-creative-idea-concept-isolated-flat-vector-illustration_613284-1999.jpg?w=740&t=st=1669638534~exp=1669639134~hmac=e2bdda683e6caaeac19ec6c6d3e73de66192953e6ea56679186e37174323c900" alt="" height="300px" width="400px">
                    </div>
                    <div class="content">
                        <h3>Class CSS</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="regist.php" class="btn">Regist Now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="https://img.freepik.com/free-vector/developer-activity-concept-illustration_114360-1554.jpg?w=740&t=st=1669638757~exp=1669639357~hmac=a6185fa2f14bdd25827a783f9d2c5cdf6abacd65ec87ebaa837c089ba1ad5a7a" alt="" height="300px" width="300px">
                    </div>
                    <div class="content">
                        <h3>Class PHP</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="regist.php" class="btn">Regist Now</a>
                    </div>
                </div>
            </div>

            <div class="load-more">
                <a href="course.php" class="btn">Load More</a>
            </div>
        </section>

        <!-- home offer section -->
        <section class="home-offer" style="background: #FFFAF0">
            <div class="content">
                <h3>Let's Regist Now!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quis facere aut qui numquam architecto accusantium exercitationem aliquid praesentium tempore quisquam, repellat deleniti delectus velit obcaecati eaque in, sequi dolor?</p>
                <a href="regist.php" class="btn">Regist Now</a>
            </div>
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




 

    <!-- js file -->
    <script src="js/script.js"></script>

    </body>
</html>