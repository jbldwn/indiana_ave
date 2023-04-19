<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/9/2023
 *File: login.php
 *Description: login for maintenance for Indiana Ave
 */

$page_title = "Login";

//header
require_once('includes/web.php');
require_once('includes/headerBLK.php');

//check the login status
$login_status = null;
if (isset($_SESSION['login_status'])) {
    $login_status = $_SESSION['login_status'];
}

//the user's last login attempt failed
if ($login_status == 2) {
    $message = "Username or password invalid. Please try again.";
}

?>


<!--login page content-->
<section class="login">
    <div class="login-img"></div>
    <div class="container login-base">
        <div class="login-form">
            <h1 class="header">Login</h1>
            <form method="post" action="verifyuser.php">
                <?php
                            if ($login_status == 2) {
                                echo "<p style='margin: 0 0 15px; align-self: flex-start; color:#EE7B30;' class='p-textLarge'>Login failed. Please try again.</p>";
                            }
                ?>
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="password" name="password">

                <input type="submit" value="Login" id="submit-button">
            </form>
        </div>
    </div>
</section>




<?php
//footer
require_once('includes/footer.php');
?>
