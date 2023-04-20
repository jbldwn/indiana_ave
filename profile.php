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
    <div class="header">
        <h1 class="title">Profile Details:</h1>
    </div>
    <div class="details">
        <div class="row">
            <div class="column">
                <span class="label">First name:</span>
                <span class="input"><?=$f_name?></span>
            </div>
            <div class="column">
                <span class="label">Last name:</span>
                <span class="input"><?=$l_name?></span>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <span class="label">Email:</span>
                <span class="input"><?=$email?></span>
            </div>
            <div class="column">
                <span class="label">Password:</span>
                <span class="input">**********</span>
            </div>
        </div>
        <div class="row">

            <div class="permissions">
                <div class="label">Permissions:</div>
                <div class="permission yes">
                    <i class="fa-solid fa-square-check fa-xl"></i>
                    <span class="label">Create locations</span>
                </div>
                <div class="permission yes">
                    <i class="fa-solid fa-square-check fa-xl"></i>
                    <span class="label">Edit locations</span>
                </div>
                <div class="permission no">
                    <i class="fa-solid fa-square-xmark fa-xl"></i>
                    <span class="label">Delete locations</span>
                </div>
                <div class="permission no">
                    <i class="fa-solid fa-square-xmark fa-xl"></i>
                    <span class="label">Add users</span>
                </div>
                <div class="permission no">
                    <i class="fa-solid fa-square-xmark fa-xl"></i>
                    <span class="label">Modify users</span>
                </div>
            </div>
            <div class="ctrls">
                <a href="profile_edit.php">
                    <button class="edit">
                        <i class="fa-solid fa-user-pen fa-xl"></i>
                        <span>edit</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<?php

    //close the connection
    $conn->close();

    //footer
    require_once('includes/footer.php');

?>
