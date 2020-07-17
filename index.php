<?php
$servername = 'localhost';
$username = 'id14348500_localhost';
$password = 'Frankenstein-1998';
$database = 'id14348500_emails';

$conn = mysqli_connect($servername, $username, $password, $database);


if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = $_POST = mysqli_real_escape_string($conn, $email);

    $query = "INSERT INTO Emails(email) VALUES('$email')";

    $res = mysqli_query($conn, $query);

    if($res) {
        echo "
        <script>
            alert('Form submission successful')
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Form submission failed')
        </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- GOOGLE FONTS (ROBOTO) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- lightbox -->
    <link rel="stylesheet" href="./assets/lightbox2-2.11.3/lightbox2-2.11.3/dist/css/lightbox.css">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animate.css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Reathym App</title>
</head>
<body>
    <div class="loader_bg" id="loader">
        <div class="loader"></div>
    </div>




    <header id="page-header">
        <div class="container-custom header-wrapper">
            <img src="./assets/images/logo-1.png" alt="" class="logo-img">

            <div class="header-content">
                <div class="header-content-text" data-aos="fade-right" data-aos-duration="1500">
                    <h2 class="header-content-title">Singer and tired of going to the studio always?</h2>
                    <p class="header-content-top-text">Let Reathym Produce Beats To Your Lyrics</p>
                    <button class="header-content-btn">
                        <img src="./assets/images/play.png" alt="" class="header-content-btn-img">
                        <span class="header-content-btn-text">Demo Video</span>
                    </button>
                </div>
                <div class="header-content-img-div" data-aos="fade-left" data-aos-duration="1500">
                    <a href="./assets/images/mac5.png" data-lightbox="image-1"><img src="./assets/images/iPhone.png" alt="" class="header-content-img"></a>
                </div>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container-custom about-wrapper">
            <div class="about-content">
                <img src="./assets/images/Girl.png" alt="" class="about-img" data-aos="zoom-in-up" data-aos-duration="1000">

                <div class="about-text-div" data-aos="zoom-in-down" data-aos-duration="1000">
                    <h3 class="about-text-title section-header">Reathym Does The Music Production For You</h3>
                    <p class="about-text">Does the perfect song exists? If your’re a passionate artiste, this would surely have crossed your mind at a point. Worry no more though, the answer to your question is in here. All you need to do is get those lyrics ready and wait for the game changer that is going to supercharge your music making process and save you countless fustrating hours trying to come up with the perfect beat. Get your mood right, and get your heart set, beacause your’re about to get your mind blown away!</p>
                </div>
            </div> 
        </div>
    </section>

    <section id="works">
        <div class="works-wrapper">
            <div class="works-header" data-aos="zoom-in" data-aos-duration="1000">
                <h3 class="works-header-top section-header">How It <span class="color-span">Works</span></h3>
                <p class="works-header-bottom small-text">Get familiar with the app</p>
            </div>

            <div class="works-items container-custom">
                <div class="works-item">
                    <div class="works-item-icon-div">
                        <img src="./assets/images/works-1.png" alt="" class="works-item-icon">
                        <h4 class="works-item-icon-title">Free Trial</h4>
                        <p class="works-item-icon-text small-text">You get a 7 - day free trial as a new user. Enjoy our nice features.</p>
                    </div>
                    <div class="works-item-img-div">
                      <a href="./assets/images/mac1.png" data-lightbox="image-2" class="works-light"><img src="./assets/images/11.png" alt="" class="works-item-img" data-aos="fade-up-left" data-aos-duration="1000"></a>
                    </div>
                </div>

                <div class="works-item works-item-opp">
                    <div class="works-item-img-div-opp">
                        <a href="./assets/images/mac2.png" data-lightbox="image-2" class="works-light"><img src="./assets/images/22.png" alt="" class="works-item-img" data-aos="fade-up-right" data-aos-duration="1000"></a>
                    </div>
                    <div class="works-item-icon-div-opp">
                        <img src="./assets/images/ic2.png" alt="" class="works-item-icon">
                        <h4 class="works-item-icon-title">Record Your Lyrics</h4>
                        <p class="works-item-icon-text small-text">Record yourself while singing your written lyrics. A step closer to producing your music.</p>
                    </div>
                </div>

                <div class="works-item works-item-last">
                    <div class="works-item-icon-div">
                        <img src="./assets/images/ic3.png" alt="" class="works-item-icon">
                        <h4 class="works-item-icon-title">Simulate Production</h4>
                        <p class="works-item-icon-text small-text">With good data structure and algorithms in place, produce music like a pro.</p>
                    </div>
                    <div class="works-item-img-div">
                        <a href="./assets/images/mac3.png" data-lightbox="image-2" class="works-light"><img src="./assets/images/33.png" alt="" class="works-item-img" data-aos="fade-up-left" data-aos-duration="1000"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="features">
        <div class="features-wrapper">
            <div class="features-header" data-aos="zoom-in" data-aos-duration="1000">
                <h3 class="features-header-top section-header">App <span class="color-span">Features</span></h3>
                <p class="features-header-bottom small-text">See some of our cool & interesting features</p>
            </div>

            <div class="container-custom features-layout-div">
                <img src="./assets/images/BIG-GROUP.png" alt="" class="features-layout-img" data-aos="slide-right" data-aos-duration="1000" data-aos="zoom-in" data-aos-duration="1000">
            </div>

            <div class="container-custom features-layout-sm">
                <img src="./assets/images/small-group.png" alt="" class="features-layout-img-sm" data-aos="zoom-in" data-aos-duration="1000">
            </div>
        </div>
    </section>


    <section id="screens">
        <div class="container-custom">
            <div class="screens-wrapper swipe-container">
                <h3 class="screens-header section-header">Screens From The App</h3>
                <div class="swipe-wrapper">
                    <div class="screens-images-div" id="first-screens">
                        <a href="./assets/images/mac4.png" data-lightbox="image-5" class="screens-img-link"><img src="./assets/images/final1.png" alt="" class="screens-img" data-aos="fade-right" data-aos-duration="1000"></a>
                        <a href="./assets/images/mac7.png" data-lightbox="image-5" class="screens-img-link"><img src="./assets/images/final2.png" alt="" class="screens-img" data-aos="fade-up" data-aos-duration="1000"></a>
                        <a href="./assets/images/mac1.png" data-lightbox="image-5" class="screens-img-link"><img src="./assets/images/final3.png" alt="" class="screens-img" data-aos="fade-left" data-aos-duration="1000"></a>

                        <button id="right-btn" class="slide-btn">
                            <img src="./assets/images/greater-than-solid.svg" alt="" class="arrow-btn">
                        </button>
                    </div>
    
                    <div class="screens-images-div" id="second-screens">
                        <a href="./assets/images/mac5.png" data-lightbox="image-5" class="screens-img-link"><img src="./assets/images/final4.png" alt="" class="screens-img" data-aos="fade-right" data-aos-duration="1000"></a>
                        <a href="./assets/images/mac2.png" data-lightbox="image-5" class="screens-img-link"><img src="./assets/images/final5.png" alt="" class="screens-img" data-aos="fade-up" data-aos-duration="1000"></a>
                        <a href="./assets/images/mac3.png" data-lightbox="image-5" class="screens-img-link"><img src="./assets/images/final6.png" alt="" class="screens-img" data-aos="fade-left" data-aos-duration="1000"></a>
                        <button id="left-btn" class="slide-btn">
                            <img src="./assets/images/less-than-solid.svg" alt="" class="arrow-btn">
                        </button>
                    </div>
                </div>  

                <div class="dash-icons">
                    <span class="material-icons pressed" id="left-icon">
                        minimize
                    </span>

                    <span class="material-icons" id="right-icon">
                        minimize
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section id="launch">
        <div class="container-custom">
            <div class="launch-wrapper">
                <h3 class="launch-header section-header">The App Launches Soon</h3>
                <p class="small-text launch-header-text">Subscribe to our waiting list</p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="launch-form">
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="launch-email">
                    <input type="submit" value="Notify Me" class="launch-btn" name="submit">
                </form>

                <div id="email-success">
                    <img src="./assets/images/check-solid.svg" alt="" class="email-success-check animate__animated animate__bounceIn">
                    <p class="email-success-text">Email submitted successfully</p>
                </div>

                <div id="email-failure">
                    <img src="./assets/images/times-solid.svg" alt="" class="email-failure-check animate__animated animate__bounceIn">
                    <p class="email-success-text">Email submission failed</p>
                </div>
            </div>
        </div>
    </section>


    <footer id="page-footer">
        <div class="container-custom">
            <div class="footer-wrapper">
                <div class="footer-images">
                    <img src="./assets/images/logo-white.png" alt="" class="footer-logo">
                    <div class="footer-icons">
                        <a href="#" class="footer-icon-link"><img src="./assets/images/twitter.svg" alt="" class="footer-icon"></a>
                        <a href="" class="footer-icon-link"><img src="./assets/images/facebook.svg" alt="" class="footer-icon"></a>
                        <a href="" class="footer-icon-link"><img src="./assets/images/instagram.svg" alt="" class="footer-icon"></a>
                    </div>
                </div>
    
                <div class="footer-countdown">
                    <p class="footer-count">
                        <span class="footer-count-num" id="days"></span>
                        <span class="footer-count-text">days</span>
                    </p>
                    <span class="footer-sep">:</span>
                    <p class="footer-count">
                        <span class="footer-count-num" id="hours"></span>
                        <span class="footer-count-text">hours</span>
                    </p>
                    <span class="footer-sep">:</span>
                    <p class="footer-count">
                        <span class="footer-count-num" id="minutes"></span>
                        <span class="footer-count-text">minutes</span>
                    </p>
                    <span class="footer-sep">:</span>
                    <p class="footer-count">
                        <span class="footer-count-num" id="seconds"></span>
                        <span class="footer-count-text">seconds</span>
                    </p>
                </div>
            </div>         
        </div>
    </footer>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/lightbox2-2.11.3/lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true,
          
        });
    </script>
    <script>
        AOS.init();
    </script>

    <script>
        nextDate = new Date("August 19, 2020 00:00:00").getTime();
        let countdown = setInterval(() => {
        let now = new Date().getTime();
        let distance = nextDate - now;
        
        let days = Math.floor(distance / (1000*60*60*24));
        let hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.querySelector('#days').innerHTML = days;
        document.querySelector('#hours').innerHTML = hours;
        document.querySelector('#minutes').innerHTML = minutes;
        document.querySelector('#seconds').innerHTML = seconds;
    }, 1000);



    // SUBMIT SUCCESS FUNCTIONALITY
    const successBar = document.querySelector('#email-success');
    const showSuccessBar = () => {
        successBar.style.display = 'flex';
        const hideSuccessBar = () => {
            successBar.style.display = 'none';
        }
        setTimeout(hideSuccessBar, 2000);
    };


    const failureBar = document.querySelector('#email-failure');
    const showFailureBar = () => {
        failureBar.style.display = 'flex';
        const hideFailureBar = () => {
            failureBar.style.display = 'none';
        }
        setTimeout(hideFailureBar, 2000);
    };



    const firstScreens = document.querySelector('#first-screens');
    const secondScreens = document.querySelector('#second-screens');
    const rightBtn = document.querySelector('#right-btn');
    const leftBtn = document.querySelector('#left-btn');
    const rightIcon = document.querySelector('#right-icon');
    const leftIcon = document.querySelector('#left-icon');

    rightBtn.addEventListener('click', showSecond);
    leftBtn.addEventListener('click', showFirst);

    function showSecond(e) {
        firstScreens.style.display = 'none';
        secondScreens.style.display = 'grid';
        rightIcon.classList.toggle('pressed');
        leftIcon.classList.toggle('pressed');
    }

    function showFirst(e) {
        secondScreens.style.display = 'none';
        firstScreens.style.display = 'grid';
        rightIcon.classList.toggle('pressed');
        leftIcon.classList.toggle('pressed');
    }
    
    </script>
    

    
</body>
</html>