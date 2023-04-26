<?php

/**
 * Author: your name
 * Date: 4/10/2023
 * File: landmark-detail.php
 * Description:
 */

require_once('includes/web.php');
require_once('includes/headerBLK.php');
require 'includes/database.php';

$id = filter_input(INPUT_GET, "location_id", FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT *
 FROM $tblLocations, $tblChapters
 WHERE locations.location_id = chapters.chapter_location
 AND location_id=$id";

$sql_photos = "SELECT *
 FROM  $tblPhotos
 WHERE photos.location_id=$id AND photos.chapter_id=$id";

$query_photos = $conn->query($sql_photos);

$query = $conn->query($sql);

$row = $query->fetch_assoc();

$row_photos = $query_photos->fetch_assoc();


$page_title = $row['location_name'];

?>

<section class="landmark-details container">
    <div class="header">
        <h1 class="title"><?= $row['location_name'] ?></h1>
    </div>
    <div class="location-data">
        <div class="details half">
            <h3 class="title">Details</h3>
            <div id="site-img" style="background-image: url(<?= $row['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
            <h3 class="title"><?= $row['location_address'] ?></h3>
            <h3 class="title"><?= $row['location_current'] ?></h3>
            <h3 class="title"><?= $row['location_description'] ?></h3>
        </div>
        <div class="chapters half"></div>
    </div>

</section>

<h1 id="ld-head"><?= $row['location_name'] ?></h1>
<div class="ld">
    <div class="ld-detail">
        <h1 class="ld-body-head">Details</h1>
        <div class="ld-hero" style="background-image: url(<?= $row_photos['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
        <div class="ld-address"><?= $row['location_address'] ?></div>
        <div class="ld-des"><?= $row['location_description'] ?></div>
    </div>
    <div class="ld-chapters">
        <h1 class="ld-body-head">Chapters</h1>
        <h1 class="ld-chapter-name"><?= $row['chapter_title'] ?></h1>
        <div class="ld-grid">
            <?php while($row_photos = $query_photos->fetch_assoc()) {?>
            <div class="ld-photo" style="background-image: url(<?= $row_photos['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
            <?php } ?>

        </div>
<!--        <div class="ld-audio"></div>-->
        <div class="ld-chapter-detail"><?= $row['chapter_content'] ?></div>
    </div>
    <a style="text-decoration: none; color: black"  href="qr-code.php?location_id=<?= $row['location_id'] ?>">Here</a>

</div>





<?php require_once('includes/footer.php'); ?>
