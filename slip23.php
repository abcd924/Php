<?php
$stack = new SplStack();

while (true) {
    echo "\nMenu:\n";
    echo "1. Insert an element in stack.\n";
    echo "2. Delete an element from stack.\n";
    echo "3. Display the contents of stack.\n";
    echo "4. Exit.\n";
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Enter the element to insert: ";
            $element = trim(fgets(STDIN));
            $stack->push($element);
            break;
        case 2:
            if (!$stack->isEmpty()) {
                echo "Deleted element: " . $stack->pop() . "\n";
            } else {
                echo "Stack is empty.\n";
            }
            break;
        case 3:
            if (!$stack->isEmpty()) {
                echo "Contents of stack: ";
                foreach ($stack as $item) {
                    echo $item . " ";
                }
                echo "\n";
            } else {
                echo "Stack is empty.\n";
            }
            break;
        case 4:
            exit(0);
        default:
            echo "Invalid choice.\n";
    }
}
?>
