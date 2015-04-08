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
			
$query = "SELECT MAX(time) as stop FROM log;"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$stop = $row["stop"];
			}
			
$query = "SELECT MIN(time) as start FROM log;"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$start = $row["start"];
			}




echo "Result for ping:<br>Test active between ".$start." and ".$stop." UTC<br><br><br>";

echo "Result for ".$url1.":<br><br>";



$query = "SELECT MIN(ping) as min FROM log WHERE url = '$url1' AND ping <> 'timeout'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["min"];
			}
							
	echo "Min: ".$medel." ms<br>";
	

$query = "SELECT MAX(ping) as max FROM log WHERE url = '$url1' AND ping <> 'timeout'"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["max"];
			}
							
	echo "Max: ".round($medel,1)." ms<br>";
	
	
$query = "SELECT AVG(ping) as time FROM log WHERE url = '$url1' AND ping <> 'timeout'"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["time"];
			}
							
	echo "Avg: ".round($medel,1)." ms<br><br>";
	

$query = "SELECT COUNT(ping) as count FROM log WHERE url = '$url1' AND ping <> 'timeout'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["count"];
			}
							
echo "Total ping: ".$medel." <br>";
	

$query = "SELECT COUNT(ping) as fail FROM log WHERE ping = 'timeout' AND url = '$url1'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["fail"];
			}
							
echo "Timeout: ".$medel." <br><br><br>";

// Site 2

echo "Result for ".$url2.":<br><br>";

$query = "SELECT MIN(ping) as min FROM log WHERE url = '$url2' AND ping <> 'timeout'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["min"];
			}
							
	echo "Min: ".$medel." ms<br>";
	

$query = "SELECT MAX(ping) as max FROM log WHERE url = '$url2' AND ping <> 'timeout'"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["max"];
			}
							
	echo "Max: ".round($medel,1)." ms<br>";
	
	
$query = "SELECT AVG(ping) as time FROM log WHERE url = '$url2' AND ping <> 'timeout'"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["time"];
			}
							
	echo "Avg: ".round($medel,1)." ms<br><br>";
	

$query = "SELECT COUNT(ping) as count FROM log WHERE url = '$url2' AND ping <> 'timeout'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["count"];
			}
							
echo "Total ping: ".$medel." <br>";
	

$query = "SELECT COUNT(ping) as fail FROM log WHERE ping = 'timeout' AND url = '$url2'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["fail"];
			}
							
echo "Timeout: ".$medel." <br><br><br>";

// Site 3

echo "Result for ".$url3.":<br><br>";

$query = "SELECT MIN(ping) as min FROM log WHERE url = '$url3' AND ping <> 'timeout'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["min"];
			}
							
	echo "Min: ".$medel." ms<br>";
	

$query = "SELECT MAX(ping) as max FROM log WHERE url = '$url3' AND ping <> 'timeout'"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["max"];
			}
							
	echo "Max: ".round($medel,1)." ms<br>";
	
	
$query = "SELECT AVG(ping) as time FROM log WHERE url = '$url3' AND ping <> 'timeout'"; 

	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["time"];
			}
							
	echo "Avg: ".round($medel,1)." ms<br><br>";
	

$query = "SELECT COUNT(ping) as count FROM log WHERE url = '$url3' AND ping <> 'timeout'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["count"];
			}
							
echo "Total ping: ".$medel." <br>";
	

$query = "SELECT COUNT(ping) as fail FROM log WHERE ping = 'timeout' AND url = '$url3'"; 


	$row = $db->query($query)->fetch_array();
    
    	if (!$result = $db->query($query))
	    	{
				die('There was an error running the query [' . $db->error . ']');
			}
 
		while($row = $result->fetch_assoc())
			{
				$medel = $row["fail"];
			}
							
echo "Timeout: ".$medel." <br><br><br>";


					
	 
?>