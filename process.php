<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hello world</title>
  </head>
  <body>
    <?php

      $names =array( $_POST['name'], $_POST['name1'], $_POST['name1']);

foreach ($names as $name) {
      echo "Hello, " . $name . " ";
    };

     ?>

  </body>
</html>
