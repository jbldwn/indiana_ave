<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/5/2023
 *File: header.php
 *Description: header for Indiana Avenue
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
    <script src="https://kit.fontawesome.com/d22db5bb67.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="nav-mobile-wrapper">
        <div id="ham-icon" onclick="toggleMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="landmarks.php">Landmarks</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class="mobile-icon"></div>
    </div>
    <div class="hero">
        <div class="nav-wrapper">
            <nav>
                <div class="links">
                    <a href="home.html">Home</a>
                    <a href="#about">About</a>
                    <a href="landmarks.html">Landmarks</a>
                    <a href="contact.html">Contact Us</a>
                </div>
                <div class="logo">
                </div>

            </nav>
        </div>
        <div class="cen-content">
            <h1>Indiana Avenue</h1>
        </div>
        <div class="collage">
            <!-- space for images -->
            <div class="hero-images">
                <div class="image image-Top"></div>
                <div class="image image-Bottom"></div>
            </div>
            <div class="image3"></div>
        </div>
        <div class="hero-text">Our history <span>remembered</span></div>
        

    </div>

</div>
