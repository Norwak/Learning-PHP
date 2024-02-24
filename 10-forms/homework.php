<?php
$fields = [
  'name' => 'Имя',
  'email' => 'Эл. почта',
  'message' => 'Текст',
  'agree' => 'Согласие',
  'lang' => 'Языки',
];
$form_sent = (isset($_POST['send_form'])) ? true : false;

$data = [];
foreach ($fields as $key => $field) {
  if (isset($_POST[$key]) && !empty($_POST[$key])) {
    if ($key === 'lang') {
      $_POST[$key] = implode(', ', $_POST[$key]);
    }
    $data[$field] = $_POST[$key];
  }
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homework</title>
</head>
<body>
  <?php
  if (empty($data)) { ?>

    <form action="" method="post">
      <p>Name: <input type="text" name="name"></p>
      <p>Email: <input type="email" name="email"></p>
      <p>Text: <textarea name="message"></textarea></p>
      <p>Agree? <input type="checkbox" name="agree" value="Да"></p>
      <p>
        <select name="lang[]" multiple>
          <option value="ru">Russian</option>
          <option value="en">English</option>
          <option value="fr">French</option>
        </select>
      </p>
      <p><button type="submit" name="send_form">Send</button></p>
    </form> <?php

    if ($form_sent) {
      echo 'Ошибка, поля пустые!';
    }

  } else {

    foreach ($data as $key => $item) {
      echo "<p>{$key}: {$item}</p>";
    }

  } ?>
</body>
</html>