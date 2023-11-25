<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

table, td {
  border: 1px solid black;
}

td {
  width: 50px;
  height: 50px;
}

.black {
  background-color: black;
}

.white {
  background-color: white;
}
</style>
</head>
<body>

<table>
<?php
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) 
    {
        if (($i + $j) % 2 == 0)
         {
            echo "<td class='white'></td>";
        }
         else {
            echo "<td class='black'></td>";
        }
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
