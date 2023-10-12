<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>super globals</title>
</head>
<body>
  <main>
    <pre>
      <?php 
        setcookie("dia-da-semana", "segunda", time() + 3600);

        session_start();
        $_SESSION["test"] = "FUNCIONOU";

        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET);

        echo "<h1>Superglobal post</h1>";
        var_dump($_POST);

        echo "<h1>Superglobal request</h1>";
        var_dump($_REQUEST);

        echo "<h1>Superglobal cookie</h1>";
        var_dump($_COOKIE);

        echo "<h1>Superglobal session</h1>";
        var_dump($_SESSION);
      ?>
    </pre>
  </main>
</body>
</html>