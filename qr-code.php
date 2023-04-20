<?php

/**
 * Author: your name
 * Date: 4/10/2023
 * File: landmark-detail.php
 * Description:
 */


require_once('includes/web.php');
require 'includes/database.php';

$id = filter_input(INPUT_GET, "location_id", FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT *
 FROM $tblLocations, $tblChapters
 WHERE locations.location_id = chapters.chapter_location
 AND location_id=$id";

$sql_photos = "SELECT *
 FROM  $tblPhotos
 WHERE photos.location_id=$id AND photos.chapter_id=$id";


$query = $conn->query($sql);

$query_photos = $conn->query($sql_photos);

$row = $query->fetch_assoc();



?>


<h1 id="qr-head"><?= $row['location_name'] ?></h1>

<div class="gallery js-flickity"
     data-flickity-options='{ "wrapAround": true }'>
    <?php while($row_photos = $query_photos->fetch_assoc()) {?>
    <div class="gallery-cell">
        <div id="site-img" style="background-image: url(<?= $row_photos['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
        <p><?= $row_photos['photo_year'] ?></p>
        <h1 id="qr-head"><?= $row_photos['photo_id'] ?></h1>
    </div>
    <?php } ?>
</div>
<p ><?= $row['chapter_content'] ?></p>

<a href="landmark-detail.php?location_id=<?= $row['location_id'] ?>" >
    <button class="qr-button">
        Learn More
    </button>
</a>



<?php  ?>
