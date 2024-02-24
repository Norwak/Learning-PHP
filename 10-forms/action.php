<?php
echo '<pre>';

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST); // a mess
// print_r($_FILES);

if (empty($_FILES)) exit();

$tmp_name = $_FILES["file"]["tmp_name"];
$name = basename($_FILES["file"]["name"]);

if (move_uploaded_file($tmp_name, "upload/{$name}")) {
  echo 'Success';
} else {
  echo 'Error';
};

echo '</pre>';