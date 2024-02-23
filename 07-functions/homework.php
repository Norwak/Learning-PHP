<?php
echo '<h1>Задание №1</h1>';
$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];

function get_count(array $arr): int {
  return (int) array_reduce($arr, fn($count, $item) => ++$count);
}
echo '<p>' . get_count($arr) . '</p>';
echo '<p>' . get_count($goods) . '</p>';
echo '<p>&nbsp;</p>';



echo '<h1>Задание №2</h1>';
function multiplication_table(int $rows = 1, int $cols = 1): string {
  ob_start(); ?>
  <table border="1" width="100%"> <?php
    for ($i=1; $i <= $rows; $i++) { ?>
      <tr> <?php
        for ($j=1; $j <= $cols; $j++) { ?>
          <td><?=$j?> ⋅ <?=$i?> = <?=$i*$j?></td> <?php
        } ?>
      </tr> <?php
    } ?>
  </table> <?php
  return ob_get_clean();
}
echo multiplication_table(15, 5);
echo '<p>&nbsp;</p>';