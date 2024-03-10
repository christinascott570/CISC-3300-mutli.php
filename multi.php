<!DOCTYPE html>
<html>
<head>
<style>
  th{
    background-color: cyan;
    font-weight: bold;
  }
</style>
</head>
</html>
<?php
  function table ($row, $col)
  {
    echo "<table border = 1>";
    echo "<tr><th> X </th>";
    for ($i = 1; $i < ($col + 1); $i++)
    {
      echo "<th>" . $i . "</th>";
    }
    echo "</tr>";
    for ($i = 1; $i < ($row + 1); $i++)
    {
      $j = 1;
      echo "<tr>";
      echo "<th>" . $i . "</th>";

      while ($j < ($col + 1))
      {
        $value = $i * $j;
        echo "<td>" . $value . "</td>";
        $j++;
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  table(10,10);
  echo "<br>";
  $maxRow = rand(1,10);
  $maxCol = rand(1,10);
  table($maxRow, $maxCol);
?>
