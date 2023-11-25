<?php
$temps = array(20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48);

$average = array_sum($temps) / count($temps);
echo "Average Temperature: " . $average . "<br>";

rsort($temps);
$warmest = array_slice($temps, 0, 5);
echo "Five Warmest Temperatures: ";
foreach ($warmest as $temp) {
    echo $temp . " ";
}
?>
