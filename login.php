<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/9/2023
 *File: login.php
 *Description: login for maintenance for Indiana Ave
 */
//header
require_once('includes/web.php');
//require_once('includes/header.php');
require_once('includes/headerBLK.php');

?>

<!--login page content-->
<section class="login">
    <div class="login-img"></div>

    <div class="container login-base">
        <div class="pageHeader">
            <h1>Login</h1>
        </div>
        <form method="post" action="verifyuser.php">
            <?php
//            if ($login_status == 2) {
//                echo "<p style='margin: 0 auto 30px auto; color:#EE7B30;' class='p-textLarge'>Login failed. Please try again.</p>";
//            }
            ?>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login" id="submit-button">
<!--            <a href="">Create Account</a>-->
        </form>
    </div>
</section>




<?php
//footer
require_once('includes/footer.php');
?>
