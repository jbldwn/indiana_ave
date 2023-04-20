<?php

/**
 * Author: your name
 * Date: 4/10/2023
 * File: landmark-detail.php
 * Description:
 */

require_once('includes/headerBLK.php');
require_once('includes/web.php');
require 'includes/database.php';

$id = filter_input(INPUT_GET, "location_id", FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT *
 FROM $tblLocations, $tblChapters
 WHERE locations.location_id = chapters.chapter_location
 AND location_id=$id";
//$sql = "SELECT location_id, location_name, location_address, location_city, location_state, location_zip,
//       category_id, creator_admin_id, last_editor_admin_id, last_updated, location_description, location_current, location_historical
// FROM  $tblLocations WHERE location_id = $id";

$query = $conn->query($sql);

$row = $query->fetch_assoc();

?>

<h1 id="ld-head"><?= $row['location_name'] ?></h1>
<div class="ld">
    <div class="ld-detail">
        <h1 class="ld-body-head">Details</h1>
        <div class="ld-hero"></div>
        <div class="ld-address"><?= $row['location_address'] ?></div>
        <div class="ld-historical"><?= $row['location_historical'] ?></div>
        <div class="ld-current"><?= $row['location_current'] ?></div>
        <div class="ld-des"><?= $row['location_description'] ?></div>
    </div>
    <div class="ld-chapters">
        <h1 class="ld-body-head">Chapters</h1>
        <div class="ld-banner">
            <h1 class="ld-chapter-number"><?= $row['chapter_title'] ?></h1>
            <h1 class="ld-chapter-name"></h1>
        </div>
        <div class="ld-grid">
            <div class="ld-photo"></div>
            <div class="ld-photo"></div>
            <div class="ld-photo"></div>
            <div class="ld-photo"></div>

        </div>
        <div class="ld-audio"></div>
        <div class="ld-chapter-detail"><?= $row['chapter_content'] ?></div>
    </div>
    <a style="text-decoration: none; color: black"  href="qr-code.php?location_id=<?= $row['location_id'] ?>">Here</a>

</div>

</div>



<?php require_once('includes/footer.php'); ?>
