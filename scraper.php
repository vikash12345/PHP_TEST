<?php
$url = 'http://www.mciindia.org/ViewDetails.aspx?ID=1';
$output = file_get_contents($url); 
echo $output;
?>
