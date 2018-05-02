<?php
require_once "db_credentials.php";
file_put_contents("data.txt", "");
  $mysqli = new mysqli($servername, $username, $password, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }



$first = $_POST['FirstName'];
$last = $_POST['LastName'];
$position = $_POST['Position'];
$joined = $_POST['YearJoined'];
$left = $_POST['YearLeft'];


          $query = "INSERT INTO Funhaus (FirstName, LastName, Position, YearJoined, YearLeft) VALUES ('$first', '$last', '$position', '$joined', '$left');";
          $result = $mysqli->query($query);
            echo "Account Created";

header('Location: welcome.html');
exit;
?>