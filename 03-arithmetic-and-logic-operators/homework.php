<?php
// Task #1
$in_an_hour = 60 * 60;
$in_a_day = $in_an_hour * 24;
$in_a_week = $in_a_day * 7;
echo <<<HEREDOC
<h1>Задание 1</h1>
<ul>
  <li>В часе {$in_an_hour} секунд;</li>
  <li>В сутках {$in_a_day} секунд;</li>
  <li>В неделе {$in_a_week} секунд;</li>
</ul>
HEREDOC;
echo '<p>&nbsp;</p>';

// Task #2
echo '<h1>Задание 2</h1>';
echo '<ul>';
  $x = 60;
  $x *= 60;
  echo "<li>В часе {$x} секунд;</li>";
  $x *= 24;
  echo "<li>В сутках {$x} секунд;</li>";
  $x *= 7;
  echo "<li>В неделе {$x} секунд;</li>";
echo '</li>';