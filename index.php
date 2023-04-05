<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/4/2023
 *File: index.php
 *Description: This is the home page for Indiana Avenue
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Avenue Home Prototype</title>
    <link rel="stylesheet" href="www/css/styles.css">
</head>
<body>
<div class="containter">
    <div class="hero">
        <div class="nav-wrapper">
            <nav>
                <div class="links">
                    <a href="home.html">Home</a>
                    <a href="landmarks.html">Landmarks</a>
                    <a href="contact.html">Contact Us</a>
                </div>
                <div class="logo">
                </div>

            </nav>
        </div>
        <div class="nav-mobile-wrapper">
            <div id="ham-icon" onclick="toggleMenu(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <ul class="mobile-menu">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="landmarks.html">Landmarks</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
            <div class="mobile-icon"></div>

        </div>
        <div class="login">
            <a href="login.html">Login</a>
        </div>
        <div class="cen-content">
            <h1>Indiana Avenue</h1>
        </div>
        <div class="hero-images">
            <div id="image1"></div>
            <div id="image2"></div>
        </div>
        <div id="image3"></div>
        <h1 class="hero-text">Our history remembered</h1>
    </div>

</div>
<div class="about">
    <div class="about-img"></div>
    <div class="about-con">
        <h1 id="about-head">About US</h1>
        <p id="about-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc congue nisi vitae suscipit. Sed odio morbi quis commodo odio aenean sed adipiscing diam.
            Sit amet consectetur adipiscing elit. Donec ac odio tempor orci dapibus ultrices. Non odio euismod lacinia at quis risus sed vulputate.
            <br>
            <br>
            Urna molestie at elementum eu facilisis sed odio.
            Sit amet consectetur adipiscing elit. Donec ac odio tempor orcidapibus ultrices. Non odio euismod lacinia at quis risus sed vulputate. Urna molestie at elementum eu facilisis sed odio.
        </p>
        <a href=""><button id="about-button">Experience the Ave</button></a>
    </div>
</div>
<div class="home-sites">
    <h1 id="sites-head">Featured Sites</h1>
    <div class="site">
        <div id="site-img"></div>
        <div id="site-name"></div>
        <div id="site-add"></div>
    </div>
</div>

<div class="footer">
    <div class="logo"></div>
    <div class="footer-con"></div>
    <div class="footer-con"></div>
    <div class="footer-icons">
        <div id="icon"></div>
        <div id="icon"></div>
        <div id="icon"></div>
        <div id="icon"></div>
    </div>
</div>
<script src="www/js/menu.js"></script>
</body>
</html>
