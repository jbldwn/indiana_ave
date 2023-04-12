<?php

/**
 * Author: your name
 * Date: 4/10/2023
 * File: landmarks.php
 * Description:
 */

$page_title = "Landmarks";

require_once('includes/web.php');
require_once('includes/headerBLK.php');

require 'includes/database.php';

$sql = "SELECT location_id, location_name, address, city, state, zipcode, category_id, creator_admin_id, last_editor_admin_id, last_updated
 FROM  $tblLocations";

$query = $conn->query($sql);

if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

?>
<h1 id="ld-head">Landmarks</h1>
<div class="ld">


    <div class="ld-sites">
        <h1 class="ld-body-head">Locations</h1>
        <?php while($row = $query->fetch_assoc()) { ?>
            <div id="site">
                <div id="site-img"></div>
                <h1 class="ld-site-head"><?= $row['location_name'] ?></h1>
                <p class="ld-site-add"><?= $row['address'] ?></p>
            </div>
        <?php } ?>
    </div>

</div>
<?php require_once('includes/footer.php');?>
