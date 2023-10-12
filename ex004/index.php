<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>strings</title>
</head>
<body>
  <?php 
    $name = "andres";
    const COUNTRY = "Brazil";
    
    echo "hello $name"; // interprets the string
    echo 'hello $name'; // dont interprets the string

    echo "my country is " . COUNTRY;

    $nom = "Rodrigo";
    $snom = "Nogueira";

    echo "$nom \"MINOTAURO\" $snom";

    // sintax heredoc
    $course = "php";
    $year = date('y');

    echo <<< FRASE
      i learning about $course em $year
    FRASE;

     // sintax nowdoc
    echo <<< 'FRASE'
      i learning about $course em $year
    FRASE;
  ?>
</body>
</html>