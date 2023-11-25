<?php
echo "Enter the name of the first file: ";
$firstFile = trim(fgets(STDIN));
echo "Enter the name of the second file: ";
$secondFile = trim(fgets(STDIN));

if (file_exists($firstFile)) {
    $content = file_get_contents($firstFile);
    file_put_contents($secondFile, $content);
    echo "Content of $firstFile has been copied to $secondFile.\n";
} else {
    echo "The first file does not exist.\n";
}
?>
