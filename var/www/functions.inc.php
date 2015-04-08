<?php

function ping($host,$port=80,$timeout=6)
{
        $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
        if ( ! $fsock )
        {
                return FALSE;
        }
        else
        {
                return TRUE;
        }
}

function pingtime($host, $timeout = 10) 
{ 
    $output = array(); 
    $com = 'ping -n -w ' . $timeout . ' -c 1 ' . escapeshellarg($host); 
    $exitcode = 0; 
    exec($com, $output, $exitcode); 
    if ($exitcode == 0 || $exitcode == 1) 
    {
        foreach($output as $cline) 
        { 
            if (strpos($cline, ' bytes from ') !== FALSE) 
            { 
                $out = (int)ceil(floatval(substr($cline, strpos($cline, 'time=') + 5))); 
                return $out; 
            } 
        } 
    } 

    return FALSE; 
}


?>