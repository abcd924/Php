<?php
$array = array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");

echo "Menu:\n";
echo "1. Split the array into chunks.\n";
echo "2. Sort the array by values without changing the keys.\n";
echo "3. Filter the even elements from the array.\n";
echo "Enter your choice: ";
$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        echo "Enter the size of each chunk: ";
        $size = trim(fgets(STDIN));
        $chunks = array_chunk($array, $size, true);
        print_r($chunks);
        break;
    case 2:
        asort($array);
        print_r($array);
        break;
    case 3:
        $even = array_filter($array, function($value) {
            return $value % 2 == 0;
        });
        print_r($even);
        break;
    default:
        echo "Invalid choice.\n";
}
?>
