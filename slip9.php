<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  String: <input type="text" name="string"><br>
  Separator: <select name="separator">
    <option value="#">#</option>
    <option value="|">|</option>
    <option value="%">%</option>
  </select><br>
  <input type="submit">
</form>

</body>
</html>


php file

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['string'];
    $separator = $_POST['separator'];

    // a. Split the string into separate words using the given separator.
    $words = explode($separator, $string);
    echo "Words: ";
    foreach ($words as $word) {
        echo $word . " ";
    }
    echo "<br>";

    // b. Replace all the occurrences of separator in the given string with some other separator.
    $newSeparator = "@";
    $newString = str_replace($separator, $newSeparator, $string);
    echo "New String: " . $newString . "<br>";

    // c. Find the last word in the given string.
    $lastWord = end($words);
    echo "Last Word: " . $lastWord . "<br>";
}
?>
