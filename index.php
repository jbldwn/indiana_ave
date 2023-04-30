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


?>

<section id="about">
    <div class="img"></div>
    <div class="container about">
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

<div class="home-sites container">
    <h1 id="sites-head">Featured Sites</h1>

    <!-- Flickity HTML init -->
    <div class="gallery js-flickity"
         data-flickity-options='{ "wrapAround": true }'>
        <?php while($row = $query->fetch_assoc()) {?>
        <a style="text-decoration: none; color: black"  href="landmark-detail.php?location_id=<?= $row['location_id'] ?>">
            <div class="gallery-cell">
                <div id="site-img" style="background-image: url(<?= $row['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
                <div id="site-name" ><?= $row['location_name'] ?></div>
                <div id="site-add"><?= $row['location_address'] ?></div>
            </div>
        </a>
        <?php } ?>

    </div>
</div>

<?php
//footer
require_once('includes/footer.php');
?>
