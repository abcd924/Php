<?php
$people = array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");

// a) Ascending order sort by value
asort($people);
echo "Ascending order sort by value:\n";
print_r($people);

// b) Ascending order sort by key
ksort($people);
echo "\nAscending order sort by key:\n";
print_r($people);

// c) Descending order sorting by value
arsort($people);
echo "\nDescending order sorting by value:\n";
print_r($people);

// d) Descending order sorting by key
krsort($people);
echo "\nDescending order sorting by key:\n";
print_r($people);
?>
