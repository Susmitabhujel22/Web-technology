<?php
$arr1 = array("pop", "rock", "hiphop");
$arr2 = array("country", "EDM");
$choice = array("favourite" => "rock", "least_favourite" => "country");

// a) Merge arrays
$merged = array_merge($arr1, $arr2);
echo "Merged Array:<br>";
print_r($merged);
echo "<br><br>";

// b) Sort merged array in ascending order
sort($merged);
echo "Sorted Merged Array (Ascending):<br>";
print_r($merged);
echo "<br><br>";

// c) Sort $choice array
ksort($choice);   
asort($choice);   

echo "Sorted Choice Array (Keys then Values):<br>";
print_r($choice);
?>