<?php
// Task #1
echo '<h1>Задание 1</h1>';
echo '<label for="year-select">Choose a year:</label>';
echo '<select name="year" id="year-select">';
$year = 1900;
while ($year <= 2021) {
  echo "<option value=\"{$year}\">{$year}</option>";
  $year++;
}
echo '</select>';
echo '<p>&nbsp;</p>';


// Task #2
echo '<h1>Задание 2</h1>';
echo '<table border="1">';

$tr = 1;
while ($tr <= 10) {
  echo '<tr>';

  $td = 1;
  while ($td <= 10) {
    $result = $td * $tr;
    echo "<td>{$td} ⋅ {$tr} = {$result}</td>";
    $td++;
  }

  echo '</tr>';
  $tr++;
}

echo '</table>';