<?php

$title = 'Урок 4';
$winnie_the_pooh = "Hello, I'm Winnie! \"Строка в кавычках\"";

$fruit = 'apple';
$winnie_the_pooh = "Hello, I'm Winnie! I have 2 {$fruit}s";

$var = 'Variable #1';
$Var = 'Variable #2';

define("CONST_1", "value 1");
const CONST_2 = "value 2";

$bool = true;
$bool2 = (bool) 'Text'; // true

$int = 0;
$int2 = 1;
$int3 = (int) "Hello";
$int4 = (int) "123";
$int5 = (int) "123Hello";
$int6 = (int) "Hello123";
// $int6 = "10str" + 20;

$float = 1_234.567; // можно использовать _ для разделения разрядов >=PHP7.4
$float2 = (float) 123 + 10;
$float3 = 0.1 + 0.2;
$float4 = (0.1 * 10 + 0.2 * 10) / 10;

$str = "<p>Hello 1</p>\n";
$str2 = "<p>Hello 1</p>\r";
$str3 = "<p>Hello 1</p>" . PHP_EOL;

$str4 = <<<HEREDOC
<p>I have 55 {$fruit}s.</p>
<p>I am Winnie Pooh. \\ \n</p>
HEREDOC;

$str5 = <<<'NOWDOC'
<p>I have 55 {$fruit}s.</p>
<p>I am Winnie Pooh. \\ \n</p>
NOWDOC;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
</head>
<body>
  <h1><?=$title?></h1>
  <p><?=$winnie_the_pooh?></p>

  <p><?php var_dump($var, $Var); ?></p>

  <p><?=CONST_1;?></p>
  <p><?php var_dump(CONST_2); ?></p>
  <p><?= 'Hello {CONST_2}'; ?></p>

  <p> <?php
    echo $bool; echo '<br>';
    echo $bool2; echo '<br>';
    echo $int; echo '<br>';
    echo $int2; echo '<br>';
    echo $int3; echo '<br>';
    echo $int4; echo '<br>';
    echo $int5; echo '<br>';
    echo $int6; echo '<br>';
    echo $float; echo '<br>';
    echo $float2; echo '<br>';
    var_dump($float3); echo '<br>';
    var_dump($float4); echo '<br>';
    echo $str;
    echo $str2;
    echo $str3;
    echo $str4;
    echo $str5;
  ?>
  </p>
</body>
</html>