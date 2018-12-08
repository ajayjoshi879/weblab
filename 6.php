<?php 


$file  = fopen("counter.txt", "r");

$hits = fscanf($file,"%d");
fclose($file);

$hits[0]++;

$file = fopen("counter.txt", "w");

fprintf($file,"%d",$hits[0]);
echo "total no of views is $hits[0]";

fclose($file)

?>