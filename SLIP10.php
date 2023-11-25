<!DOCTYPE html>
<html>
<head>
    <title>Mathematical Operations</title>
</head>
<body>

<form method="post" action="">
    Number 1: <input type="number" name="num1"><br>
    Number 2: <input type="number" name="num2"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if(isset($_POST['submit']))
{

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    function modulo($num1, $num2){
        return $num1 % $num2;
    }

    function power($num1, $num2){
        return pow($num1, $num2);
    }

    function sum($num1){
        $sum = 0;
        for($i = 1; $i <= $num1; $i++){
            $sum += $i;
        }
        return $sum;
    }

    function factorial($num2){
        $factorial = 1;
        for($i = 1; $i <= $num2; $i++){
            $factorial *= $i;
        }
        return $factorial;
    }

    echo "Modulo: " . modulo($num1, $num2) . "<br>";
    echo "Power: " . power($num1, $num2) . "<br>";
    echo "Sum: " . sum($num1) . "<br>";
    echo "Factorial: " . factorial($num2) . "<br>";

}

?>

</body>
</html>