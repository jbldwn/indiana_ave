<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/11/2023
 *File: logout.php
 *Description: logout for maintenance users
 */
$page_title = "Indiana Ave Logout";

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//unset all the session variables
$_SESSION = array();

//delete the session cookie
setcookie(session_name(), "", time() - 3600);

//destroy the session
session_destroy();

include('includes/web.php');
include('includes/headerBLK.php');

?>
    <div class="container">
        <h2 style="margin-left: 30px">You have been logged out.</h2>
    </div>

<?php
include('includes/footer.php');
