<?php
/**
 *Name: Jennifer Baldwin
 *Date: 4/25/2023
 *File: profile_update.php
 *Description: update admin profile changes
 */

$page_title = "Updated Profile";

require_once 'includes/web.php';
require_once 'includes/headerBLK.php';
require_once 'includes/database.php';

//retrieve, sanitize, and escape user's input from a form
$admin_id = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'admin_id', FILTER_SANITIZE_NUMBER_INT)));
$f_name = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_STRING)));
$l_name = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'l_name', FILTER_SANITIZE_STRING)));
$email = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)));
$password = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
$role = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'role', FILTER_SANITIZE_NUMBER_INT)));

//define the MySQL insert statement
$sql = "UPDATE administrators SET
admin_first_name = '$f_name',
admin_last_name = '$l_name',
admin_email = '$email',
admin_password = '$password',
admin_role = '$role' WHERE admin_id='$admin_id'";

//execute the query
$query = @$conn->query($sql);

//handle error
if(!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Insertion failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    require_once('includes/footer.php');
    exit;
}


?>
    <section class="profile container">
        <div class="header">
            <h1 class="title">Profile successfully updated.</h1>
        </div>
    </section>

<?php
$conn->close();


require_once('includes/footer.php');

