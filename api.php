<?php

class CrimeMap {
  
  function getURL() {
    return "https://data.police.uk/api/crimes-street/all-crime?poly=52.268,0.543:52.794,0.238:52.130,0.478&date=";
  }
  
  function getCrime($date) {
    $url = getURL().$date;
    
    $x=json_decode($url);
    echo $x;
  }
  
}

?>
