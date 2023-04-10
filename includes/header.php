<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/5/2023
 *File: header.php
 *Description: header for Indiana Avenue
 */

//variables for a user’s login, name, and role
$login = '';
$admin_name = '';
$admin_id = '';
$admin_role = 0;

//if the user has logged in, retrieve login, name, role, and user_id.
if (isset($_SESSION['login'])
    AND isset($_SESSION['name'])
    AND isset($_SESSION['role'])
    AND isset($_SESSION['admin_id'])
) {


    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
    $user_id = $_SESSION['admin_id'];
}


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
            <?php
                if($login==null){
                    echo "<span>no admin detected</span>";
                }else if($role==0){
                    echo "<span>basic user detected</span>";
                }else if($role==1){
                    echo "<span>advanced user detected</span>";
                }else if($role==2){
                    echo "<span>super user detected</span>";
                }

            ?>
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
            <?php
            ?>
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
