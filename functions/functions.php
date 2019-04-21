<?php 

function mysqli_prep($string) {
    $conn = dbConnect();		
    $escaped_string = $conn->real_escape_string($string);
    return $escaped_string;
}


?>