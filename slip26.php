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

echo "Enter the name of the hospital: ";
$hname = trim(fgets(STDIN));

$sql = "SELECT Doctor.dname FROM Doctor 
        INNER JOIN Doctor_Hospital ON Doctor.doc_no = Doctor_Hospital.doc_no 
        INNER JOIN Hospital ON Doctor_Hospital.hosp_no = Hospital.hosp_no 
        WHERE Hospital.hname = '$hname'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Doctor Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["dname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
