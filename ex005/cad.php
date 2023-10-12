<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>result</title>
</head>
<body>
  <header>
    <h1>result</h1>
  </header> 

  <main>
    <?php 
      var_dump($_REQUEST); // join of $_GET, $_POST & $_COOKIES

      $name = $_GET['name'] ?? "without name";
      $last_name = $_GET['last_name'] ?? "unknown";

      echo "<p>welcome, <strong>$name $last_name</strong></p>"
    ?>

    <p>
      <a href="javascript:history.go(-1)">go back</a>
    </p>
  </main>
</body>
</html>