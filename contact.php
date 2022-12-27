<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Online Learning and Earning</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Online Learning and Earning</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="./index.php">Home</a></li>
          <li>
            <a href="../courses/courses.html">Courses</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="./web.html">Web Development</a></li>
              <li><a href="./app.html">App Development</a></li>
              <li><a href="./ai.html">Artificial Intelligence</a></li>
              <li class="more">
                <span><a href="#">More</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="./graphic.html">Graphic Designing</a></li>
                  <li><a href="./game.html">Game Development</a></li>
                  <li><a href="./digi.html"> Digital Markiting</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="./about.html">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li>
            <a href="#">LogIn</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="./login/login.html">Adminstrator</a></li>
              <li><a href="./login/login.html">User</a></li>
              <li><a href="./login/login.html">Teacher</a></li>
           </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <section class="ABOUT" id="ABOUT">
    <h2>Contact Us Page</h2>
</section>
    <!--contact section start-->
    
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <!-- <h2>Contact Us</h2> -->
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

<!-- footer section starts  -->

<div class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Quick Links</h3>
          <a href="./index.php">Home</a>
          <a href="./courses.html">Course</a>
          <a href="./about.html">About Us</a>
          <a href="./contact.php">Contact Us</a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-map-marker-alt"></i>Lahore, Pakistan </p>
          <p> <i class="fas fa-envelope"></i> Online learning and earning@gmail.com </p>
          <p> <i class="fas fa-phone"></i> 0562929978 </p>
      </div>
  </div>
  <h1 class="credit">copyright 2022 to 2023  |  all rights reserved. </h1>
</div>
<!-- footer section ends -->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>