<?php
$items = array();
for($i = 0; $i <10; $i++) { $items [$i] = "This is message $i";
}
header('Connect-Type: application/json');
$jsonOutput = json_encodes($items);
echo $jsonOutput;
