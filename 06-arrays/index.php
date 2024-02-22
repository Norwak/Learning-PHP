<?php
echo '<pre>';

  // $arr = array();
  // $arr = [];
  // var_dump($arr);

  // $arr = ['Иванов', 'Петров', 'Сидоров', 787 => 'Doe'];
  // $arr[] = 'Smith';
  // $arr[5] = 70.5;
  // $arr['5'] = 22;
  // print_r($arr);
  // echo $arr[1];

  // $goods = [
  //   (object) [
  //     'brand' => 'Nokia',
  //     'price' => 100,
  //     'quantity' => 10
  //   ],
  //   (object) [
  //     'brand' => 'Sony',
  //     'price' => 130,
  //     'quantity' => 8
  //   ],
  // ];
  // print_r($goods);
  // echo $goods[0]->brand;
  // echo $goods[1]->brand;

  // $numbers = [];
  // for ($i=1; $i <= 10; $i++) { 
  //   $numbers[] = $i;
  // }
  // foreach ($numbers as $key => $number) {
  //   echo "{$key}: {$number}<br>";
  // }

  // $goods = [
  //   (object) [
  //     'brand' => 'Nokia',
  //     'price' => 100,
  //     'quantity' => 10
  //   ],
  //   (object) [
  //     'brand' => 'Sony',
  //     'price' => 130,
  //     'quantity' => 8
  //   ],
  // ];
  // foreach ($goods as $key => $good) {
  //   $good->total = $good->price * $good->quantity;
  // }
  // print_r($goods);

  $goods = [
    [
      'brand' => 'Nokia',
      'price' => 100,
      'quantity' => 10
    ],
    [
      'brand' => 'Sony',
      'price' => 130,
      'quantity' => 8
    ],
  ];
  foreach ($goods as $key => &$good) {
    $good['total'] = $good['price'] * $good['quantity'];
    $good['price'] *= 2;
  }
  print_r($goods);

echo '</pre>';