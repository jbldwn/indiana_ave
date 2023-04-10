<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/5/2023
 *File: header.php
 *Description: header for Indiana Avenue
 */


?>


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
                    <a href="index.php">Home</a>
                    <a href="index.php/#about">About</a>
                    <a href="landmarks.php">Landmarks</a>
                    <a href="contact.php">Contact Us</a>
                </div>
                <div class="logo"></div>
            </nav>
            <div class="ctrls">
                <button class="delete">
                    <i class="fa-solid fa-right-from-bracket fa-xl"></i>
                    <span class="label">Logout</span>
                </button>
                <button class="edit">
                    <i class="fa-solid fa-user fa-xl"></i>
                    <span class="label">Profile</span>
                </button>
                <button class="save">
                    <i class="fa-solid fa-clipboard-user fa-xl"></i>
                    <span class="label">Roster</span>
                </button>
            </div>
        </div>
        <div class="pageHeader">
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
