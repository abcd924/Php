<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Big String: <input type="text" name="bigString"><br>
  Small String: <input type="text" name="smallString"><br>
  <input type="submit">
</form>

</body>
</html>




php file

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bigString = $_POST['bigString'];
    $smallString = $_POST['smallString'];

    // a. Find whether the small string appears at the start of the large string.
    if (strpos($bigString, $smallString) === 0) {
        echo "The small string appears at the start of the big string.<br>";
    } else {
        echo "The small string does not appear at the start of the big string.<br>";
    }

    // b. Find the position of the small string in the big string.
    $pos = strpos($bigString, $smallString);
    if ($pos === false) {
        echo "The small string was not found in the big string.<br>";
    } else {
        echo "The small string was found in the big string at position $pos.<br>";
    }

    // c. Compare both the string for first n characters, also the comparison should not be case sensitive.
    $n = strlen($smallString);
    if (strncasecmp($bigString, $smallString, $n) == 0) {
        echo "The first $n characters of both strings are the same, ignoring case.<br>";
    } else {
        echo "The first $n characters of both strings are not the same, ignoring case.<br>";
    }
}
?>
