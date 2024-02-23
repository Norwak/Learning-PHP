<?php
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

$car = [
  'brand' => 'Toyota',
  'model' => 'Camry',
  'year' => 2021,
  'speed' => 220,
  'wheels' => 4,
];

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];



// $mode = 1;
// echo count($goods, $mode);

// print_r(array_count_values($nums));

// var_dump(array_key_exists('brand', $car));
// var_dump(array_key_exists('engine', $car));

// $strict = true;
// var_dump(in_array(2021, $car, $strict));
// var_dump(in_array('2021', $car, $strict));

// $strict = true;
// var_dump(array_search(4, $nums, $strict));
// var_dump(array_search('4', $nums, $strict));

// print_r(array_keys($car));

// print_r(array_values($car));

// print_r(array_unique($nums));


function odd(int $var): bool {
  return (bool) ($var % 2);
}
function even(int $var): bool {
  return (bool) !($var % 2);
}

// print_r(array_filter($nums, 'odd'));
// print_r(array_filter($nums, 'even'));
// print_r(array_filter($nums, fn($var) => $var % 2));
// print_r(array_filter($nums, fn($var) => !($var % 2)));


// print_r(range(1, 10));





$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('©Hello &gt;' + \" world\")</script>";
$str4 = "Привет!\nВо первых строках своего письма...";

// echo strlen($str);
// echo strlen($str2);

// echo mb_strlen($str);
// echo mb_strlen($str2);

// echo implode(', ', explode(', ', $str2));

// echo htmlspecialchars($str3);
// echo htmlspecialchars($str3, ENT_QUOTES);
// echo htmlspecialchars($str3, ENT_QUOTES, 'UTF-8', false);

// echo htmlentities($str3);

// echo ltrim($str);
// echo rtrim($str);
// echo trim($str);
// echo trim($str, "world! ");