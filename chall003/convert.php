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
    <h1>FINAL RESULT</h1>
  </header>

  <main>
    <?php 
      $number = $_GET['number'];

      $price = $number * 5.05;

      echo <<< RESULT
        <p>seus R$ $number equivalem a <strong>us$ $price</strong></p> 
        <p><strong>cotacao fixa de R$ 5,05</strong> informada diretamente no codigo</p> 
      RESULT;
    ?>

    <p>
      <a href="javascript:history.go(-1)">go back</a>
    </p>
  </main>
</body>
</html>