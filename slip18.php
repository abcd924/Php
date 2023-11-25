<?php
$people = array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");

echo "Menu:\n";
echo "1. Reverse the order of each element’s key-value pair.\n";
echo "2. Traverse the element in an array in random order.\n";
echo "3. Convert the array elements into individual variables.\n";
echo "4. Display the elements of an array along with key.\n";
echo "Enter your choice: ";
$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        $people = array_reverse($people);
        print_r($people);
        break;
    case 2:
        $keys = array_keys($people);
        shuffle($keys);
        foreach ($keys as $key) {
            echo "$key => $people[$key]\n";
        }
        break;
    case 3:
        extract($people);
        echo "Sagar = $Sagar\n";
        echo "Vicky = $Vicky\n";
        echo "Leena = $Leena\n";
        echo "Ramesh = $Ramesh\n";
        break;
    case 4:
        foreach ($people as $key => $value) {
            echo "$key => $value\n";
        }
        break;
    default:
        echo "Invalid choice.\n";
}
?>
