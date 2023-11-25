<?php
echo "Enter the first string: ";
$firstString = trim(fgets(STDIN));
echo "Enter the second string: ";
$secondString = trim(fgets(STDIN));

echo "\nMenu:\n";
echo "1. Delete a small part from the first string.\n";
echo "2. Insert the second string into the first string at a specified position.\n";
echo "3. Replace some characters/words from the first string with the second string at a specified position.\n";
echo "Enter your choice: ";
$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        echo "Enter the position to start deleting from: ";
        $pos = trim(fgets(STDIN));
        echo "Enter the number of characters to delete: ";
        $num = trim(fgets(STDIN));
        $firstString = substr_replace($firstString, '', $pos, $num);
        echo "Result: $firstString\n";
        break;
    case 2:
        echo "Enter the position to insert at: ";
        $pos = trim(fgets(STDIN));
        $firstString = substr_replace($firstString, $secondString, $pos, 0);
        echo "Result: $firstString\n";
        break;
    case 3:
        echo "Enter the position to start replacing from: ";
        $pos = trim(fgets(STDIN));
        echo "Enter the number of characters to replace: ";
        $num = trim(fgets(STDIN));
        $firstString = substr_replace($firstString, $secondString, $pos, $num);
        echo "Result: $firstString\n";
        break;
    default:
        echo "Invalid choice.\n";
}
?>
