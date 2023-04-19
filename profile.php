<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/19/2023
 *File: profile.php
 *Description: to display user profile for Indiana Ave
 */
$page_title = "Profile";
//header
require_once('includes/web.php');
require_once('includes/headerBLK.php');

//include code from database.php
require_once('includes/database.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//retrieve user id
$admin_id = '';

//if the user has logged in, retrieve login, name, role, and user_id.
if (isset($_SESSION['admin_id'])
) {
    $admin_id = $_SESSION['admin_id'];
}

$sql = "SELECT * FROM administrators WHERE admin_id='$admin_id'";

$query = $conn -> query($sql);

if  ($query ->num_rows){
    //It is a valid user. Need to store the user in session variables.
    $row = $query ->fetch_assoc();
    $_SESSION['admin_id'] = $row['admin_id'];
    $_SESSION['f_name'] = $row['admin_first_name'];
    $_SESSION['l_name'] = $row['admin_last_name'];
    $_SESSION['email'] = $row['admin_email'];
    $_SESSION['password'] = $row['admin_password'];
    $_SESSION['role'] = $row['admin_role'];
}

//if the user has logged in, retrieve login, name, role, and user_id.
if (isset($_SESSION['admin_id'])
    AND isset($_SESSION['f_name'])
    AND isset($_SESSION['l_name'])
    AND isset($_SESSION['email'])
    AND isset($_SESSION['password'])
    AND isset($_SESSION['role'])
) {
    $admin_id = $_SESSION['admin_id'];
    $f_name = $_SESSION['f_name'];
    $l_name = $_SESSION['l_name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $role = $_SESSION['role'];
}



?>

<section class="profile container">
    <h1 class="header">Profile Details</h1>
    <div class="details">
        <div class="row">
            <div class="first">
                <span>First name:</span>
                <span><?=$f_name?></span>
            </div>
            <div class="last">
                <span>Last name:</span>
                <span><?=$l_name?></span>
            </div>

        </div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>

    </div>
    <?= $admin_id?>

</section>
<!--<section class="landmarks container">-->
<!--    <h1 id="ld-head">Landmarks</h1>-->
<!--    <div class="all-landmarks">-->
<!--        <div class="header">-->
<!--            <h1 class="ld-body-head">All Locations</h1>-->
<!--            <div class="ctrls">-->
<!--                <button class="save">-->
<!--                    <div class="button-icon">-->
<!--                        <i class="fa-solid fa-plus fa-l"></i>-->
<!--                    </div>-->
<!--                    <span>Add Location</span>-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
        <!--        list to hold all retrieved locations-->
<!--        <div class="list">-->
            <!--            creates a new link for each landmark from db-->
<!--            --><?php //while($row = $query->fetch_assoc()) { ?>
<!--                <a style="text-decoration: none; color: black"  href="landmark-detail.php?location_id=--><?//= $row['location_id'] ?><!--">-->
<!--                    <div id="location_--><?//= $row['location_id']?><!--" class="location" style="background-image:linear-gradient(rgba(83, 73, 129, 0.5),rgba(83, 73, 129, 0.5)), url('www/assets/images/street.jpg')">-->
<!---->
                        <!--site-img is just holding space to showcase img applied to parent-->
<!--                        <div class="site-img" ></div>-->
<!--                        <div class="site-info">-->
<!--                            <h1 class="loc_name">--><?//= $row['location_name'] ?><!--</h1>-->
<!--                            <p class="address">--><?//= $row['location_address'] ?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</section>-->

<?php

    //close the connection
    $conn->close();

    //footer
    require_once('includes/footer.php');

?>
