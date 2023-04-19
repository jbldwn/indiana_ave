<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/19/2023
 *File: profile.php
 *Description: to display user profile for Indiana Ave
 */
$page_title = "Edit Profile";
//header
require_once('includes/web.php');
require_once('includes/headerBLK.php');


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
    <div class="header">
        <h1 class="title">Edit Profile Details:</h1>

    </div>
    <form method="post" class="details" action="profile_update.php">
        <div class="row">
            <div class="column">
                <label class="label">First name:</label>
                <input class="input" type="text" name="f_name" value="<?=$f_name?>">
            </div>
            <div class="column">
                <label class="label">Last name:</label>
                <input class="input" type="text" name="l_name" value="<?=$l_name?>">
            </div>
        </div>
        <div class="row">
            <div class="column">
                <label class="label">Email:</label>
                <input class="input" type="email" name="email" value="<?=$email?>">
            </div>
            <div class="column">
                <label class="label">Password:</label>
                <input class="input" type="password" name="password" value="<?=$password?>">
            </div>
        </div>
        <div class="row">
            <div class="column">
                <label class="label">Request permission changes from:</label>
                <ul>
                    <li>List administrators where admin_role == 0</li>
                </ul>
            </div>
            <div class="column">
                <div class="ctrls">
                    <a href="profile_edit.php">
                        <button class="save">
                            <i class="fa-solid fa-floppy-disk fa-xl"></i>
                            <span>save</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </form>
</section>
<?php

    //footer
    require_once('includes/footer.php');

?>
