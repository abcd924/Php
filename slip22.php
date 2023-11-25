<?php
$queue = new SplQueue();

while (true) {
    echo "\nMenu:\n";
    echo "1. Insert an element in queue.\n";
    echo "2. Delete an element from queue.\n";
    echo "3. Display the contents of queue.\n";
    echo "4. Exit.\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Enter the element to insert: ";
            $element = trim(fgets(STDIN));
            $queue->enqueue($element);
            break;
        case 2:
            if (!$queue->isEmpty()) {
                echo "Deleted element: " . $queue->dequeue() . "\n";
            } else {
                echo "Queue is empty.\n";
            }
            break;
        case 3:
            if (!$queue->isEmpty()) {
                echo "Contents of queue: ";
                foreach ($queue as $item) {
                    echo $item . " ";
                }
                echo "\n";
            } else {
                echo "Queue is empty.\n";
            }
            break;
        case 4:
            exit(0);
        default:
            echo "Invalid choice.\n";
    }
}
?>
