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

$sql = "SELECT location_id, location_name, location_address, location_city, location_state, location_zip, category_id, creator_admin_id, last_editor_admin_id, last_updated
 FROM  $tblLocations";

$query = $conn->query($sql);

if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

//check for admin
$login = '';
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
}

?>
<section class="landmarks container">
    <h1 id="ld-head">Landmarks</h1>
    <div class="all-landmarks">
        <div class="header">
            <h1 class="ld-body-head">All Locations</h1>
            <?php
            if($login!=null){
                echo"
                    <div class='ctrls'>
                        <button class='save'>
                            <div class='button-icon'>
                                <i class='fa-solid fa-plus fa-l'></i>
                            </div>
                            <span>Add Location</span>
                        </button>
                    </div>
                ";
            }?>
        </div>
        <!--        list to hold all retrieved locations-->
        <div class="list">
            <!--            creates a new link for each landmark from db-->
            <?php while($row = $query->fetch_assoc()) { ?>
                <a style="text-decoration: none; color: black"  href="landmark-detail.php?location_id=<?= $row['location_id'] ?>">
                    <div id="location_<?= $row['location_id']?>" class="location" style="background-image:linear-gradient(rgba(83, 73, 129, 0.5),rgba(83, 73, 129, 0.5)), url('www/assets/images/street.jpg')">

                        <!--site-img is just holding space to showcase img applied to parent-->
                        <div class="site-img" ></div>
                        <div class="site-info">
                            <h1 class="loc_name"><?= $row['location_name'] ?></h1>
                            <p class="address"><?= $row['location_address'] ?></p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>

    </div>

</section>
<?php require_once('includes/footer.php');?>
