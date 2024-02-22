<?php
echo '<h1>Задача 1</h1>';

// без continue
$nums = [1,2,3,4,5,6,7,8,9,10];
$nums = array_filter($nums, fn($num) => $num % 2 === 0);
echo implode(', ', $nums);

// с continue
echo '<br>';
$nums = [1,2,3,4,5,6,7,8,9,10];
foreach ($nums as $num) {
  if ($num % 2 === 1) continue;
  echo "{$num}, ";
}

echo '<p>&nbsp;</p>';


///////////////////////////////////////////////////////


echo '<h1>Задача 2</h1>';

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

// циклом for
// for ($i=0; $i < count($goods); $i++) { 
//   if ($goods[$i]['price'] < 120) {
//     $goods[$i]['price'] += 15;
//   }
// }

// циклом foreach
foreach ($goods as &$good) {
  if ($good['price'] < 120) {
    $good['price'] += 15;
  }
}
echo '<pre>'; print_r($goods); echo '</pre>';