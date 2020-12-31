<?php
//Default Get

// $name = $_GET['name'];
// $address = $_GET['address'];
// $contact = $_GET['contact'];


if (isset($_POST['user_register'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    echo "Name: $name <hr> Address: $address <hr> Contact: $contact";
}

?>



<form method="POST">
    <?php
    //file must have this file
    require('form.html');

    //File not to be required
    include("component.htnl");

    //break
    require_once("test.html");
    ?>
    <input name="name" type="text">
    <input name="address" type="text">
    <input name="contact" type="text">

    <input type="submit" value="Submit" name="user_register">
</form>