<?php

//Datenbankverbindung aufbauen
$mysqli = new mysqli("http://zeus1400.bplaced.net/", "zeus1400_root", "dicks1400", "zeus1400_Fuzzy");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");


?>