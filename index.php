<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/4/2023
 *File: index.php
 *Description: This is the home page for Indiana Avenue
 */

require_once('includes/header.php');

?>

<section id="about">
    <div class="container about">
        <div class="about-img"></div>
        <div class="about-con">
            <h1 class="about-con-header">About US</h1>
            <p class="about-con-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc congue nisi vitae suscipit. Sed odio morbi quis commodo odio aenean sed adipiscing diam.
            Sit amet consectetur adipiscing elit. Donec ac odio tempor orci dapibus ultrices. Non odio euismod lacinia at quis risus sed vulputate.
                <br>
                <br>
                Urna molestie at elementum eu facilisis sed odio.
                Sit amet consectetur adipiscing elit. Donec ac odio tempor orcidapibus ultrices. Non odio euismod lacinia at quis risus sed vulputate. Urna molestie at elementum eu facilisis sed odio.
            </p>
            <a href="#"><button class="about-button">Experience the Ave</button></a>
        </div>
    </div>
</section>

<div class="home-sites">
    <h1 id="sites-head">Featured Sites</h1>
    <div class="site">
        <div id="site-img"></div>
        <div id="site-name"></div>
        <div id="site-add"></div>
    </div>
</div>
<footer>
    <div class="footer container">
        <div class="logo"></div>
        <div class="footer-icons">
            <!-- round -->
            <i class="fa-brands fa-facebook fa-3x"></i>
            <i class="fa-brands fa-twitter fa-3x"></i>
            <i class="fa-brands fa-instagram fa-3x"></i>

            <!-- square -->
            <!-- <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-square-instagram"></i> -->

            <!-- stand-in -->
            <!-- <div id="icon"></div>
            <div id="icon"></div>
            <div id="icon"></div> -->
        </div>
        <div class="footer-nav">
            <h3>Site Map:</h3>
            <a href="index.php">Home</a>
            <a href="index.php/#about">About</a>
            <a href="landmarks.php">Landmarks</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Maintenance</a>
        </div>
    </div>
</footer>
<script src="www/js/menu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
</body>
</html>
