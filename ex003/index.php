<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>primitive types</title>
</head>
<body>
  <h1>primitive tests php</h1>
  <?php 
    $v = (integer) 30.87; // force integer type

    echo "show info about variable" . var_dump($v);

    echo "\n";

    $married = true;

    echo "the married value is $married";

    echo "\n";

    $vet = [2, 6, 7.8, "Maria", false];

    echo "the array value is " . var_dump($vet);

    echo "\n";

    class People {
      private string $name;
    }

    $p = new People();
    var_dump($p);
  ?>
</body>
</html>