<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/10/2023
 *File: verifyuser.php
 *Description: to verify user credentials upon login attempt.
 */

//include code from database.php
require_once('includes/database.php');

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//create variable login status.
$_SESSION['login_status'] = 2;
$username = $passcode = "";

//retrieve username and password from the form in the login form
if (filter_has_var(INPUT_POST, 'username') || filter_has_var(INPUT_POST, 'password')) {
    $username = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)));
    $password = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
}

//validate user name and password against a record in the users table in the database. If they are valid, create session variables.

$sql = "SELECT * FROM administrators WHERE admin_email='$username' AND admin_password='$password'";

$query = @$conn -> query($sql);

if  ($query ->num_rows){
    //It is a valid user. Need to store the user in session variables.
    $row = $query ->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['role'] = $row['admin_role'];
    $_SESSION['admin_id'] = $row['admin_id'];
    $_SESSION['name'] = $row['admin_first_name'] . " " . $row['admin_last_name'];
    $_SESSION['login_status'] = 1;
}


//close the connection
$conn->close();

//redirect to the userprofile.php page
if ($_SESSION['login_status'] != 2) {
    header("Location: index.php");
} else {
    header("Location: userlogin.php");
}
