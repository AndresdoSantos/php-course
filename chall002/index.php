<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>random</title>
</head>
<body>
  <header>
    <h1>random number</h1>
  </header>

  <main>
    <?php
      function generate_random_value() {
        return rand(0, 100);
      };

      $random = generate_random_value();

      echo <<< RANDOM
        <p>generate a random number between 0 and 100...</p>
        <p>the random number is <strong>$random</strong></p>
        RANDOM;
    ?>

    <button onclick="javascript:document.location.reload()">generate another</button>
  </main>
</body>
</html>