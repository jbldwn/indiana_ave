<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/4/2023
 *File: index.php
 *Description: This is the home page for Indiana Avenue
 */

require_once('includes/header.php');

?>


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
    <div class="footer-con">
        <h3>Site Map:</h3>
        <a href="index.php">Home</a>
        <a href="index.php/#about">About</a>
        <a href="landmarks.php">Landmarks</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Maintenance</a>

    </div>
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
