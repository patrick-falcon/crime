<?php

include('api.php');

?>
<title>Index Page</title>

<?php

$map = new CrimeMap();

echo $map->getCrime("2018-02");

?>
