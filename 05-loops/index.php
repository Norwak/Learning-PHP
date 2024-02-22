<?php

// $i = 1;
// while ($i <= 10) {
//   echo $i . '<br>';
//   $i++;
// }


// echo '<table border="1" width="100%">';

// $tr = 1;
// while ($tr <= 10) {
//   echo '<tr>';

//   $td = 1;
//   while ($td <= 20) {
//     echo "<td>{$td}:{$tr}</td>";
//     $td++;
//   }

//   echo '</tr>';
//   $tr++;
// }

// echo '</table>';


// $i = 11;
// do {
//   echo $i . '<br>';
// } while ($i <= 10);


// for ($i = 1; $i <= 10; $i++) {
//   echo $i . '<br>';
// }

// for ($i = 20; $i >= 1; $i--) {
//   echo $i . '<br>';
// }


// for ($i = 1; $i <= 10; $i++) {
//   if ($i % 2 === 0)
//     continue;

//   echo $i . '<br>';
// }

$i = 1;
while (TRUE) {
  if ($i === 40) {
    break;
  }

  echo $i . PHP_EOL;
  $i++;
}