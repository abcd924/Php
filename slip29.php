<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Enter the title of the event: ";
$title = trim(fgets(STDIN));

$sql = "UPDATE Committee 
        INNER JOIN Event_Committee ON Committee.cno = Event_Committee.cno 
        INNER JOIN Event ON Event_Committee.eno = Event.eno 
        SET Committee.status = 'working' 
        WHERE Event.title = '$title'";

if ($conn->query($sql) === TRUE) {
    echo "Committee status has been updated to 'working' for the event '$title'.\n";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
