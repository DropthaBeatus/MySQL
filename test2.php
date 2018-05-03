<?php
require_once "../db.conf";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }


$var = $_GET['id'];

$query = "Delete FROM Funhaus Where id = '$var';";
$result = $mysqli->query($query);

echo $var;
//$result->close();
$mysqli->close();
?>