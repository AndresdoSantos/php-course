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

      $predecessor = $number - 1;
      $successor = $number + 1;

      echo <<< RESULT
        <p>the number chosen was <strong>$number</strong></p> 
        <p>its <i>predecessor</i> is $predecessor</p> 
        <p>its <i>successor</i> is $successor</p> 
      RESULT;
    ?>

    <p>
      <a href="javascript:history.go(-1)">go back</a>
    </p>
  </main>
</body>
</html>