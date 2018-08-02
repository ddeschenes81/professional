<?php

$mysqli = new mysqli('prod-db.cvtn3zdqecs0.us-east-2.rds.amazonaws.com','Daedalus81','oLiver!12','tires') or die ('error');


$query = "SELECT * FROM test";

if ($result = $mysqli->query($query)) {
   
    while ($row = $result->fetch_assoc()) {

        print_r($row);
       
    }
   
   mysqli_free_result($result);
   
} else {
   echo $mysqli->error;
}     