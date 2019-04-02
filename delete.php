<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
$config = new Config();
 
// Delete user row from table based on given id
$result = "DELETE FROM menu WHERE id=$id";
$config->runQuery($result);
// echo "<font color='green'>Data delete successfully.";
// After delete redirect to Home, so that latest user list will be displayed.

header("location:tables.php");
?>