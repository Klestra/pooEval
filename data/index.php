<?php
    spl_autoload_register(function($class) {
        include("./class/" . $class . ".php");
    });
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nisi nisl nec sem</title>
  </head>

  <body>
    <main>
      <?php
        TemplateClass::views();
      ?>
    </main>
  </body>
</html>