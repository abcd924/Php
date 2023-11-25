<?php
$file = fopen("student.dat", "r");

echo "<table border='1'>";
echo "<tr><th>Roll No</th><th>Name</th><th>OS</th><th>WT</th><th>DS</th><th>Python</th><th>Java</th><th>CN</th><th>Percentage</th></tr>";

while (($line = fgetcsv($file)) !== FALSE) {
    $rollNo = $line[0];
    $name = $line[1];
    $os = $line[2];
    $wt = $line[3];
    $ds = $line[4];
    $python = $line[5];
    $java = $line[6];
    $cn = $line[7];

    $total = $os + $wt + $ds + $python + $java + $cn;
    $percentage = $total / 6;

    echo "<tr><td>$rollNo</td><td>$name</td><td>$os</td><td>$wt</td><td>$ds</td><td>$python</td><td>$java</td><td>$cn</td><td>$percentage%</td></tr>";
}

echo "</table>";

fclose($file);
?>
