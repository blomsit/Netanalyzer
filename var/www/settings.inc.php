<?php

// Databasinställningar
$strServer = "127.0.0.1";
$strAnvId = "root";
$strLosenord = "primax";
$strDatabas = "logg"; 
$db = new mysqli($strServer, $strAnvId, $strLosenord, $strDatabas);


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>