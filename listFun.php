<?php

require_once "../db.conf";
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    

    $query = "SELECT * FROM Funhaus;";

    $result = $mysqli->query($query);


    $array = array();
     while($row = mysqli_fetch_array($result))
    {

       $array[] = array('key1' => $row['FirstName'], 'key2' => $row['LastName'], 'key3' => $row['YearJoined'], 'key4' => $row['YearLeft'], 'key5' => $row['id']);
    }
    echo json_encode($array); 
    

$result->close();
$mysqli->close();
?>