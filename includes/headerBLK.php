<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/10/2023
 *File: headerBLK.php
 *Description: black header for Indiana Ave
 */
?>

<div class="container">
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
    <div class="nav-wrapper-black">
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
</div>
