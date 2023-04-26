
<?php

/**
 * Author: your name
 * Date: 4/10/2023
 * File: landmark-detail.php
 * Description:
 */

require_once('includes/headerBLK.php');
require_once('includes/web.php');
require 'includes/database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];




}
//?>

<div class="contact">

    <div class="contact-info">
        <h1>Contact Info</h1>
        <div id="contact-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Nunc congue nisi vitae suscipit.
            Sed odio morbi quis commodo odio aenean sed adipiscing diam.
            Sit amet consectetur adipiscing elit.
            <br>Donec ac odio tempor orci
            dapibus ultrices. Non odio euismod lacinia at quis risus sed vulputate.
            Urna molestie at elementum eu facilisis sed odio.
            Sit amet consectetur adipiscing elit.
            <br>Donec ac odio tempor orci
            dapibus ultrices. Non odio euismod lacinia at quis risus sed vulputate.
            Urna molestie at elementum eu facilisis sed odio</div>
    </div>

    <form action="mailto:jcaobcatalan943@gmail.com" method="get" class="contact-form">
        <label>Subject:</label>
        <input type="text" name="subject" placeholder="Your Name" class="contact-input"><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Your Email" class="contact-input"><br>
        <label>Message:</label>
        <textarea name="body" rows="5" cols="30" placeholder="Your Message" class="contact-input2"></textarea><br>
        <input type="submit" value="Send" class="submit">
    </form>


</div>

</div>


<?php require_once('includes/footer.php'); ?>
