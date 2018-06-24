<?php

ini_set("allow_url_fopen",1);

$json = file_get_contents("https://data.police.uk/api/crimes-street/all-crime?lat=51.5806&lng=0.3420&date=2018-02");
$obj = json_decode($json);
//print_r($obj);

echo $obj[4];

?> 
