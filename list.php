<?php

require_once "db_credentials.php";
file_put_contents("data.txt", "");
  $mysqli = new mysqli($servername, $username, $password, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $query = "select * from Funhaus order by Employee asc;";

    $result = $mysqli->query($query);



    $array = array();
     while($row = mysqli_fetch_array($result))
    {

       $array[] = array('key1' => $row['FirstName'], 'key2' => $row['LastName'], 'key3' => $row['Postion']);
    }
    echo json_encode($array); 
    

$result->close();
$mysqli->close();
?>