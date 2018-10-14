<?php

$db = mysqli_connect("localhost","root","","d_ta6");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
 ?>