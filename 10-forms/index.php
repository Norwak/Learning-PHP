<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>
<body>
  <form action="action.php" method="POST" enctype="multipart/form-data">
    <p>Name: <input type="text" name="name"></p>
    <p>Email: <input type="email" name="email"></p>
    <p>Text: <textarea name="message"></textarea></p>
    <p>Agree? <input type="checkbox" name="agree"></p>
    <p>
      <select name="lang[]" multiple>
        <option value="ru">Russian</option>
        <option value="en">English</option>
        <option value="fr">French</option>
      </select>
    </p>
    <p><input type="file" name="file"></p>
    <p><button type="submit">Send</button></p>
  </form>
</body>
</html>