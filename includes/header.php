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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="landmarks.php">Landmarks</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
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
