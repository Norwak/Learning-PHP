<?php
// test();

// function test() {
//   echo '<p>Hello World!</p>';
// }

// test();


// function hello($name = 'Guest') {
//   echo "<p>Hello, {$name}!</p>";
// }

// hello('John');
// hello();


// // function sum($a = 1, $b, $c = 2) { // deprecated
// function sum($a, $b, $c = 2) {
//   echo ($a + $b) * $c;
// }
// sum(1, 2, 3);


// Scopes
// $a = 5;
// function test($a) {
//   global $a; // bad practice, &$a is better, having return is best
//   $a += 10;
//   var_dump($a);
// }

// var_dump($a);
// test($a);
// var_dump($a);


// Spread operator
// function sum(...$nums) {
//   return array_reduce($nums, fn($sum, $num) => $sum += $num);
// }

// echo sum(1, 2, 3, 4, 5);


// function test() {
//   static $a = 0; // probably results in untestable function
//   echo $a;
//   $a++;
// }

// test();
// test();
// test();


function sum(int $a, int $b, int $c): int|null {
  if ($a && $b && $c) {
    return $a + $b + $c;
  }
  return null;
}


echo sum(a: 1, b: 2, c: 3);