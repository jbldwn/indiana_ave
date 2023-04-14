<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/10/2023
 *File: database.php
 *Description: This PHP script connects to the MySQL database and select
 *  the indiana_ave database. It also displays a user-friendly message if
 *  a connection error is encountered.
 */

//define parameters
$host = "localhost";
$login = "phpuser";
$password = "phpuser";
$database = "indiana_ave";
$tblLocations = "locations";
$tblChapters = "chapters";

//Connect to the mysql server
$conn = @new mysqli($host, $login, $password, $database);

//handle connection errors
if ($conn->connect_errno != 0) {
    $errno = $conn->connect_errno;
    $errmsg = $conn->connect_error;
    die ("Connection failed with: ($errno) $errmsg.");
}