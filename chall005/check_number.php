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
      $number = (float) $_GET['number'];

      $int = intval($number);
      $float_part = number_format(floatval($number) - $int, 2, '.', '');

      echo <<< RESULT
        <p>analisando o numero <strong>$number</strong> informado pelo usuario:</p> 
        
        <ul>
          <li>
            <p>a parte inteira do numero e <strong>$int</strong></p> 
          </li>

          <li>
            <p>a parte fracionaria do numero e <strong>$float_part</strong></p> 
          </li>
        </ul>
      RESULT;
    ?>

    <p>
      <a href="javascript:history.go(-1)">go back</a>
    </p>
  </main>
</body>
</html>