<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subjects = $_POST['subject'];
    $marks = $_POST['marks'];
    $total = 0;

    echo "<table border='1'>";
    echo "<tr><th>Serial Number</th><th>Subject</th><th>Marks</th></tr>";
    for ($i = 0; $i < count($subjects); $i++) {
        echo "<tr><td>".($i+1)."</td><td>".$subjects[$i]."</td><td>".$marks[$i]."</td></tr>";
        $total += $marks[$i];
    }
    echo "</table>";

    $percentage = $total / count($subjects);
    echo "Total: ".$total."<br>";
    echo "Percentage: ".$percentage."%<br>";

    if ($percentage >= 90) {
        echo "Grade: A";
    } elseif ($percentage >= 80) {
        echo "Grade: B";
    } elseif ($percentage >= 70) {
        echo "Grade: C";
    } elseif ($percentage >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: F";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="subject[]" placeholder="Subject 1"><br>
    <input type="text" name="marks[]" placeholder="Marks 1"><br>
    <input type="text" name="subject[]" placeholder="Subject 2"><br>
    <input type="text" name="marks[]" placeholder="Marks 2"><br>
    <input type="text" name="subject[]" placeholder="Subject 3"><br>
    <input type="text" name="marks[]" placeholder="Marks 3"><br>
    <input type="text" name="subject[]" placeholder="Subject 4"><br>
    <input type="text" name="marks[]" placeholder="Marks 4"><br>
    <input type="text" name="subject[]" placeholder="Subject 5"><br>
    <input type="text" name="marks[]" placeholder="Marks 5"><br>
    <input type="submit">
</form>
