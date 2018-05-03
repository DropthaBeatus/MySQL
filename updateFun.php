

<?php
require_once "../db.conf";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

$id = $_POST['ID'];
$option = $_POST['Option'];
$update = $_POST['Update'];

$query = "UPDATE Funhaus SET $option = '$update' WHERE id = $id;";

$result = $mysqli->query($query);

echo("Updated!");
    


$mysqli->close();
?>