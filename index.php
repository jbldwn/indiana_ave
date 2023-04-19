<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/4/2023
 *File: index.php
 *Description: This is the home page for Indiana Avenue
 */
$page_title = "Home";
//header
require_once('includes/web.php');
require_once('includes/header.php');
require_once ('includes/database.php');

$sql = "SELECT *
 FROM $tblLocations, $tblPhotos
 WHERE locations.location_id = photos.location_id";

$query = $conn->query($sql);

$row = $query->fetch_assoc();

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
            <a href="landmarks.php" class="ctrls">
                <button class="about-button">
                    <i class="fa-solid fa-map-location-dot  fa-xl"></i>
                    <span>Experience the Ave</span>
                </button>
            </a>
        </div>
    </div>
</section>

<div class="home-sites">
    <h1 id="sites-head">Featured Sites</h1>
    <div class="site">
        <div id="site-img" style="background-image: url(<?= $row['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
        <div id="site-name" style="color: red"><?= $row['location_name'] ?></div>
        <div id="site-add"><?= $row['location_address'] ?></div>
    </div>
</div>

<?php
//footer
require_once('includes/footer.php');
?>
