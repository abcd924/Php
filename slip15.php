<!DOCTYPE html>
<html>
  <head>
    <title>String Operations</title>
  </head>
  <body>
    <form method="post">
      <label for="inputString">Enter a string:</label><br>
      <input type="text" id="inputString" name="inputString"><br><br>
      <button type="submit" name="submit">Perform Operations</button><br><br>
      <label for="outputString">Output:</label><br>
      <textarea id="outputString" name="outputString" rows="5" cols="50"><?php
        if (isset($_POST['submit'])) {
          // Get the input string
          $inputString = $_POST['inputString'];

          // Select the first 5 words from the string
          $first5Words = implode(' ', array_slice(explode(' ', $inputString), 0, 5));

          // Convert the string to lowercase and then to Title case
          $titleCaseString = ucwords(strtolower($inputString));

          // Pad the string with "*" from left and right both the sides
          $paddedString = '*' . trim($inputString) . '*';

          // Remove the leading whitespaces from the string
          $trimmedString = ltrim($inputString);

          // Find the reverse of the string
          $reversedString = strrev($inputString);

          // Set the output string
          echo "a. First 5 words: " . $first5Words . "\n" .
            "b. Lowercase to Title case: " . $titleCaseString . "\n" .
            "c. Padded string: " . $paddedString . "\n" .
            "d. Trimmed string: " . $trimmedString . "\n" .
            "e. Reversed string: " . $reversedString;
        }
      ?></textarea>
    </form>
  </body>
</html>
