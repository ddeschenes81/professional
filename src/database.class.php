<?php

$mysqli = new mysqli('professional-db.cvtn3zdqecs0.us-east-2.rds.amazonaws.com','Daedalus81','oLiver!12','prof') or die ('error');

$data = array();

$query = "SELECT * FROM articles";

if ($result = $mysqli->query($query)) {
   
    while ($row = $result->fetch_assoc()) {

        $data[] = $row;
       
    }
   
   mysqli_free_result($result);
   
} else {
   echo $mysqli->error;
}

echo json_encode($data);