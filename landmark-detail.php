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

$sql = "SELECT location_id, location_name, address, city, state, zipcode, category_id, creator_admin_id, last_editor_admin_id, last_updated
 FROM  $tblLocations WHERE location_id = $id";

$query = $conn->query($sql);

$row = $query->fetch_assoc();

?>

<h1 id="ld-head"><?= $row['location_name'] ?></h1>
<div class="ld">
    <div class="ld-detail">
        <h1 class="ld-body-head">Details</h1>
        <div class="ld-hero"></div>
        <div class="ld-address"><?= $row['address'] ?></div>
        <div class="ld-historical"></div>
        <div class="ld-current"></div>
        <div class="ld-des"></div>
    </div>
    <div class="ld-chapters">
        <h1 class="ld-body-head">Chapters</h1>
        <div class="ld-banner">
            <h1 class="ld-chapter-number"></h1>
            <h1 class="ld-chapter-name"></h1>
        </div>
        <div class="ld-grid">
            <div class="ld-photo"></div>
            <div class="ld-photo"></div>
            <div class="ld-photo"></div>
            <div class="ld-photo"></div>
        </div>
        <div class="ld-audio"></div>
        <div class="ld-chapter-detail"></div>
    </div>


</div>

</div>



<?php require_once('includes/footer.php'); ?>
