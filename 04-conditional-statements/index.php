<?php
// echo 'Test 1 ', 'Test 2 ', 'Test 3 ';
// var_dump(print('Test 4 '));

$light = 'red';

// if ($light === 'red') echo 'Stop';
// if ($light === 'yellow') echo 'Wait';
// if ($light === 'green') echo 'Go';

// if ($light === 'green') {
//   echo 'You can go now';
// } elseif ($light === 'yellow') {
//   echo 'Get ready';
// } else {
//   echo 'Stop';
// }

$price = '3 копейки';
// var_dump($price);

// echo ($light === 'green') ? 'You can go now' : 'Stop';
// echo $price ?: 'unknown price';

// switch ($light) {
//   case 'red':
//     echo 'Stop'; break;

//   case 'yellow':
//     echo 'Wait'; break;

//   case 'green':
//     echo 'Go'; break;
// }


// $i = 23;
// $result = match ($i) {
//   '5' => 'Строка',
//   5 => 'Число',
//   6, 7, 8 => 'Перечисление',
//   default => 'Сработала заглушка'
// };
// echo $result;

$i = 'z';
$result = match (true) {
  ($i < 10) => 'Меньше 10',
  ($i === 10) => 'Равно 10',
  ($i > 10) => 'Больше 10', // сработает это
  default => 'Сработала заглушка'
};
echo $result;
// в PHP8 строка всегда больше числа