<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>example php</title>
</head>
<body>
  <h1>php example</h1>
  <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "today is day " . date("d/M/Y");
    echo " and the hour is " . date("G:i:s");
  ?>
</body>
</html>