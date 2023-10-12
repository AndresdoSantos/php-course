<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>get data</title>
</head>
<body>
  <header>
    <h1>introduce yourself to us</h1>
  </header>

  <section>
    <form action="cad.php" method="get">
      <label for="name">nome</label>
      <input type="text" name="name" id="id_name">
      <label for="name">sobrenome</label>
      <input type="text" name="last_name" id="id_last_name">
      <input type="submit" value="enviar">
    </form>
  </section>
</body>
</html>