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

echo "Enter the name of the competition: ";
$c_name = trim(fgets(STDIN));

$sql = "SELECT Student.Stud_id, Student.name, Student.class FROM Student 
        INNER JOIN Student_Competition ON Student.Stud_id = Student_Competition.Stud_id 
        INNER JOIN Competition ON Student_Competition.c_no = Competition.c_no 
        WHERE Competition.c_name = '$c_name' AND Student_Competition.rank = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Student who secured 1st rank in the competition '$c_name':\n";
    while($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["Stud_id"]. ", Name: " . $row["name"]. ", Class: " . $row["class"]. "\n";
    }
} else {
    echo "No results found.\n";
}

$conn->close();
?>
