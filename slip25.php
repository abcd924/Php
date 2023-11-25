<?php
echo "Enter the name of the file: ";
$filename = trim(fgets(STDIN));

while (true) {
    echo "\nMenu:\n";
    echo "1. Display type of file.\n";
    echo "2. Display last modification time of file.\n";
    echo "3. Display the size of file.\n";
    echo "4. Delete the file.\n";
    echo "5. Exit.\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Type of file: " . filetype($filename) . "\n";
            break;
        case 2:
            echo "Last modification time of file: " . date("F d Y H:i:s.", filemtime($filename)) . "\n";
            break;
        case 3:
            echo "Size of file: " . filesize($filename) . " bytes\n";
            break;
        case 4:
            if (unlink($filename)) {
                echo "File deleted.\n";
            } else {
                echo "Failed to delete file.\n";
            }
            break;
        case 5:
            exit(0);
        default:
            echo "Invalid choice.\n";
    }
}
?>
