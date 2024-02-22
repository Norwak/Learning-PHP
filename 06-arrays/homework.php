<?php
$goods = [
  (object) [
    'brand' => 'Nokia',
    'price' => 100,
    'quantity' => 10
  ],
  (object) [
    'brand' => 'Sony',
    'price' => 130,
    'quantity' => 2
  ],
  (object) [
    'brand' => 'ZTE',
    'price' => 400,
    'quantity' => 12
  ],
  (object) [
    'brand' => 'ASUS',
    'price' => 900,
    'quantity' => 4
  ],
  (object) [
    'brand' => 'Xiaomi',
    'price' => 700,
    'quantity' => 15
  ],
  (object) [
    'brand' => 'Samsung',
    'price' => 1200,
    'quantity' => 5
  ],
  (object) [
    'brand' => 'Apple',
    'price' => 1500,
    'quantity' => 5
  ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сетка товаров</title>
  
  <link rel="stylesheet" href="homework.css">
</head>
<body>
  
  <div class="products">
    <div class="container">
      <div class="products__inner"> <?php

        foreach ($goods as $product) { ?>
          <div class="product">
            <div class="product__inner">
              <div class="product__property product__property--title">
                <span class="product__label">Бренд<span class="product__separator">:</span></span>
                <span class="product__value"><?=$product->brand?></span>
              </div>
              <div class="product__property product__property--price">
                <span class="product__label">Цена<span class="product__separator">:</span></span>
                <span class="product__value"><?=$product->price?></span>
              </div>
              <div class="product__property product__property--quantity">
                <span class="product__label">Количество<span class="product__separator">:</span></span>
                <span class="product__value"><?=$product->quantity?></span>
              </div>
            </div>
          </div> <?php
        } ?>

      </div>
    </div>
  </div>

</body>
</html>