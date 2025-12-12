<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>URL Input — Simple Demo</title>
</head>
<body>
  <form action="" method="post">
        <input type="url" name="link" id="link">
        <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
    include "hash.php";
    include "db.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $link = $_POST['link'];
        echo hashify($link);
    }
?>