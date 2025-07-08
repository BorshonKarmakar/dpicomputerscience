<?php
$con = new mysqli("localhost", "root", "", "cst");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>