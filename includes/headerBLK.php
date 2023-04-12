<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/10/2023
 *File: headerBLK.php
 *Description: black header for Indiana Ave
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//variables for a user’s login, name, and role
$login = '';
$name = '';
$user_id = '';
$role = 0;

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
        <div class="user-panel">

            <?php
            if($login==null){
                echo "<span>no admin detected</span>";
            }else if($login!=null){
                echo "<span class='greeting'>Hello $name</span>
                    <div class='ctrls'>";
            }
            if($role==2){
                echo "
                    <button class='save'>
                        <i class='fa-solid fa-clipboard-user fa-xl'></i>
                        <span class='label'>Roster</span>
                    </button>
                    ";
            }
            if($role==0 || $role==1 || $role==2){
//            echo "<span>basic user detected</span>";
//        }else if($role==1){
//            echo "<span>advanced user detected</span>";
                echo "
            <button class='edit'>
                <i class='fa-solid fa-user fa-xl'></i>
                <span class='label'>Profile</span>
            </button>
            <a href='logout.php'>
                <button class='delete'>
                    <i class='fa-solid fa-right-from-bracket fa-xl'></i>
                    <span class='label'>Logout</span>
                </button>
            </a>
            </div>
            ";
            }


            ?>
            <!--            <button class="delete">-->
            <!--                <i class="fa-solid fa-right-from-bracket fa-xl"></i>-->
            <!--                <span class="label">Logout</span>-->
            <!--            </button>-->
            <!--            <button class="edit">-->
            <!--                <i class="fa-solid fa-user fa-xl"></i>-->
            <!--                <span class="label">Profile</span>-->
            <!--            </button>-->
            <!--            <button class="save">-->
            <!--                <i class="fa-solid fa-clipboard-user fa-xl"></i>-->
            <!--                <span class="label">Roster</span>-->
            <!--            </button>-->
        </div>
    </div>
</div>
