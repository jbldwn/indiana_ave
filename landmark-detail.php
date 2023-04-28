<?php

/**
 * Author: your name
 * Date: 4/10/2023
 * File: landmark-detail.php
 * Description:
 */


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

//check for login status
$login = '';
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
}

$page_title = $row['location_name'];
require_once('includes/web.php');
require_once('includes/headerBLK.php');
?>

<section class="landmark-details container">

    <div class="details half">
        <div class="header">
            <!--Location name-->
            <h1 class="title"><?= $row['location_name']?></h1>
            <!--Ctrl panel to edit Location when logged in.-->
            <?php
                    if($login!=null) {
                        echo "
                        <div class='ctrls'>
                            <a href='#'>
                                <button class='edit'>
                                    <i class='fa-solid fa-pen-to-square fa-sm'></i>
                                </button>
                            </a>
                        </div>";
                    }
                ?>
        </div>

        <!--Photo tied only to location-->
        <div class="photo" style="background-image: url('www/assets/uploads/photos/440.png')"></div>
        <!--<div class="photo" style="background-image: url('www/assets/uploads/photos/<?/*//photo_file goes here*/?>')"></div>
-->
        <!--current address-->
        <h3 class="smTitle"><?= $row['location_address'] ?></h3>

        <!--historical address-->
        <h3 class="smInfo"><span>Historical:</span>440  Indiana Ave</h3>
<!--        <h3 class="smInfo"><span>Historical:</span>--><?//= $row['location_historical'] ?><!--</h3>-->

        <!--current lot description-->
        <h3 class="smInfo"><span>Use Today:</span>Dental office</h3>
<!--        <h3 class="smInfo"><span>Use Today:</span>--><?//= $row['location_current'] ?><!--</h3>-->

        <!--Brief description of significance-->
        <p>Lorem Ipsum s cat in the hat went to get a snack at the 440 club when he happened up on mr. moose.</p>
<!--        <p>--><?//= $row['location_description'] ?><!--</p>-->
    </div>
    <div class="chapters half">
        <div class="tblContents">
            <!--Location name-->
            <h4 class="title">Chapters:</h4>

            <div class="ch_jump">
                <a href="#">1</a>
                <span>|</span>
                <a href="#">2</a>
                <span>|</span>
                <a href="#">3</a>

                <!--Ctrl panel to edit chapter when logged in.-->
                <?php
                if($login!=null) {
                    echo "
                        <div class='ctrls'>
                            <a href='#'>
                                <button class='edit'>
                                    <i class='fa-solid fa-pen-to-square fa-sm'></i>
                                </button>
                            </a>
                        </div>";
                }
                ?>
            </div>
        </div>

        <!--Begin loop for each chapter-->
        <div class="chapter">
            <div class="chapter-banner">
                <!--Iterate "#" to be the chapter number beginning with 1-->
                <h6 class="chap numb">Chapter #</h6>
                <h4 class="chap title"><?= $row['chapter_title'] ?></h4>
            </div>

            <div class="gallery">
                <!--Begin looping through all photos for associated chapter-->
                <?php while($row_photos = $query_photos->fetch_assoc()) {?>
                    <div class="photo" style="background-image: url(<?= $row_photos['photo_file'] ?>);"></div>
                <?php } ?>
                <!--Extra images to test styling-->
                <div class="photo" style="background-image: url('www/assets/images/440.png');"></div>
                <div class="photo" style="background-image: url('www/assets/images/People.png');"></div>
            </div>

            <p class="prose"><?= $row['chapter_content'] ?></p>
        </div>
    </div>


</section>

<!--<h1 id="ld-head"><?/*= $row['location_name'] */?></h1>
<div class="ld">
    <div class="ld-detail">
        <h1 class="ld-body-head">Details</h1>
        <div class="ld-hero" style="background-image: url(<?/*= $row_photos['photo_file'] */?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
        <div class="ld-address"><?/*= $row['location_address'] */?></div>
        <div class="ld-des"><?/*= $row['location_description'] */?></div>
    </div>
    <div class="ld-chapters">
        <h1 class="ld-body-head">Chapters</h1>
        <h1 class="ld-chapter-name"><?/*= $row['chapter_title'] */?></h1>
        <div class="ld-grid">
            <?php /*while($row_photos = $query_photos->fetch_assoc()) {*/?>
            <div class="ld-photo" style="background-image: url(<?/*= $row_photos['photo_file'] */?>); background-size:cover; background-position: top;  background-repeat: no-repeat;"></div>
            <?php /*} */?>

        </div>
        <div class="ld-audio"></div>
        <div class="ld-chapter-detail"><?/*= $row['chapter_content'] */?></div>
    </div>
    <a style="text-decoration: none; color: black"  href="qr-code.php?location_id=<?/*= $row['location_id'] */?>">Here</a>

</div>-->





<?php require_once('includes/footer.php'); ?>
