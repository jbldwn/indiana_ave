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

$sql_audio = "SELECT *
 FROM  $tblChapters, $tblAudios
 WHERE chapters.chapter_location = audios.chapter_id";


$query = $conn->query($sql);

$query_photos = $conn->query($sql_photos);

$query_audios = $conn->query($sql_audio);

$row = $query->fetch_assoc();

$row_audio = $query_audios->fetch_assoc();

?>

<body class="qr-body">
<h1 id="qr-head"><?= $row['location_name'] ?></h1>

<div class="gallery js-flickity"
     data-flickity-options='{ "wrapAround": true }'>
    <?php while($row_photos = $query_photos->fetch_assoc()) {?>
    <div class="gallery-cell2">
        <div id="qr-img" style="background-image: url(<?= $row_photos['photo_file'] ?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
        <p class="qr-des"><?= $row_photos['photo_description'] ?></p>
        <p class="qr-year"><?= $row_photos['photo_year'] ?></p>
    </div>
    <?php } ?>
</div>

<p><?= $row_audio['audio_file'] ?></p>

<a href="landmark-detail.php?location_id=<?= $row['location_id'] ?>" >
    <button class="qr-button">
        Learn More
    </button>
</a>
</body>


<?php  ?>
