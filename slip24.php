<?php
define('STDIN', fopen('php://stdin', 'r'));
echo "Enter the name of the first file: ";
$firstFile = trim(fgets(STDIN));
echo "Enter the name of the second file: ";
$secondFile = trim(fgets(STDIN));

if (file_exists($firstFile) && file_exists($secondFile)) {
    $content = file_get_contents($firstFile);
    file_put_contents($secondFile, $content, FILE_APPEND);
    echo "Content of $firstFile has been appended to $secondFile.\n";
} else {
    echo "One or both files do not exist.\n";
}
?>
