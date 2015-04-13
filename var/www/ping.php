<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

//Include static settings and functions
include 'settings.inc.php';

//Load settings from MySQL
$qsettings = "SELECT * FROM settings WHERE id = '1'";
	
	$row = $db->query($qsettings)->fetch_array();
		
		if (!$result = $db->query($qsettings))
			{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
		
			{
				$url1 = $row["url1"];
				$url2 = $row["url2"];
				$url3 = $row["url3"];
			}

include 'functions.inc.php';


if( $url1 != "" ) {
	
	$total = 0;
	$total = pingtime($url1);
				}
	$time = $total;
	
	if($time == "" OR $time == "0") {$time = "timeout";}
		
    $query = "INSERT INTO log (url, ping) VALUES ('$url1','$time')";

		$db->query($query);
		
echo $url1." Respose: ".$time." ms<br>";


if( $url2 != "" ) {
	
	$total = 0;
	$total = pingtime($url2);
				}
	$time = $total;
	
	if($time == "" OR $time == "0") {$time = "timeout";}
		
    $query = "INSERT INTO log (url, ping) VALUES ('$url2','$time')";

		$db->query($query);
		
echo $url2." Respose: ".$time." ms<br>";


if( $url3 != "" ) {
	
	$total = 0;
	$total = pingtime($url3);
				}
	$time = $total;
	
	if($time == "" OR $time == "0") {$time = "0";}
		
    $query = "INSERT INTO log (url, ping) VALUES ('$url3','$time')";

		$db->query($query);
		
echo $url3." Respose: ".$time." ms<br>";

mysqli_close($db);

?>