<?php

ini_set("allow_url_fopen",1);

$json = file_get_contents("https://data.police.uk/api/crimes-street/all-crime?lat=51.5806&lng=0.3420&date=2018-03");
$obj = json_decode($json);

echo "<font color='red'>";

//print_r($obj);

$x = implode($obj);

if (strpos($x,'anti-social-behaviour') {
  echo "Anti social behaviour"; 
}

echo "</font>";
?>

<link href="bootstrap.css" rel="stylesheet">
